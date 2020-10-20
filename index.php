<?php include('view/layouts/header.php') ?>

<style>
    .jumbotron {
        background-image: url(img/Pantai-Senggigi.jpg);
        color: white;
        height: 300px;
    }
</style>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Rekomendasi Wisata</h1>
        <p class="lead">This is a system that help you to find a beutiful place in Lombok</p>
    </div>
</div>

<div class="container mt-5">
    <div class="row d-flex justify-content-center mb-4">
        <div class="col-7">
            <form action="/rewis">
                <div class="input-group input-group-lg mb-3">
                    <input value="<?= $_GET['search'] ?? '' ?>" name="search" type="text" class="form-control" style="border-bottom-left-radius: 30px;border-top-left-radius: 30px" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <input class="btn btn-outline-primary" style="border-bottom-right-radius: 30px;border-top-right-radius: 30px" type="submit" id="button-addon2" value="Search">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row row-cols-md-3">
        <?php
        require_once('model/TempatWisata.php');
        $tempatWisata = new TempatWisata;
        if (isset($_GET['search'])) {
            $items = $tempatWisata->like('nama_tempat', $_GET['search']);
        } else {
            $items = $tempatWisata->all();
        }

        foreach ($items as $item) {
        ?>

            <div class="col mb-4">
                <div class="card h-100" style="width:21rem">
                    <?php if ($item['foto'] == '') {
                        $item['foto'] = 'img/narmada.jpg';
                    } ?>
                    <img class="card-img-top img-fluid" src="<?= $item['foto'] ?>" alt="img">

                    <div class="card-body">
                        <h5 class="card-title"><?= $item['nama_tempat'] ?></h5>
                        <p class="cardy">
                            <?= $item['deskripsi'] ?>
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
                        <a href="/rewis/view/detail/?id=<?= $item['id'] ?>" class="btn btn-info btn-sm pl-4 pr-4">Detail</a>
                    </div>
                </div>
            </div>

        <?php
        }
        ?>

    </div>

</div>

<?php include('view/layouts/footer.php') ?>