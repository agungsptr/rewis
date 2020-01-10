<?php
require_once('../../model/Biaya.php');
require_once('../../model/Waktu.php');
require_once('../../model/Jarak.php');
require_once('../../model/TempatWisata.php');

$tmp_file = $_FILES['foto']['tmp_name'];
$path = "img/" . $_FILES['foto']['name'];
$upload = move_uploaded_file($tmp_file, "../../" . $path);

$tempat = new TempatWisata;
$tempat->nama_tempat = $_POST['nama_tempat'];
$tempat->id_user = $_POST['user'];
$tempat->foto = $path;
$tempat->save();
$id_tw = $tempat->lastId();

$biaya = new Biaya;
$biaya->mtr = $_POST['b_mtr'];
$biaya->klu = $_POST['b_klu'];
$biaya->lobar = $_POST['b_lobar'];
$biaya->lotim = $_POST['b_lotim'];
$biaya->loteng = $_POST['b_loteng'];
$biaya->id_tw = $id_tw;
$biaya->save();

$waktu = new Waktu;
$waktu->mtr = $_POST['w_mtr'];
$waktu->klu = $_POST['w_klu'];
$waktu->lobar = $_POST['w_lobar'];
$waktu->lotim = $_POST['w_lotim'];
$waktu->loteng = $_POST['w_loteng'];
$waktu->id_tw = $id_tw;
$waktu->save();

$jarak = new Jarak;
$jarak->mtr = $_POST['j_mtr'];
$jarak->klu = $_POST['j_klu'];
$jarak->lobar = $_POST['j_lobar'];
$jarak->lotim = $_POST['j_lotim'];
$jarak->loteng = $_POST['j_loteng'];
$jarak->id_tw = $id_tw;
$jarak->save();

header('location:../../view/admin/');
