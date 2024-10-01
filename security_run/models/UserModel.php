<?php

require_once 'BaseModel.php';

class UserModel extends BaseModel
{

    // public function findUserById($id) {
    //     $sql = 'SELECT * FROM users WHERE id = '.$id;
    //     $user = $this->select($sql);

    //     return $user;
    // }

    public function findUserById($encoded_id, $secret_key)
    {
        $id = $this->decrypt_id($encoded_id, $secret_key); // Giải mã ID
        if ($id === null) {
            return null; // Nếu ID không hợp lệ, trả về null
        }

        $sql = 'SELECT * FROM users WHERE id = ' . intval($id); // Sử dụng intval để bảo vệ
        $user = $this->select($sql);

        return $user;
    }

    public function findUser($keyword)
    {
        $sql = 'SELECT * FROM users WHERE user_name LIKE %' . $keyword . '%' . ' OR user_email LIKE %' . $keyword . '%';
        $user = $this->select($sql);

        return $user;
    }

    // hàm thực thi mã hoá
    function encrypt_id($id, $secret_key)
    {
        return base64_encode($id . '|' . $secret_key);
    }

    function decrypt_id($encoded_id, $secret_key)
    {
        $decoded = base64_decode($encoded_id);
        if ($decoded === false) {
            return null;
        }
        list($id, $key) = explode('|', $decoded);
        if ($key !== $secret_key) {
            return null;
        }
        return $id;
    }

    /**
     * Authentication user
     * @param $userName
     * @param $password
     * @return array
     */
    public function auth($userName, $password)
    {
        $sql = 'SELECT * FROM users WHERE name = ?';
        $stmt = self::$_connection->prepare($sql);
        $stmt->bind_param('s', $userName);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                return $user;
            }
        }
        return NULL;
    }

    /**
     * Delete user by id
     * @param $id
     * @return mixed
     */
    public function deleteUserById($id)
    {
        $sql = 'DELETE FROM users WHERE id = ' . $id;
        return $this->delete($sql);
    }

    /**
     * Update user
     * @param $input
     * @return mixed
     */
    public function updateUser($input)
    {
        $sql = 'UPDATE users SET
                 name = "' . mysqli_real_escape_string(self::$_connection, $input['name']) . '",
                 password="' . md5($input['password']) . '"
                WHERE id = ' . intval($input['id']);

        $user = $this->update($sql);

        return $user;
    }

    /**
     * Insert user
     * @param $input
     * @return mixed
     */
    public function insertUser($input)
    {
        $sql = "INSERT INTO `app_web1`.`users` (`name`, `password`) VALUES (?, ?)";
        $stmt = self::$_connection->prepare($sql);
        $hashedPassword = password_hash($input['password'], PASSWORD_DEFAULT);
        $stmt->bind_param('ss', $input['name'], $hashedPassword);
        if ($stmt->execute()) {
            return $stmt->insert_id;
        } else {
            throw new Exception("Error inserting user: " . $stmt->error);
        }
    }

    /**
     * Search users
     * @param array $params
     * @return array
     */
    public function getUsers($params = [])
    {
        //Keyword
        if (!empty($params['keyword'])) {
            $sql = 'SELECT * FROM users WHERE name LIKE "%' . $params['keyword'] . '%"';

            //Keep this line to use Sql Injection
            //Don't change
            //Example keyword: abcef%";TRUNCATE banks;##
            $users = self::$_connection->multi_query($sql);

            //Get data
            $users = $this->query($sql);
        } else {
            $sql = 'SELECT * FROM users';
            $users = $this->select($sql);
        }

        return $users;
    }
}
