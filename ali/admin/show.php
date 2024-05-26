<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "admin_db";

// // ایجاد اتصال
// $conn = new mysqli($servername, $username, $password, $dbname);

// // چک کردن اتصال
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // کوئری برای دریافت رکوردها
// $sql = "SELECT id, username, password FROM users";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // نمایش رکوردها
//     while($row = $result->fetch_assoc()) {
//         echo "ID: " . $row["id"]. " - نام کاربری: " . $row["username"]. " - رمز عبور: " . $row["password"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }
// // // کوئری برای بررسی اطلاعات کاربر
//  $sql = "SELECT * FROM users WHERE username = '$input_username' AND password = '$input_password'";
// // $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // اگر اطلاعات کاربر مطابقت داشت، رکوردهای جدول را نمایش بدهید
//     echo "<table><tr><th>ID</th><th>Username</th><th>Password</th></tr>";
//     while($row = $result->fetch_assoc()) {
//         echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td>".$row["password"]."</td></tr>";
//     }
//     echo "</table>";
// } else {
//     echo "اطلاعات وارد شده صحیح نیستند یا کاربری با این مشخصات یافت نشد.";
// }

// $conn->close();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin_db";

// اطلاعات ورودی از فرم
$input_username = $_POST['username'];
$input_password = $_POST['password'];

// ایجاد اتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// چک کردن اتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// کوئری برای بررسی اطلاعات کاربر
$sql = "SELECT * FROM users WHERE username = '$input_username' AND password = '$input_password'";
$result = $conn->query($sql);
// // کوئری برای دریافت رکوردها
 $sql = "SELECT id, username, password FROM users";
 $result = $conn->query($sql);
if ($result->num_rows > 0) {
    // اگر اطلاعات کاربر مطابقت داشت، رکوردهای جدول را نمایش بدهید
    echo "<table><tr><th>ID</th><th>Username</th><th>Password</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td>".$row["password"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "اطلاعات وارد شده صحیح نیستند یا کاربری با این مشخصات یافت نشد.";
}

$conn->close();
?>


