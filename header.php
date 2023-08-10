<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once './db.php';

$kategoriler = $db->query("SELECT id, baslik FROM kategoriler ORDER BY baslik ASC", PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" integrity="sha512-ZbehZMIlGA8CTIOtdE+M81uj3mrcgyrh6ZFeG33A4FHECakGrOsTPlPQ8ijjLkxgImrdmSVUHn1j+ApjodYZow==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <?php foreach ($kategoriler as $kategori) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="kategori.php?id=<?= $kategori['id'] ?>"><?= $kategori['baslik'] ?></a>
                        </li>
                    <?php endforeach; ?>
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