<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOKO HIJAB MODERN</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   
    <div class="container">
        <header>
            <img src="images/hijab1.jpeg" alt="" width="1080px" height="200px">
        </header>

        <nav>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="index.php?page=order_jenis">JENIS HIJAB </a></li>
                <li><a href="index.php?page=order_input">PEMESANAN</a></li>
                <li><a href="index.php?page=order_tampil">DAFTAR PESANAN</a></li>
                <li><a href="index.php?page=kontak">KONTAK</a></li>
                <div class="dropdown">
                    <button class="dropbtn">ABOUT<i class="fa fa-caret-down"></i></button>
                    <div class="dropdown-content">
                        <a href="#">Sejarah Usaha</a>
                        <a href="#">Profil pemilik</a>
                        <a href="#">Alamat</a>
                    </div>
                </div> 
                <li>
                    <a href="index.php?page=login.php">LOGIN</a>
                </li>
            </ul>
        </nav>
        <div class="login-container">
            <form action="login.php" method="post">
                <h2>Login</h2>
                <input type="text" id="username" name="username" placeholder="Username" required>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
                <?php
                if (isset($_GET['error'])) {
                    echo '<p class="error">Invalid username or password</p>';
                }
                ?>
            </form>
        </div>
        <main>
            <?php

                if (isset($_GET['page'])) {
                    require $_GET['page']. ".php";
                } else {
                    require "main.php";
                }
             ?>

        </main>

        <footer>
            copyright &copy; 2024. Khairunnisa - JWD Juni 2024 UIN Sumatera Utara

        </footer>

    </div>

   
   
</body>
</html>