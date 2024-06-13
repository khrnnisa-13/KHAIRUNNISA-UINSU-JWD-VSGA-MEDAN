<?php
session_start();

// Data dummy untuk contoh. Dalam aplikasi sebenarnya, ambil dari database.
$valid_username = "user";
$valid_password = "password";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek apakah username dan password valid
    if ($username == $valid_username && $password == $valid_password) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        // Redirect kembali ke halaman login dengan pesan error
        header("Location: index.php?error=1");
        exit();
    }
}
?>
