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
echo "اتصال موفق بود!<br>";

// اجرای یک کوئری ساده برای گرفتن داده‌ها از جدول users
$sql = "SELECT id, username, password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // خروجی داده‌های هر سطر
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Username: " . $row["username"]. " - Password: " . $row["password"]. "<br>";
    }
} else {
    echo "هیچ نتیجه‌ای پیدا نشد";
}

// بستن اتصال
$conn->close();
?>