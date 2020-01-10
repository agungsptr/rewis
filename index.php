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
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/img-sample.jpg" class="d-block w-100" height="500" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/img-sample.jpg" class="d-block w-100" height="500" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
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

<div class="container mt-3">
    <div class="row">

        <?php
        require('model/TempatWisata.php');
        $tempatWisata = new TempatWisata;
        $items = $tempatWisata->all();
        $id = mysqli_fetch_assoc($items);

        foreach ($items as $item) {
        ?>

            <div class="col">
                <div class="card shadow mb-4" style="width: 20rem;">
                    <div class="inner">
                        <img class="card-img-top" src="img/img-sample.jpg" alt="Card image cap">
                    </div>

                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $item['nama_tempat'] ?></h5>
                        <div class="mb-2 text-left">
                            <div class="row">
                                <div class="col-4">Lokasi</div>
                                <div class="col-8">Lombok Barat</div>
                            </div>
                            <div class="row">
                                <div class="col-4">Jarak</div>
                                <div class="col-8">3 Km</div>
                            </div>
                            <div class="row">
                                <div class="col-4">Waktu</div>
                                <div class="col-8">15 Menit</div>
                            </div>
                            <div class="row">
                                <div class="col-4">Biaya</div>
                                <div class="col-8">12.000</div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-success pl-4 pr-4">Detail</a>
                    </div>
                </div>
            </div>

        <?php
        }
        ?>

    </div>
</div>

<?php include('view/layouts/footer.php') ?>