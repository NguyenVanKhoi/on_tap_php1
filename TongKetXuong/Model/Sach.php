<?php
require_once 'db.php';

class Sach extends db
{
    public function getListSach()
    {
        $sql = "SELECT sach.id, sach.ten_sach,sach.gia,sach.hinh_anh,sach.nam_xuat_ban,sach.tac_gia,sach.id_danh_muc,sach.trang_thai_sach,dms.ten_danh_muc
        FROM tbl_sach as sach JOIN tbl_danh_muc_sach as dms on sach.id_danh_muc = dms.id";
        return $this->getData($sql, true);
    }
    public function getOneSach($id)
    {
        $sql = "SELECT * FROM tbl_sach WHERE id = $id";
        return $this->getData($sql, false);
    }
    public function addSach($ten_sach, $gia, $hinh_anh, $nam_xuat_ban, $tac_gia, $id_danh_muc, $trang_thai_sach)
    {
        $sql = "INSERT INTO tbl_sach(ten_sach,gia,hinh_anh,nam_xuat_ban,tac_gia,id_danh_muc,trang_thai_sach)
        VALUE('$ten_sach',$gia, '$hinh_anh', '$nam_xuat_ban', '$tac_gia', $id_danh_muc, '$trang_thai_sach')";
        return $this->getData($sql, false);
    }
    public function updateSach($id, $ten_sach, $hinh_anh, $gia, $nam_xuat_ban, $tac_gia, $id_danh_muc, $trang_thai)
    {
        $sql = "UPDATE tbl_sach SET ten_sach= '$ten_sach', hinh_anh = '$hinh_anh', gia= $gia, nam_xuat_ban = '$nam_xuat_ban', tac_gia= '$tac_gia', id_danh_muc= $id_danh_muc, trang_thai_sach= '$trang_thai' WHERE id = $id";
        return $this->getData($sql);
    }
    public function deleteSach($id)
    {
        $sql = "DELETE FROM tbl_sach WHERE id = $id ";
        return $this->getData($sql, false);
    }
}
