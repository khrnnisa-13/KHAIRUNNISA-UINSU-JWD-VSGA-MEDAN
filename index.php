<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOKO HIJAB MODERN</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>

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
                        <a href="index.php?page=about_sejarah">Sejarah Usaha</a>
                        <a href="index.php?page=about_profil">Profil pemilik</a>
                        <a href="index.php?page=about_alamat">Alamat</a>
                    </div>
                </div> 
                <li><a href="index.php?page=login.php">LOGIN</a></li>
            </ul>
        </nav>
        
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