<?php
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$id = NULL;

if(empty($_SESSION['csrf_token']))
{
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}


if (!empty($_POST['submit'])) {
    if ($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die('CSRF token is invalid.');
    }
    $id = $_POST['id'];
    if ($user_id !== $id) {
        die('Bạn không thể xoá.');
    }
    $userModel->deleteUserById($id);
    header('location: list_users.php');
}
?>