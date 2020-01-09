<?php
require('model/User.php');

$n = new User;
$n->nama = "eka";
$n->username = "eka";
$n->password = "1234567890";
$v = $n->save();

$ni = ($n->lastId());
echo $ni;

// foreach ($n->lastId() as $key) {
//     echo var_dump($key)."</br>";
// }   
?>


