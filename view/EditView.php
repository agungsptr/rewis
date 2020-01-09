<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>

<body>
    <h1>edit</h1><br>

    <?php 
        require_once('../model/Biaya.php');
        require_once('../model/Waktu.php');
        require_once('../model/Jarak.php');
        require_once('../model/TempatWisata.php');

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

    <br><br>
    <form action="../controller/EditController.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $_GET['id']?>">

        Nama Tempat :
        <input required type="text" name="nama_tempat" value="<?php echo $data_tw['nama_tempat']?>"><br>

        Deskripsi : <br>
        <textarea required name="deskripsi" cols="50" rows="10"><?php echo $data_tw['deskripsi']?></textarea><br>

        Foto : 
        <input type="file" name="foto" value="<?php echo $data_tw['foto']?>"><br><br>
        
        Biaya <br>
        mtr : <input required type="text" value="<?php echo $data_biaya['mataram']?>" name="b_mtr"><br>
        klu : <input required type="text" value="<?php echo $data_biaya['klu']?>" name="b_klu"><br>
        lobar : <input required type="text" value="<?php echo $data_biaya['lobar']?>" name="b_lobar"><br>
        lotim : <input required type="text" value="<?php echo $data_biaya['lotim']?>" name="b_lotim"><br>
        loteng : <input required type="text" value="<?php echo $data_biaya['loteng']?>" name="b_loteng"><br>
        <br>

        Jarak <br>
        mtr : <input required type="text" value="<?php echo $data_jarak['mataram']?>" name="j_mtr"><br>
        klu : <input required type="text" value="<?php echo $data_jarak['klu']?>" name="j_klu"><br>
        lobar : <input required type="text" value="<?php echo $data_jarak['lobar']?>" name="j_lobar"><br>
        lotim : <input required type="text" value="<?php echo $data_jarak['lotim']?>" name="j_lotim"><br>
        loteng : <input required type="text" value="<?php echo $data_jarak['loteng']?>" name="j_loteng"><br>
        <br>

        Waktu <br>
        mtr : <input required type="text" value="<?php echo $data_waktu['mataram']?>" name="w_mtr"><br>
        klu : <input required type="text" value="<?php echo $data_waktu['klu']?>" name="w_klu"><br>
        lobar : <input required type="text" value="<?php echo $data_waktu['lobar']?>" name="w_lobar"><br>
        lotim : <input required type="text" value="<?php echo $data_waktu['lotim']?>" name="w_lotim"><br>
        loteng : <input required type="text" value="<?php echo $data_waktu['loteng']?>" name="w_loteng"><br>
        <br>

        User : <input type="text" readonly name="user" value="<?php echo $data_tw['id_user']?>">
        <br><br>

        <input type="submit" value="Simpan">
    </form>
</body>

</html>