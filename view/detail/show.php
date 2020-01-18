<?php include('../layouts/header.php') ?>
<?php require_once('../../model/TempatWisata.php') ?>
<?php
$tempat = new TempatWisata;
$tempat = $tempat->where('id', $_GET['id']);
$tempat = mysqli_fetch_assoc($tempat);

?>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="card shadow mb-3">
                <div class="card-header">
                    <h5><?= $tempat['nama_tempat'] ?></h5>
                </div>
                <div class="card-body">
                    <div class="inner mb-4">
                        <img class="card-img-top" src="../../<?=$tempat['foto']?>" alt="Card image cap" style="height: 400px">
                    </div>
                    <p><?=$tempat['deskripsi']?></p>
                    <div class="mb-2 text-left">
                        <div class="row">
                            <div class="col-2">Kabupaten</div>
                            <div class="col-10"><?=$tempat['kab']?></div>
                        </div>
                        <div class="row">
                            <div class="col-2">Alamat</div>
                            <div class="col-10"><?=$tempat['alamat']?></div>
                        </div>
                        <div class="row">
                            <div class="col-2">Biaya Masuk</div>
                            <div class="col-10">Rp.<?=$tempat['biaya']?> </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <a href="../rekomendasi/result.php" class="btn btn-md btn-success pl-4 pr-4">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../layouts/footer.php') ?>