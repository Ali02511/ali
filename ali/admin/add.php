<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin_db";

// ایجاد اتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// بررسی اتصال
if ($conn->connect_error) {
    die("اتصال ناموفق: " . $conn->connect_error);
}

// دریافت داده‌ها از فرم
$user = $_POST['username'];

$pass = $_POST['password'];

// هش کردن رمز عبور برای امنیت بیشتر
 $hashed_password = password_hash($pass, PASSWORD_DEFAULT);


// آماده‌سازی و اجرای کوئری برای درج کاربر جدید
$sql = "INSERT INTO users (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $user, $hashed_password);

if ($stmt->execute()) {
    echo "ثبت نام موفقیت آمیز بود";
} else {
    echo "خطا در ثبت نام: " . $stmt->error;
}

// بستن اتصال
$stmt->close();
$conn->close();
?>