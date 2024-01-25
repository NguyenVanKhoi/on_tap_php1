<?php
require_once 'model/User.php';
class UserController
{
    public function viewDangKy()
    {
        $users = new User();
        include 'Views/User/DangKy.php';
    }
    public function dangKy()
    {
        if (isset($_POST['dangKy'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $ten = $_POST['ten'];
        }
        $users = new User();
        $user = $users->addUser($ten, $email, $password);
        header('location: index.php');
    }
    public function  viewDangNhap()
    {
        include 'Views/User/DangNhap.php';
    }
    public function dangNhap()
    {
        if (isset($_POST['dangNhap'])) {
            $users = new User();
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = $users->dangNhap($email, $password);
            if ($user !== false && is_array($user) && count($user) > 0) {
                $_SESSION['s_user'] = $user;
                header("Location: index.php?url=/");
                exit();
            } else {
                header("location: index.php?url=viewDangNhap");
                echo "<p style='color:red'>Tài khoản không tồn tại</p>";
            }
        }
    }
    public function listUser()
    {
        $users = new User();
        $user = $users->getListUser();
        include 'Views/User/List.php';
    }
    public function oneUser()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        $users = new User();
        $user = $users->getUser($id);
        include 'Views/User/Update.php';
    }
    public function updateUser()
    {
        if (isset($_POST['update'])) {
            $id = $_GET['id'];
            $ten = $_POST['ten'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $trang_thai = $_POST['trang_thai'];
        }
        $users = new User();
        $user = $users->updateUser($id, $ten, $email, $password, $trang_thai);
        header('location: index.php?url=viewUser');
    }
    public function deleteUser()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        $users = new User();
        $user = $users->deleteUser($id);
        header('location: index.php?url=viewUser');
    }
}
