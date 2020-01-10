<?php
require_once('../../model/TempatWisata.php');

$id = $_GET['id'];

$tempat = new TempatWisata;
$tempat->delete($id);

header('location:../../view/admin/');

