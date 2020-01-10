<?php include('../layouts/header.php') ?>

<?php
if (!isset($_SESSION['login'])) {
    header('location:../login');
}
?>

<div class="container mt-3">
    <div class="card shadow p-3">
        <div class="row">
            <div class="col">
                <a href="CreateView.php" class="btn btn-primary btn-md mb-3 float-left">Tambah</a>
            </div>
        </div>
        <?php
        require_once('../../model/TempatWisata.php');
        require_once('../../model/User.php');

        $user = new User;

        $tempat = new TempatWisata;
        $list = $tempat->all();
        $i = 0;
        ?>

        <table id="tabel-data" class="table table-hover table-striped table-bordered " style="width:100%">
            <thead>
                <tr>
                    <th style="width: 40px">No.</th>
                    <th>Nama</th>
                    <th style="width: 50px">Foto</th>
                    <th style="width: 120px">User</th>
                    <th style="width: 90px"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($list as $item) {
                ?>
                    <tr>
                        <td><?= ++$i ?></td>
                        <td><?= $item['nama_tempat'] ?></td>
                        <td><a class="btn btn-primary btn-sm" href="../../<?= $item['foto'] ?>">View</a></td>
                        <td><?= $user->name($item['id_user']) ?></td>
                        <td>
                            <a href="EditView.php?id=<?= $item['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="../../controller/admin/DeleteController.php?id=<?= $item['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>

        </table>
    </div>
</div>

<?php include('../layouts/footer.php') ?>