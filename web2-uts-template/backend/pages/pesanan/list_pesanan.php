<?php 
    require_once '../../database/dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM pesanan";
   $rs = $dbh->query($sql);
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

      <a class="btn btn-success" href="form_pesanan.php" role="button">Create Pelanggan</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Pelanggan</th>
                    <th>Tipe pakaian</th>
                    <th>Jumlah Pesanan</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row['id']?></td>
                        <td><?=$row['nama']?></td>
                        <td><?=$row['pakaian_id']?></td>
                        <td><?=$row['jumlah_pesanan']?></td>
                        <td><?=$row['tanggal']?></td>
                        <td><?=$row['email']?></td>
                        <td><?=$row['alamat']?></td>
                        <td>
<a class="btn btn-primary" href="view_pesanan.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-primary" href="edit_pesanan.php?idedit=<?=$row['id']?>">Edit</a>
<a class="btn btn-primary" href="../../process/pesanan/delete_pesanan.php?iddel=<?=$row['id']?>"
onclick="if(!confirm('Anda Yakin Hapus Data Pelanggan <?=$row['nama']?>?')) {return false}"
>Delete</a>
</td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  
