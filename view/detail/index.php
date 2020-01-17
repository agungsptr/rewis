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
                        <img class="card-img-top" src="../../img/img-sample.jpg" alt="Card image cap" style="height: 400px">
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur tenetur a quia corrupti omnis debitis facilis quos iste perspiciatis illum rem consequuntur et, perferendis repellendus deserunt fuga nobis sed nulla. Nostrum sed libero ex, sunt earum dolore neque cum tenetur eius, aperiam repellendus voluptate delectus? Facere laudantium fugit eius molestias?</p>
                    <div class="mb-2 text-left">
                        <div class="row">
                            <div class="col-2">Kabupaten</div>
                            <div class="col-10">Lombok Barat</div>
                        </div>
                        <div class="row">
                            <div class="col-2">Alamat</div>
                            <div class="col-10">3 Km</div>
                        </div>
                        <div class="row">
                            <div class="col-2">Biaya Masuk</div>
                            <div class="col-10">Rp. </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <a href="../../" class="btn btn-md btn-success pl-4 pr-4">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../layouts/footer.php') ?>