<?php include('../layouts/header.php') ?>

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="rectangel shadow">
                <p class="fony" style="text-align: left">
                    Untuk melakukan perhitungan silahkan anda masukkan input dibawah berdasarkan tingkat kepentingan yang anda inginkan
                </p>
            </div>
            <div class="card shadow mt-3">
                <div class="card-header">
                    <h5>Input Kriteria</h5>
                </div>
                <div class="card-body">
                    <form action="/rewis/controller/rekomendasi/wp.php" method="POST">
                        <div class="form-group">
                            <label for="">Lokasi</label>
                            <select required name="lokasi" id="" class="form-control">
                                <option value="data_lobar">Lombok Barat</option>
                                <option value="data_loteng">Lombok Tengah</option>
                                <option value="data_lotim">Lombok Timur</option>
                                <option value="data_klu">Lombok Utara</option>
                                <option value="data_mtr">Mataram</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Kedekatan jarak</label>
                            <select name="jarak" class="form-control" id="">
                                <option value="5">Sangat Tinggi</option>
                                <option value="4">Tinggi</option>
                                <option value="3">Cukup</option>
                                <option value="2">Rendah</option>
                                <option value="1">Sangat Rendah</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Ketersediaan fasilitas yang lengkap</label>
                            <select name="fasilitas" class="form-control" id="">
                                <option value="5">Sangat Tinggi</option>
                                <option value="4">Tinggi</option>
                                <option value="3">Cukup</option>
                                <option value="2">Rendah</option>
                                <option value="1">Sangat Rendah</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Biaya masuk yang murah</label>
                            <select name="biaya" class="form-control" id="">
                                <option value="5">Sangat Tinggi</option>
                                <option value="4">Tinggi</option>
                                <option value="3">Cukup</option>
                                <option value="2">Rendah</option>
                                <option value="1">Sangat Rendah</option>
                            </select>
                        </div>
                        <input type="submit" value="Hitung" class="btn btn-primary btn-md float-right">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../layouts/footer.php') ?>
