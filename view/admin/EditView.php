<?php include('../layouts/header.php') ?>

<?php
if (!isset($_SESSION['login'])) {
    header('location:../login');
}
?>

<?php
require_once('../../model/Jarak.php');
require_once('../../model/TempatWisata.php');

$tempat = new TempatWisata;
$data_tw = $tempat->where('id', $_GET['id']);
$data_tw = mysqli_fetch_assoc($data_tw);
$id = $data_tw['id'];

$jarak = new Jarak;
$data_jarak = $jarak->where('id_tw', $id);
$data_jarak = mysqli_fetch_assoc($data_jarak);
?>

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card shadow mb-3">
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
                            <label for="">Kabupaten</label>
                            <input value="<?= $data_tw['kab'] ?>" class="form-control" required type="text" name="kab">
                        </div>

                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input value="<?= $data_tw['alamat'] ?>" class="form-control" required type="text" name="alamat">
                        </div>

                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea name="deskripsi" id="" class="form-control" rows="3"><?= $data_tw['deskripsi'] ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Foto</label>
                            <div class="custom-file">
                                <input type="file" value="<?= $data_tw['foto'] ?>" class="custom-file-input" id="customFile" name="foto">
                                <label class="custom-file-label" for="customFile"><?= $data_tw['foto'] == "img/" ? "Choose File" : $data_tw['foto'] ?></label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Jumlah Fasilitas</label>
                            <input type="number" name="fasilitas" class="form-control" value="<?= $data_tw['fasilitas'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="">Biaya Masuk</label>
                            <input type="number" name="biaya" class="form-control" value="<?= $data_tw['biaya'] ?>">
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
                                        <td><input class="form-control" value="<?= $data_jarak['mataram'] ?>" required type="text" name="j_mtr"></td>
                                        <td><input class="form-control" value="<?= $data_jarak['klu'] ?>" required type="text" name="j_klu"></td>
                                        <td><input class="form-control" value="<?= $data_jarak['lobar'] ?>" required type="text" name="j_lobar"></td>
                                        <td><input class="form-control" value="<?= $data_jarak['lotim'] ?>" required type="text" name="j_lotim"></td>
                                        <td><input class="form-control" value="<?= $data_jarak['loteng'] ?>" required type="text" name="j_loteng"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <input type="hidden" readonly name="user" value="<?= $data_tw['id_user'] ?>">
                        <a href="." class="btn btn-md btn-info">Kembali</a>
                        <input class="btn btn-primary btn-md float-right ml-2" type="submit" value="Simpan">
                        <input class="btn btn-danger btn-md float-right" type="reset">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../layouts/footer.php') ?>