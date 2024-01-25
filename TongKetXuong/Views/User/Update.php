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
    <form action="index.php?url=updateUser&id=<?= $user['id'] ?>" enctype="multipart/form-data" method="post">
        <label for="">Tên</label>
        <input type="text" name="ten" value="<?= $user['ten'] ?>"><br>
        <label for="">Email</label>
        <input type="text" name="email" value="<?= $user['email'] ?>"><br>
        <label for="">Password</label>
        <input type="text" name="password" value="<?= $user['password'] ?>"><br>
        <label for="">Trạng Thái</label>
        <input type="number" name="trang_thai" value="<?= $user['trang_thai']?>"><br>
        <button type="submit" name="update">Sửa</button>
    </form>
</body>

</html>