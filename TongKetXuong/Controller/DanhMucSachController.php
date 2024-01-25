<?php
require_once 'Model/DanhMucSach.php';
class DanhMucSachController
{
    function listDanhMuc()
    {
        $danhMucs = new DanhMucSach();
        $danhMuc = $danhMucs->getListDanhMucSach();
        include 'Views/DanhMucSach/List.php';
    }
    public function oneDanhMuc()
    {

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        $dms = new DanhMucSach();
        $dm = $dms->getOneDanhMucSach($id);
        include 'Views/DanhMucSach/Update.php';
    }
    public function viewAddDanhMuc()
    {
        include 'Views/DanhMucSach/Add.php';
    }
    public function addDanhMuc()
    {
        if (isset($_POST['add'])) {
            $ten_danh_muc = $_POST['ten_danh_muc'];
            $trang_thai = $_POST['trang_thai'];
        }
        $dms = new DanhMucSach();
        $dm = $dms->addDanhMucSach($ten_danh_muc, $trang_thai);
        header('location: index.php?url=viewDanhMuc');
    }
    public function updateDanhMuc()
    {
        if (isset($_POST['update'])) {
            $id = $_GET['id'];
            $ten_danh_muc = $_POST['ten_danh_muc'];
            $trang_thai = $_POST['trang_thai'];
        }
        $dms = new DanhMucSach();
        $dm = $dms->updateDanhMuc($id, $ten_danh_muc, $trang_thai);
        header('location: index.php?url=viewDanhMuc');
    }
    public function deleteDanhMuc()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        $dms = new DanhMucSach();
        $dm = $dms->deleteSach($id);
        header('location: index.php?url=viewDanhMuc');
    }
}
