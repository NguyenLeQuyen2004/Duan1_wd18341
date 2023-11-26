<?php
// Kiểm tra xem người dùng đã gửi dữ liệu đăng nhập chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ biểu mẫu
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Kiểm tra thông tin đăng nhập
    if ($username == "admin" && $password == "admin123") {
        // Đăng nhập thành công
        echo "Đăng nhập thành công!";
        // Thực hiện các thao tác cần thiết, ví dụ: chuyển hướng đến trang chính
        header("Location: index.php");
        exit();
    } else {
        // Đăng nhập không thành công
        echo "Tên đăng nhập hoặc mật khẩu không chính xác!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
</head>
<body>
    <h2>Đăng nhập</h2>
    <form method="POST" action="login.php">
        <label for="username">Tên đăng nhập:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Đăng nhập">
    </form>
</body>
</html>