<?php
require_once 'Model/Sach.php';
require_once 'Model/DanhMucSach.php';
class SachController
{
    public function listSach()
    {
        $sachs = new Sach();
        $sach = $sachs->getListSach();
        include_once "Views/Sach/List.php";
    }
    public function oneSach()
    {

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        $sachs = new Sach();
        $sach = $sachs->getOneSach($id);
        $danhMucs = new DanhMucSach();
        $danhMuc = $danhMucs->getListDanhMucSach();
        include 'Views/Sach/Update.php';
    }
    public function viewAddSach()
    {
        $danhMucs = new DanhMucSach();
        $danhMuc = $danhMucs->getListDanhMucSach();
        include_once 'Views/Sach/Add.php';
    }
    public function addSach()
    {
        if (isset($_POST['add'])) {
            $tenSach = $_POST['ten_sach'];
            $gia = $_POST['gia'];
            $anh = $_FILES['hinh_anh'];
            $hinh_anh = $_FILES['hinh_anh']['name'];
            move_uploaded_file($anh['tmp_name'], "HinhAnh/" . $hinh_anh);
            $nam_xuat_ban = $_POST['nam_xuat_ban'];
            $tac_gia = $_POST['tac_gia'];
            $id_danh_muc = $_POST['id_danh_muc'];
            $trang_thai_sach = $_POST['trang_thai_sach'];
        }
        $sachs = new Sach();
        $sach = $sachs->addSach($tenSach, $gia, $hinh_anh, $nam_xuat_ban, $tac_gia, $id_danh_muc, $trang_thai_sach);
        header('location: index.php');
    }
    public function updateSachs()
    {
        if (isset($_POST['update'])) {
            $id = $_GET['id'];
            $tenSach = $_POST['ten_sach'];
            $gia = $_POST['gia'];
            $anh = $_FILES['hinh_anh'];
            $hinh_anh = $_FILES['hinh_anh']['name'];
            move_uploaded_file($anh['tmp_name'], "HinhAnh/" . $hinh_anh);
            $nam_xuat_ban = $_POST['nam_xuat_ban'];
            $tac_gia = $_POST['tac_gia'];
            $id_danh_muc = $_POST['id_danh_muc'];
            $trang_thai_sach = $_POST['trang_thai_sach'];
        }
        $sachs = new Sach();
        $sach = $sachs->updateSach($id, $tenSach, $hinh_anh, $gia, $nam_xuat_ban, $tac_gia, $id_danh_muc, $trang_thai_sach);
        header('location: index.php');
    }
    public function deleteSach()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        $sachs = new Sach();
        $sach = $sachs->deleteSach($id);
        header('location: index.php');
    }
}
