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
    <a href="index.php?url=viewDanhMuc"><button>Quản danh mục</button></a>
    <a href="index.php?url=/"><button>Quản lý sách</button></a>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên User</th>
                <th>Email</th>
                <th>Password</th>
                <th>Trạng Thái</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($user as $key => $value) : ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $value['ten'] ?></td>
                    <td><?php echo $value['email'] ?></td>
                    <td><?= $value['password'] ?></td>
                    <td><?php
                        if ($value['trang_thai'] == 1) {
                            echo "Đang hoạt động";
                        } else {
                            echo "Dừng hoạt động";
                        }
                        ?>
                    </td>
                    <td><a href="index.php?url=viewUpdateUser&id=<?= $value['id'] ?>"><button>Sửa</button></a>
                        <a href=" index.php?url=deleteUser&id=<?= $value['id'] ?>"><button>Xóa</button></a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>