<?php include('../layouts/header.php') ?>

<?php
if (!isset($_SESSION['login'])) {
    header('location:../login');
}
?>

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Input Data Tempat Wisata</h5>
                </div>
                <div class="card-body">
                    <form action="../../controller/admin/CreateController.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Nama Tempat</label>
                            <input class="form-control" required type="text" name="nama_tempat">
                        </div>

                        <div class="form-group">
                            <label for="">Kabupaten</label>
                            <input class="form-control" required type="text" name="kab">
                        </div>

                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input class="form-control" required type="text" name="alamat">
                        </div>

                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea name="deskripsi" id="" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Foto</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="foto">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Jumlah Fasilitas</label>
                            <input type="number" name="fasilitas" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Biaya Masuk</label>
                            <input type="number" name="biaya" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Jarak Tempat Wisata dari</label>
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 18%;">Mataram</th>
                                        <th>Lombok Utara</th>
                                        <th>Lombok Barat</th>
                                        <th>Lombok Timur</th>
                                        <th style="width: 22%;">Lombok Tengah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input class="form-control" required type="text" name="j_mtr"></td>
                                        <td><input class="form-control" required type="text" name="j_klu"></td>
                                        <td><input class="form-control" required type="text" name="j_lobar"></td>
                                        <td><input class="form-control" required type="text" name="j_lotim"></td>
                                        <td><input class="form-control" required type="text" name="j_loteng"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <input type="hidden" name="user" value="<?= $_SESSION['login_id'] ?>">
                        <input class="btn btn-primary btn-md float-right ml-2" type="submit" value="Simpan">
                        <input class="btn btn-danger btn-md float-right" type="reset">
                        <a href="." class="btn btn-md btn-info">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../layouts/footer.php') ?>