<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Rekomendasi Tempat Wisata</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="">Rewis</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item" id="nav_home">
                    <a class="nav-link" href="/rewis">Home</a>
                </li>
                <li class="nav-item" id="nav_rek">
                    <a class="nav-link" href="#">Rekomendasi</a>
                </li>
                <?php
                if (isset($_SESSION['login'])) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/rewis/view/admin/">Admin</a>
                    </li>
                <?php
                }
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
            <?php
            if (!isset($_SESSION['login'])) {
            ?>
                <form action="/rewis/view/login/" class="form-inline my-2 my-lg-0">
                    <button class="btn btn-sm btn-outline-success my-2 my-sm-0" type="submit">Login</button>
                </form>
            <?php
            }
            ?>
        </div>
    </nav>