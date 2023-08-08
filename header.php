<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once './db.php';

?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">X Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <?php if (isset($_SESSION['uyelik']) && !empty($_SESSION['uyelik'])) : ?>
                        <?php if ($_SESSION['uyelik']['admin'] == 1) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="admin/">Yönetim Paneli</a>
                            </li>
                        <?php endif; ?>
                        <li class="nav-item">
                            <a class="btn btn-primary" href="yeniBlog.php">Blog Ekle</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profilim.php">Profilim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cikis.php">Çıkış Yap</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="kayit.php">Kayıt Ol</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="giris.php">Giriş Yap</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>