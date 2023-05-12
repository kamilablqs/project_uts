<?php
require_once '../../database/dbkoneksi.php';

$iddel = $_GET['iddel'];
$query = "DELETE FROM pakaian WHERE id = ?";
$delete = $dbh->prepare($query);
$delete->execute([$iddel]);
header('location:../../index.php');
?>
