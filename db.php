<?php

$host = "localhost";
$user = "root";

// XAMPP (Windows)
$pass = "";

// MAMP (Mac) → Jika pakai MAMP, ubah jadi:
// $pass = "root";

$db = "week11_db";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>