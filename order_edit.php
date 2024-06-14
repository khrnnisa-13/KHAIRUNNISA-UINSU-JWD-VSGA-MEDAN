<!DOCTYPE html>
<html>
<head>
    <title>Edit Order</title>
</head>
<body>
    <h2>Edit Order</h2>

    <?php
    require_once "koneksi.php";

    // Ambil ID order dari URL
    $order_id = $_GET['id'];

    // Ambil data order dari database
    $sql = "SELECT * FROM tb_order WHERE order_id = ?";
    $stmt = $koneksi->prepare($sql);
    $stmt->execute([$order_id]);

    // Periksa apakah order ditemukan
    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>
        <form action="order_update.php" method="post">
            <input type="hidden" name="order_id" value="<?php echo $row['order_id']; ?>">
            Nama: <input type="text" name="order_nama" value="<?php echo $row['order_nama']; ?>"><br>
            HP: <input type="text" name="order_hp" value="<?php echo $row['order_hp']; ?>"><br>
            Jenis: <input type="text" name="order_jenis" value="<?php echo $row['order_jenis']; ?>"><br>
            Jumlah: <input type="number" name="order_jumlah" value="<?php echo $row['order_jumlah']; ?>"><br>
            <input type="submit" value="Update Order">
        </form>
    <?php
    } else {
        echo "Order tidak ditemukan.";
    }
    ?>
</body>
</html>
