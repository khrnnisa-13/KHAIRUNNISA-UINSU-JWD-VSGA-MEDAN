<?php
require_once "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $order_id = $_POST['order_id'];
    $order_nama = $_POST['order_nama'];
    $order_hp = $_POST['order_hp'];
    $order_jenis = $_POST['order_jenis'];
    $order_jumlah = $_POST['order_jumlah'];

    // Update data order di database
    $sql = "UPDATE tb_order SET order_nama = ?, order_hp = ?, order_jenis = ?, order_jumlah = ? WHERE order_id = ?";
    $stmt = $koneksi->prepare($sql);

    if ($stmt->execute([$order_nama, $order_hp, $order_jenis, $order_jumlah, $order_id])) {
        // Jika berhasil, arahkan kembali ke halaman tampil_data_order.php
        header("Location: index.php?page=order_tampil");
        exit;
    } else {
        echo "Gagal memperbarui order.";
    }
}
?>
