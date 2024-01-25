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
    <form action="index.php?url=updateDanhMuc&id=<?= $dm['id'] ?>" enctype="multipart/form-data" method="post">
        <label for="">Tên Danh Mục</label>
        <input type="text" name="ten_danh_muc" value="<?= $dm['ten_danh_muc'] ?>"><br>
        <label for="">Trạng Thái</label>
        <input type="number" name="trang_thai" value="<?= $dm['trang_thai'] ?>"><br>
        <button type="submit" name="update">Sửa</button>
    </form>
</body>

</html>