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

    

</div>

<?php include('view/layouts/footer.php') ?>