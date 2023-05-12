<?php 
require_once '../../database/dbkoneksi.php';
?>

<?php 
   $_kode = $_POST['id'];
   $_nama = $_POST['nama'];
   $_tipe_pakian = $_POST['tipe'];
   $_jumlah_pesanan = $_POST['jumlah_pesanan'];
   $_tanggal_pemesanan = $_POST['tanggal'];
   $_email = $_POST['email'];
   $_alamat = $_POST['alamat'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_kode; // ? 1
   $ar_data[]=$_nama; // ? 2
   $ar_data[]=$_tipe_pakian;// 3
   $ar_data[]=$_jumlah_pesanan;
   $ar_data[]=$_tanggal_pemesanan;
   $ar_data[]=$_email;
   $ar_data[]=$_alamat; // ? 7

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pesanan (id,nama,pakaian_id,jumlah_pesanan,tanggal,
    email,alamat) VALUES (?,?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE pesanan SET id=?,nama=?,pakaian_id=?,jumlah_pesanan=?,
    tanggal=?,email=?,alamat=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:../../index_pemesanan.php');
?>