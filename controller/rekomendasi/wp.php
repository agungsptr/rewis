<?php
require_once('../../model/TempatWisata.php');
require_once('../../model/TempCalc.php');

$clear = new TempCalc;
$clear->clear();

$lokasi = $_POST['lokasi'];
$wJarak = $_POST['jarak'];
$wFasilitas = $_POST['fasilitas'];
$wBiaya = $_POST['biaya'];

$TempatWisata = new TempatWisata;
$data = $TempatWisata->view($lokasi);

//normalisasi bobot
$sumBobot = $wJarak + $wFasilitas + $wBiaya;
$wJarak /= $sumBobot;
$wFasilitas /= $sumBobot;
$wBiaya /= $sumBobot;

//mencari vektor s
$sumVektor_s=0;
foreach ($data as $s) {
    $temp = new TempCalc;
    $temp->nama_tempat = $s['nama_tempat'];
    $temp->kab = $s['kab'];
    $temp->foto = $s['foto'];
    $temp->jarak = $s['jarak'];
    $temp->fasilitas = $s['fasilitas'];
    $temp->biaya = $s['biaya'];

    $vektor_s = pow($s['jarak'], -$wJarak)*pow($s['fasilitas'], $wFasilitas)*pow($s['biaya'], -$wBiaya);
    $vektor_s = $vektor_s == INF ? 0:$vektor_s;
    $temp->vektor_s = $vektor_s;

    $temp->id_tw = $s['id'];
    $temp->save();

    $sumVektor_s += $vektor_s;
}

$vektor = new TempCalc;
$vektor = $vektor->all();
foreach ($vektor as $v) {
    $temp = new TempCalc;
    $val = $v['vektor_s']/$sumVektor_s;
    $temp->addVektorV($v['id'], $val);
}

header('location:../../view/rekomendasi/result.php');
