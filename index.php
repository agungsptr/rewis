<?php include('view/layouts/header.php') ?>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/img-sample.jpg" class="d-block w-100" height="500" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/img-sample.jpg" class="d-block w-100" height="500" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/img-sample.jpg" class="d-block w-100" height="500" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container mt-5">
    <div class="row d-flex justify-content-center mb-4">
        <div class="col-7">
            <form action="/rewis">
                <div class="input-group input-group-lg mb-3">
                    <input value="<?= $_GET['search']??'' ?>" name="search" type="text" class="form-control" style="border-bottom-left-radius: 30px;border-top-left-radius: 30px" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <input class="btn btn-outline-primary" style="border-bottom-right-radius: 30px;border-top-right-radius: 30px" type="submit" id="button-addon2" value="Search">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row ml-2">
        <?php
        require('model/TempatWisata.php');
        $tempatWisata = new TempatWisata;
        if (isset($_GET['search'])) {
            $items = $tempatWisata->like('nama_tempat', $_GET['search']);
        } else {
            $items = $tempatWisata->all();
        }
        $id = mysqli_fetch_assoc($items);

        foreach ($items as $item) {
        ?>

            <div class="col">
                <div class="card shadow mb-4" style="width: 20rem;">
                    <div class="inner">
                        <img class="card-img-top" src="img/img-sample.jpg" alt="img">
                    </div>

                    <div class="card-body text-center">
                        <h5 class="card-title"><?= $item['nama_tempat'] ?></h5>
                        <p class="cardy">
                            <?= $item['deskripsi']?>
                        </p>
                        <div class="mb-3 text-left">
                            <div class="row">
                                <div class="col-5">Kabupaten</div>
                                <div class="col-7"><?= $item['kab'] ?></div>
                            </div>
                            <div class="row">
                                <div class="col-5">Alamat</div>
                                <div class="col-7 cardy"><?= $item['alamat'] ?></div>
                            </div>
                            <div class="row">
                                <div class="col-5">Biaya</div>
                                <div class="col-7">Rp. <?= $item['biaya'] ?></div>
                            </div>
                        </div>
                        <a href="/rewis/view/detail/?id=<?= $item['id']?>" class="btn btn-success pl-4 pr-4">Detail</a>
                    </div>
                </div>
            </div>

        <?php
        }
        ?>

    </div>
</div>

<?php include('view/layouts/footer.php') ?>