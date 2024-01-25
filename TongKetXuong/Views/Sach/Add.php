<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Thêm</h1>
    <a href="index.php"><button>Trở lại</button></a>
    <form action="index.php?url=addSach" enctype="multipart/form-data" method="post">
        <label for="">Tên Sách</label>
        <input type="text" name="ten_sach" placeholder="Nhập tên sách"><br>
        <label for="">Giá</label>
        <input type="number" name="gia" placeholder="Nhập giá sách"><br>
        <label for="">Hình Ảnh</label>
        <input type="file" name="hinh_anh"><br>
        <label for="">Năm Xuất bản</label>
        <input type="date" name="nam_xuat_ban"><br>
        <label for="">Tác Giả</label>
        <input type="text" name="tac_gia" placeholder="Nhập tên tác giả"><br>
        <label for="">Danh Mục</label>
        <select name="id_danh_muc" id="">
            <?php foreach ($danhMuc as $key => $value) : ?>
                <option value="<?= $value['id'] ?>"><?= $value['ten_danh_muc'] ?></option>
            <?php endforeach ?>
        </select><br>
        <label for="">Trạng Thái</label>
        <input type="number" name="trang_thai_sach" value="<?= $sach['trang_thai_sach'] ?>"><br>
        <button type="submit" name="add">Thêm</button>
    </form>
</body>

</html>