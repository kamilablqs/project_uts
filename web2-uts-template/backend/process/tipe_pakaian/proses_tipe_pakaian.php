<?php 
require_once '../../database/dbkoneksi.php';
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<?php 
   $_kode = $_POST['id'];
   $_tipe_pakaian = $_POST['tipe'];
   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_kode; // ? 1
   $ar_data[]=$_tipe_pakaian; // ? 7

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO tipe_pakaian (id,tipe) VALUES (?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE tipe_pakaian SET id=?,tipe=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:../../index_tipepakaian.php');
?>