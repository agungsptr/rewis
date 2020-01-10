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
                            <label for="">Foto</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="foto">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>

                        <div class="form-group mt-4">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Mataram</th>
                                        <th>KLU</th>
                                        <th>LOBAR</th>
                                        <th>LOTIM</th>
                                        <th>LOTENG</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Jarak</th>
                                        <td><input class="form-control" required type="text" name="j_mtr"></td>
                                        <td><input class="form-control" required type="text" name="j_klu"></td>
                                        <td><input class="form-control" required type="text" name="j_lobar"></td>
                                        <td><input class="form-control" required type="text" name="j_lotim"></td>
                                        <td><input class="form-control" required type="text" name="j_loteng"></td>
                                    </tr>
                                    <tr>
                                        <th>Waktu</th>
                                        <td><input class="form-control" required type="text" name="w_mtr"></td>
                                        <td><input class="form-control" required type="text" name="w_klu"></td>
                                        <td><input class="form-control" required type="text" name="w_lobar"></td>
                                        <td><input class="form-control" required type="text" name="w_lotim"></td>
                                        <td><input class="form-control" required type="text" name="w_loteng"></td>
                                    </tr>
                                    <tr>
                                        <th>Biaya</th>
                                        <td><input class="form-control" required type="text" name="b_mtr"></td>
                                        <td><input class="form-control" required type="text" name="b_klu"></td>
                                        <td><input class="form-control" required type="text" name="b_lobar"></td>
                                        <td><input class="form-control" required type="text" name="b_lotim"></td>
                                        <td><input class="form-control" required type="text" name="b_loteng"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <input type="hidden" name="user" value="<?= $_SESSION['login_id']?>">
                        <input class="btn btn-primary btn-sm float-right ml-2" type="submit" value="Simpan">
                        <input class="btn btn-danger btn-sm float-right" type="reset">
                        <a href="." class="btn btn-sm btn-info">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../layouts/footer.php') ?>