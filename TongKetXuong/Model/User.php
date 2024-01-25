<?php
require_once 'db.php';
class User extends db
{
    public function getListUser()
    {
        $sql = "SELECT * FROM tbl_nguoi_dung";
        return $this->getData($sql);
    }
    function getUser($id)
    {
        $sql = "SELECT * FROM tbl_nguoi_dung WHERE id = '$id'";
        return $this->getData($sql, false);
    }
    public function dangNhap($email, $password)
    {
        $sql = "SELECT * FROM tbl_nguoi_dung WHERE email = '$email' and password = '$password'";
        return $this->getData($sql);
    }
    public function addUser($ten, $email, $password)
    {
        $sql = "INSERT INTO tbl_nguoi_dung(ten,email,password)
        VALUE('$ten','$email','$password')";
        return $this->getData($sql);
    }
    public function updateUser($id, $ten, $email, $password, $trang_thai)
    {
        $sql = "UPDATE tbl_nguoi_dung SET ten= '$ten',email= '$email',password='password',trang_thai =$trang_thai WHERE id = $id";
        return $this->getData($sql, false);
    }
    public function deleteUser($id)
    {
        $sql = "DELETE FROM tbl_nguoi_dung WHERE id = $id ";
        return $this->getData($sql, false);
    }
}
