<?php

//panggil koneksi ke database
require_once "koneksi.php";

if (isset($_POST['b_simpan'])){

    $order_nama = $_POST['order_nama'];
    $order_hp = $_POST['order_hp'];
    $order_paket = $_POST['order_jenis'];
    $order_tambahan = $_POST['order_jumlah'];

    //sql untuk input data di database
    $sql = "INSERT INTO tb_order SET
    order_nama=:order_nama, order_hp=:order_hp, 
    order_jenis=:order_jenis=:order_jenis, order_jumlah=:order_jumlah";

    $stmt = $koneksi->prepare($sql);

    $stmt->bindParam(":order_nama", $order_nama);
    $stmt->bindParam(":order_hp", $order_hp);
    $stmt->bindParam(":order_jenis", $order_jenis);
    $stmt->bindParam(":order_jumlah", $order_jumlah);
    $stmt->execute();

    //redirect ke tampil
    header("location:order_tampil.php");

}