<?php
require_once('../../model/User.php');

$username = $_POST['username'];
$password = $_POST['password'];

$user = new User;
$validation = $user->login($username, $password);


if ($validation->num_rows == 1) {
    $id = mysqli_fetch_assoc($validation)['id'];

    session_start();
    $_SESSION['login']=true;
    $_SESSION['login_id']=$id;
    header('location:../../view/admin');
} else {
    ?>
    <script>
        alert('Username atau Password Salah');
        document.location = "../../view/login/";
    </script>
    <?php
}

