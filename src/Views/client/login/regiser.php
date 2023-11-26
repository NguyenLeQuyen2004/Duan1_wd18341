<?php
// Kiểm tra xem người dùng đã gửi dữ liệu đăng ký chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ biểu mẫu
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Kiểm tra xem mật khẩu và mật khẩu xác nhận có khớp không
    if ($password != $confirm_password) {
        echo "Mật khẩu xác nhận không khớp!";
    } else {
        // Thực hiện lưu thông tin người dùng vào cơ sở dữ liệu hoặc xử lý theo yêu cầu
        // ...
        // Sau khi đăng ký thành công, chuyển hướng đến trang đăng nhập
        header("Location: login.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Đăng ký</title>
</head>
<body>
    <h2>Đăng ký</h2>
    <form method="POST" action="register.php">
        <label for="username">Tên đăng nhập:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="confirm_password">Xác nhận mật khẩu:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>

        <input type="submit" value="Đăng ký">
    </form>
</body>
</html>