<?php
require_once '../../database/dbkoneksi.php';

$iddel = $_GET['iddel'];
$query = "DELETE FROM tipe_pakaian WHERE id = ?";
$delete = $dbh->prepare($query);
$delete->execute([$iddel]);
header('location:../../index_tipepakaian.php');
?>