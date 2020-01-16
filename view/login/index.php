<?php include('../layouts/header.php') ?>
<?php
if (isset($_SESSION['login'])) {
    if ($_SESSION['login']) {
        header('location:../admin');
    }
}
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card shadow mt-3" style="border-radius: 26px">
                <div class="card-header" style="border-top-left-radius: 26px; border-top-right-radius: 26px;">
                    <h5>Login</h5>
                </div>
                <div class="card-body">
                    <form action="../../controller/login/LoginController.php" method="POST">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <input type="submit" class="btn btn-primary btn-md float-right pl-4 pr-4 mt-2" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../layouts/footer.php') ?>