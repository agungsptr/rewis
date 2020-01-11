<?php
require_once('../../model/User.php');

$username = $_POST['username'];
$password = $_POST['password'];

$user = new User;
$validation = $user->login($username, $password);


if ($validation->num_rows == 1) {
    $user = mysqli_fetch_assoc($validation);

    session_start();
    $_SESSION['login']=true;
    $_SESSION['login_id']=$user['id'];
    $_SESSION['login_user']=$user['nama'];
    header('location:../../view/admin');
} else {
    ?>
    <script>
        alert('Username atau Password Salah');
        document.location = "../../view/login/";
    </script>
    <?php
}

