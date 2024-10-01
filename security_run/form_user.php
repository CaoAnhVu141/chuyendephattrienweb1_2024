<?php
session_start();
require_once 'models/UserModel.php';

define('SECRET_KEY', 'demo_123');
$userModel = new UserModel();

$user = NULL; //Add new user
$user_id = NULL;

if (!empty($_GET['id'])) {
    $user_id = $_GET['id'];
    $user = $userModel->findUserById($user_id, SECRET_KEY);
}

// thực thi hàm check name
function check_Name($name) {
    return preg_match('/^[A-Za-z0-9]{5,15}$/', $name);
}

// thực thi hàm check password
function check_Password($password) {
    return preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()])[A-Za-z\d~!@#$%^&*()]{5,10}$/', $password);
}

$errors = [];

if (!empty($_POST['submit'])) {

   // thực thi báo lỗi
    if (empty($_POST['name']) || !check_Name($_POST['name'])) {
        $errors['name'] = 'Bạn phải nhập tên từ 5 đến 15 ký tự, chỉ chứa chữ cái và số.';
    }

     // thực thi báo lỗi
    if (empty($_POST['password']) || !check_Password($_POST['password'])) {
        $errors['password'] = 'Mật khẩu phải có 5-10 ký tự, bao gồm chữ thường, chữ hoa, số và ký tự đặc biệt.';
    }

    if (empty($errors)) {
        if (!empty($_POST['id'])) {
            $userModel->updateUser($_POST);
        } else {
            $userModel->insertUser($_POST);
        }
        header('location: list_users.php');
        exit();
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>

<body>
    <?php include 'views/header.php' ?>
    <div class="container">

        <?php if ($user || !isset($user_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo !empty($user[0]['id']) ? $user[0]['id'] : ''; ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name'])) echo $user[0]['name'] ?>'>
                    <?php if (!empty($errors['name'])): ?>
                        <div class="text-danger"><?php echo $errors['name']; ?></div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <?php if (!empty($errors['password'])): ?>
                        <div class="text-danger"><?php echo $errors['password']; ?></div>
                    <?php endif; ?>
                </div>

                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>
</body>

</html>
