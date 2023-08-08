<?php

require_once '../db.php';

if ($_POST) {
    if ($_POST['type'] == 'kategoriEkle') {
        $baslik = $_POST['baslik'];

        if (isset($baslik) && !empty($baslik)) {
            $kategoriEkle = $db->prepare("INSERT INTO kategoriler SET
                baslik = ?
            ");
            $kaydet = $kategoriEkle->execute([$baslik]);
            if ($kaydet) {
                header("location: " . APP_URL . "/admin/kategoriler.php?mesaj=kategori_eklendi");
            } else {
                header("location: " . APP_URL . "/admin/kategoriler.php?mesaj=hata");
            }
        } else {
            header("location: " . APP_URL . "/admin/kategoriler.php?mesaj=baslik_bos");
        }
    } elseif ($_POST['type'] == 'kategoriSil') {
        exit;
    } elseif ($_POST['type'] == 'kategoriDuzenle') {
        exit;
    }
}
