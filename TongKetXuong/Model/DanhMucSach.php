<?php
require_once 'db.php';
class DanhMucSach extends db
{
    public function getListDanhMucSach()
    {
        $sql = "SELECT * FROM tbl_danh_muc_sach";
        return $this->getData($sql);
    }
    public function getOneDanhMucSach($id)
    {
        $sql = "SELECT * FROM tbl_danh_muc_sach WHERE id = $id";
        return $this->getData($sql, false);
    }
    public function addDanhMucSach($ten_danh_muc, $trang_thai)
    {
        $sql = "INSERT INTO tbl_danh_muc_sach(ten_danh_muc,trang_thai)
        VALUE('$ten_danh_muc','$trang_thai')";
        return $this->getData($sql);
    }
    public function updateDanhMuc($id, $ten_danh_muc,$trang_thai)
    {
        $sql = "UPDATE tbl_danh_muc_sach SET ten_danh_muc= '$ten_danh_muc',trang_thai= '$trang_thai' WHERE id = $id";
        return $this->getData($sql);
    }
    public function deleteSach($id)
    {
        $sql = "DELETE FROM tbl_danh_muc_sach WHERE id = $id ";
        return $this->getData($sql, false);
    }
}
