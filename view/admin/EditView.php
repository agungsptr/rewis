<?php include('../layouts/header.php') ?>

<?php
if (!isset($_SESSION['login'])) {
    header('location:../login');
}
?>

<?php
require_once('../../model/Biaya.php');
require_once('../../model/Waktu.php');
require_once('../../model/Jarak.php');
require_once('../../model/TempatWisata.php');

$tempat = new TempatWisata;
$data_tw = $tempat->where('id', $_GET['id']);
$data_tw = mysqli_fetch_assoc($data_tw);
$id = $data_tw['id'];

$biaya = new Biaya;
$data_biaya = $biaya->where('id_tw', $id);
$data_biaya = mysqli_fetch_assoc($data_biaya);

$jarak = new Jarak;
$data_jarak = $jarak->where('id_tw', $id);
$data_jarak = mysqli_fetch_assoc($data_jarak);

$waktu = new Waktu;
$data_waktu = $waktu->where('id_tw', $id);
$data_waktu = mysqli_fetch_assoc($data_waktu);
?>

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Edit Data Tempat Wisata</h5>
                </div>
                <div class="card-body">
                    <form action="../../controller/admin/EditController.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                        <div class="form-group">
                            <label for="">Nama Tempat</label>
                            <input class="form-control" value="<?= $data_tw['nama_tempat'] ?>" required type="text" name="nama_tempat">
                        </div>

                        <div class="form-group">
                            <label for="">Foto</label>
                            <div class="custom-file">
                                <input type="file" value="<?= $data_tw['foto'] ?>" class="custom-file-input" id="customFile" name="foto">
                                <label class="custom-file-label" for="customFile"><?= $data_tw['foto'] == "img/" ? "Choose File" : $data_tw['foto'] ?></label>
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
                                        <td><input class="form-control" value="<?= $data_jarak['mataram'] ?>" required type="text" name="j_mtr"></td>
                                        <td><input class="form-control" value="<?= $data_jarak['klu'] ?>" required type="text" name="j_klu"></td>
                                        <td><input class="form-control" value="<?= $data_jarak['lobar'] ?>" required type="text" name="j_lobar"></td>
                                        <td><input class="form-control" value="<?= $data_jarak['lotim'] ?>" required type="text" name="j_lotim"></td>
                                        <td><input class="form-control" value="<?= $data_jarak['loteng'] ?>" required type="text" name="j_loteng"></td>
                                    </tr>
                                    <tr>
                                        <th>Waktu</th>
                                        <td><input class="form-control" value="<?= $data_waktu['mataram'] ?>" required type="text" name="w_mtr"></td>
                                        <td><input class="form-control" value="<?= $data_waktu['klu'] ?>" required type="text" name="w_klu"></td>
                                        <td><input class="form-control" value="<?= $data_waktu['lobar'] ?>" required type="text" name="w_lobar"></td>
                                        <td><input class="form-control" value="<?= $data_waktu['lotim'] ?>" required type="text" name="w_lotim"></td>
                                        <td><input class="form-control" value="<?= $data_waktu['loteng'] ?>" required type="text" name="w_loteng"></td>
                                    </tr>
                                    <tr>
                                        <th>Biaya</th>
                                        <td><input class="form-control" value="<?= $data_biaya['mataram'] ?>" required type="text" name="b_mtr"></td>
                                        <td><input class="form-control" value="<?= $data_biaya['klu'] ?>" required type="text" name="b_klu"></td>
                                        <td><input class="form-control" value="<?= $data_biaya['lobar'] ?>" required type="text" name="b_lobar"></td>
                                        <td><input class="form-control" value="<?= $data_biaya['lotim'] ?>" required type="text" name="b_lotim"></td>
                                        <td><input class="form-control" value="<?= $data_biaya['loteng'] ?>" required type="text" name="b_loteng"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <input type="hidden" readonly name="user" value="<?= $data_tw['id_user'] ?>">
                        <a href="." class="btn btn-sm btn-info">Kembali</a>
                        <input class="btn btn-primary btn-sm float-right ml-2" type="submit" value="Simpan">
                        <input class="btn btn-danger btn-sm float-right" type="reset">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../layouts/footer.php') ?>