<?php
require('../model/Biaya.php');
require('../model/Jarak.php');
require('../model/Waktu.php');
require('../model/TempatWisata.php');

$biaya = new Biaya;
$biaya->mtr=99;
$biaya->klu=99;
$biaya->lobar=99;
$biaya->lotim=99;
$biaya->loteng=99;
$biaya->save();
$id_biaya = $biaya->lastId();

$waktu = new Waktu;
$waktu->mtr=99;
$waktu->klu=99;
$waktu->lobar=99;
$waktu->lotim=99;
$waktu->loteng=99;
$waktu->save();
$id_waktu = $waktu->lastId();

$jarak = new Jarak;
$jarak->mtr=99;
$jarak->klu=99;
$jarak->lobar=99;
$jarak->lotim=99;
$jarak->loteng=99;
$jarak->save();
$id_jarak = $jarak->lastId();

$tempat = new TempatWisata;
$tempat->