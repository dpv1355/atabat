<!DOCTYPE html>
<?php
   include 'database_connection.php';

    // دریافت اطلاعات ارسال شده از فرم
    $user = isset($_POST['username']) ? $_POST['username'] : '';
    $pass = isset($_POST['password']) ? $_POST['password'] : '';

    // ساخت کوئری SQL جهت چک کردن وجود کاربر
    $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";

    // اجرای کوئری SQL
    $result = mysqli_query($conn, $sql);

    // چک کردن وجود کاربر
if (mysqli_num_rows($result) > 0) {
        // کاربر درست است و به صفحه main.php هدایت می‌شود
        header("Location: main.php");
        exit();
    } else {
        // پیام خطا در صورت نامعتبر بودن کاربر
    
    }

    // بستن اتصال به بانک اطلاعاتی
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>صفحه ورود</title>
</head>
<body>
    <h1>صفحه ورود</h1>
    <form action="check_login.php" method="post" name="login">
        نام کاربری: <input type="text" name="username"><br>
        کلمه عبور: <input type="password" name="password"><br>
        <input type="submit" name="submit" value="ورود">
    </form>
</body>
</html>
