<?php
require_once('../../model/Jarak.php');
require_once('../../model/TempatWisata.php');

$tmp_file = $_FILES['foto']['tmp_name'];
$path = "img/" . $_FILES['foto']['name'];
$upload = move_uploaded_file($tmp_file, "../../" . $path);

$tempat = new TempatWisata;
$id = $_POST['id'];

$tempat->nama_tempat = $_POST['nama_tempat'];
$tempat->id_user = $_POST['user'];
$tempat->kab = $_POST['kab'];
$tempat->alamat = $_POST['alamat'];
$tempat->deskripsi = $_POST['deskripsi'];
$tempat->foto = $path;
$tempat->biaya = $_POST['biaya'];
$tempat->fasilitas = $_POST['fasilitas'];
$tempat->update($id);

$jarak = new Jarak;
$jarak->mtr = $_POST['j_mtr'];
$jarak->klu = $_POST['j_klu'];
$jarak->lobar = $_POST['j_lobar'];
$jarak->lotim = $_POST['j_lotim'];
$jarak->loteng = $_POST['j_loteng'];
$jarak->update($id);

header('location:../../view/admin/');