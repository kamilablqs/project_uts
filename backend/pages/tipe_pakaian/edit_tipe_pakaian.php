<?php 
require_once '../../database/dbkoneksi.php';
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<?php 
    $_idedit = $_GET['idedit'];
    if(!empty($_idedit)){
        // edit
        $sql = "SELECT * FROM tipe_pakaian WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$_idedit]);
        $row = $st->fetch();
    }else{
        // new data
        $row = [];
    }
?>

<form method="POST" action="../../process/tipe_pakaian/proses_tipe_pakaian.php">
    <input type="hidden" name="iddel" value="<?= $result['id'] ?>">
    <div class="form-group row">
        <label for="id" class="col-4 col-form-label">id</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div>
                </div>
                <input id="id" name="id" type="text" class="form-control" value="<?=$row['id']?>">
            </div>
        </div>
    </div>
    <input type="hidden" name="iddel" value="<?= $result['tipe'] ?>">
    <div class="form-group row">
        <label for="id" class="col-4 col-form-label">Tipe Pakaian</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div>
                </div>
                <input id="tipe" name="tipe" type="text" class="form-control" value="<?=$row['tipe']?>">
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="offset-4 col-8">
            <?php
        $button = (empty($_idedit)) ? "Simpan":"Update"; 
    ?>
            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?=$button?>" />
            <input type="hidden" name="idedit" value="<?=$_idedit?>" />
        </div>
    </div>
</form>