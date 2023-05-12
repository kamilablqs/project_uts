<?php 
    require_once '../../database/dbkoneksi.php';
    require_once '../../header.php';
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<?php 
   $sql = "SELECT * FROM pesanan";
   $rs = $dbh->query($sql);
?>

      <a class="btn btn-success" href="form_pakaian.php" role="button">Create Pakaian</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>No</th><th>id</th><th>Nama</th>
                    <th>Ukuran</th><th>Warna</th>
                    <th>Stok</th><th>Harga</th><th>Tipe Pakaian</th>
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
                        <td><?=$row['ukuran']?></td>
                        <td><?=$row['warna']?></td>
                        <td><?=$row['stok']?></td>
                        <td><?=$row['harga']?></td>
                        <td><?=$row['tipe_pakaian_id']?></td>
<a class="btn btn-primary" href="view_pakaian.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-primary" href="edit_pakaian.php?idedit=<?=$row['id']?>">Edit</a>
<a class="btn btn-primary" href="../../process/pakaian/delete_pakaian.php?iddel=<?=$row['id']?>"
onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['nama']?>?')) {return false}"
>Delete</a>
</td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  

        <?php require_once '../../footer.php'; ?>