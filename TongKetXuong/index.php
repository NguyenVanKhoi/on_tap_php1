<?php
require_once 'Controller/SachController.php';
require_once 'Controller/DanhMucSachController.php';
require_once 'Controller/UserController.php';
$sach = new SachController();
$user = new UserController();
$dm = new DanhMucSachController();

$url = isset($_GET['url']) ? $_GET['url'] : '/';
switch ($url) {
    case '/':
        $sach->listSach();
        break;
        // start User
    case 'viewDangKy':
        $user->viewDangKy();
        break;
    case 'dangKy':
        $user->dangKy();
        break;
    case 'viewDangNhap':
        $user->viewDangNhap();
        break;
    case 'dangNhap':
        $user->dangNhap();
        break;
    case 'viewUser':
        $user->listUser();
        break;
    case 'viewUpdateUser':
        $user->oneUser();
        break;
    case 'updateUser':
        $user->updateUser();
        break;
    case 'deleteUser':
        $user->deleteUser();
        break;
        // end User
        // start Sách
    case 'viewAddSach':
        $sach->viewAddSach();
        break;
    case 'addSach':
        $sach->addSach();
        break;
    case 'viewUpdateSach':
        $sach->oneSach();
        break;
    case 'updateSach':
        $sach->updateSachs();
        break;
    case 'deleteSach':
        $sach->deleteSach();
        break;
        // end Sách
        // start danh mục
    case 'viewDanhMuc':
        $dm->listDanhMuc();
        break;
    case 'viewAddDanhMuc':
        $dm->viewAddDanhMuc();
        break;
    case 'addDanhMuc':
        $dm->addDanhMuc();
        break;
    case 'viewUpdateDanhMuc':
        $dm->oneDanhMuc();
        break;
    case 'updateDanhMuc':
        $dm->updateDanhMuc();
        break;
    case 'deleteDanhMuc':
        $dm->deleteDanhMuc();
        break;
    default:
        $sach->listSach();
        break;
}
