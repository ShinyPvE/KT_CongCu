<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>

<body>
    <h2>Đăng nhập</h2>
    <form method="post" action="login.php">
        <label>Tên Đăng Nhập: </label>
        <input type="text" name="username" required><br><br>
        <label>Mật khẩu: </label>
        <input type="password" name="password" required><br><br>
        <input type="submit" name="login" value="Dang Nhap">
    </form>
    <?php
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username == "user" && $password == "password") {
            echo "Đăng nhập thành công";
        } else {
            echo "Sai mật khẩu";
        }
    }
    ?>
</body>

</html>