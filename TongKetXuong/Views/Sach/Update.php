<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Sửa</h1>
    <a href="index.php"><button>Trở lại</button></a>
    <form action="index.php?url=updateSach&id=<?= $sach['id'] ?>" enctype="multipart/form-data" method="post">
        <label for="">Tên Sách</label>
        <input type="text" name="ten_sach" value="<?= $sach['ten_sach'] ?>"><br>
        <label for="">Giá</label>
        <input type="number" name="gia" value="<?= $sach['gia'] ?>"><br>
        <img src="HinhAnh/<?= $sach['hinh_anh'] ?>" width="150px" alt=""><br>
        <label for="">Hình Ảnh</label>
        <input type="file" name="hinh_anh"><br>
        <label for="">Năm Xuất bản</label>
        <input type="date" name="nam_xuat_ban" value="<?= $sach['nam_xuat_ban'] ?>"><br>
        <label for="">Tác Giả</label>
        <input type="text" name="tac_gia" value="<?= $sach['tac_gia'] ?>"><br>
        <label for="">Danh Mục</label>
        <select name="id_danh_muc" id="">
            <?php foreach ($danhMuc as $key => $value) : ?>
                <option value="<?= $value['id']?>"<?php if ($sach['id_danh_muc']==$value['id']) {
                    echo "selected";
                }?>><?= $value['ten_danh_muc']?></option>
            <?php endforeach ?>
        </select><br>
        <label for="">Trạng Thái</label>
        <input type="number" name="trang_thai_sach" value="<?= $sach['trang_thai_sach']?>"><br>
        <button type="submit" name="update">Sửa</button>
    </form>
</body>

</html>