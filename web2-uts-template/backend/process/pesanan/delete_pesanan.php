<?php
require_once '../../database/dbkoneksi.php';

$id = $_GET['iddel'];
$sql = "DELETE FROM pesanan WHERE id = ?";
$statement = $dbh->prepare($sql);
$statement->execute([$id]);

header('location:../../../backend/index_pemesanan.php');
?>