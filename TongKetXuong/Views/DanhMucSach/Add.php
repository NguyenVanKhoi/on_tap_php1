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
    <form action="index.php?url=addDanhMuc" enctype="multipart/form-data" method="post">
        <label for="">Tên Danh Mục</label>
        <input type="text" name="ten_danh_muc" placeholder="Nhập tên danh mục"><br>
        <label for="">Trạng Thái</label>
        <input type="number" name="trang_thai" value="<?= $sach['trang_thai'] ?>"><br>
        <button type="submit" name="add">Thêm</button>
    </form>
</body>

</html>