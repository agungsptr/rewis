<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>
</head>

<body>
    <h1>add</h1><br>
    <form action="../controller/AddController.php" method="POST" enctype="multipart/form-data">
        Nama Tempat :
        <input type="text" name="nama_tempat"><br>

        Jarak <br>
        mtr : <input type="text" name="j_mtr"><br>
        klu : <input type="text" name="j_klu"><br>
        lobar : <input type="text" name="j_lobar"><br>
        lotim : <input type="text" name="j_lotim"><br>
        loteng : <input type="text" name="j_loteng"><br>
        <br>

        Biaya <br>
        mtr : <input type="text" name="b_mtr"><br>
        klu : <input type="text" name="b_klu"><br>
        lobar : <input type="text" name="b_lobar"><br>
        lotim : <input type="text" name="b_lotim"><br>
        loteng : <input type="text" name="b_loteng"><br>
        <br>

        Waktu <br>
        mtr : <input type="text" name="w_mtr"><br>
        klu : <input type="text" name="w_klu"><br>
        lobar : <input type="text" name="w_lobar"><br>
        lotim : <input type="text" name="w_lotim"><br>
        loteng : <input type="text" name="w_loteng"><br>
        <br>

        User : <input type="text" readonly name="user" value="1">
        <br><br>

        <input type="submit" value="Simpan">
    </form>
</body>

</html>