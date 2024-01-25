<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="index.php?url=viewDangNhap"><button>Đăng nhập</button></a>
    <a href="index.php?url=viewDangKy"><button>Đăng Ký</button></a>
    <a href="index.php?url=viewUser"><button>Quản lý User</button></a>
    <a href="index.php?url=viewDanhMuc"><button>Quản lý danh mục</button></a>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên Sách</th>
                <th>Giá</th>
                <th>Hình Ảnh</th>
                <th>Năm Xuất Bản</th>
                <th>Tác Giả</th>
                <th>Tên Danh Mục</th>
                <th>Trạng Thái</th>
                <th><a href="index.php?url=viewAddSach"><button>Thêm</button></a></th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($sach as $key => $value) : ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $value['ten_sach'] ?></td>
                    <td><?php echo $value['gia'] ?></td>
                    <td><img src="HinhAnh/<?php echo $value['hinh_anh'] ?>" alt="<?= $value['hinh_anh'] ?>" width="150px"></td>
                    <td><?= $value['nam_xuat_ban'] ?></td>
                    <td><?= $value['tac_gia'] ?></td>
                    <td><?= $value['ten_danh_muc'] ?></td>
                    <td><?php
                        if ($value['trang_thai_sach'] == 1) {
                            echo "Đang hoạt động";
                        } else {
                            echo "Dừng hoạt động";
                        }
                        ?>
                    </td>
                    <td><a href="index.php?url=viewUpdateSach&id=<?= $value['id'] ?>"><button>Sửa</button></a>
                        <a href=" index.php?url=deleteSach&id=<?= $value['id'] ?>"><button>Xóa</button></a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>