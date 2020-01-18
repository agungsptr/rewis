<?php include('../layouts/header.php') ?>

<div class="container mt-3">
    <div class="row justify-content-center mb-4">
        <div class="col-12">
            <div class="rectangel shadow">
                <div class="fony">
                    <h4>Result</h4>
                <div class="lead">Berikut merupakan hasil rekomendasi berdasarkan tingkat kepentingan kriteria yang anda input</div>
                </div>
            </div>
        </div>
    </div>
    <div class="ml-2 row justify-content-center">
        <?php
        require('../../model/TempCalc.php');

        $temp = new TempCalc;
        $items = $temp->best6();

        foreach ($items as $item) {
        ?>

            <div class="col-4">
                <div class="card shadow mb-4" style="width: 20rem;">
                    <div class="inner">
                        <img class="card-img-top" src="../../<?= $item['foto'] ?>" alt="Card image cap">
                    </div>

                    <div class="card-body text-center">
                        <h5 class="card-title"><?= $item['nama_tempat'] ?></h5>
                        <div class="mb-2 text-left">
                            <div class="row">
                                <div class="col-5">Kabupaten</div>
                                <div class="col-7"><?=$item['kab']?></div>
                            </div>
                            <div class="row">
                                <div class="col-5">Jarak</div>
                                <div class="col-7"><?= $item['jarak'] ?> Km</div>
                            </div>
                            <div class="row">
                                <div class="col-5">Jumlah Fasilitas</div>
                                <div class="col-7"><?= $item['fasilitas'] ?></div>
                            </div>
                            <div class="row">
                                <div class="col-5">Biaya</div>
                                <div class="col-7">Rp. <?= $item['biaya'] ?></div>
                            </div>
                        </div>
                        <a href="../detail/show.php?id=<?= $item['id_tw'] ?>" class="btn btn-success pl-4 pr-4">Detail</a>
                    </div>
                </div>
            </div>

        <?php
        }
        ?>

    </div>
</div>

<?php include('../layouts/footer.php') ?>