<?php

require './db.php';

if ($_POST) {
    if (empty($_POST['kullanici_adi']) || empty($_POST['sifre'])) {
        header("location: giris.php?mesaj=inputlar_bos");
    } else {
        //veritabanı kontrol işlemleri

        $kullanici_kontrol = $db->query("SELECT * FROM kullanicilar WHERE kullanici_adi = '{$_POST['kullanici_adi']}'")->fetch(PDO::FETCH_ASSOC);
        if ($kullanici_kontrol) {
            // kullanıcı var ise
            $md5li_sifre = $kullanici_kontrol['sifre'];
            $inputtan_gelen_sifre = md5($_POST['sifre']);

            if ($md5li_sifre == $inputtan_gelen_sifre) {
                // kontroller sağlandı, giriş başarılı

                $_SESSION['uyelik'] = $kullanici_kontrol;

                header("location: profilim.php");
            } else {
                header("location: giris.php?mesaj=sifre_yanlis");
            }
        } else {
            // kullanıcı yok ise
            header("location: giris.php?mesaj=kullanici_bulunamadi");
        }
    }
} else {
    die('Get isteği gönderildi.');
}
