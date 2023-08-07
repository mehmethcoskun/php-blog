<?php

require_once './db.php';

if ($_POST) {
    if (empty($_POST['ad_soyad']) || empty($_POST['kullanici_adi']) || empty($_POST['email']) || empty($_POST['sifre'])) {
        // alanlardan herhangi biri boş ise hata mesajı yazdırıyoruz

        header("location: kayit.php?mesaj=inputlar_bos");
    } else {
        // eğer tüm alanlar dolu ise

        $eposta_kullaniciadi_kontrol = $db->query("SELECT * FROM kullanicilar WHERE kullanici_adi = '{$_POST['kullanici_adi']}' OR email = '{$_POST['email']}'")->fetch(PDO::FETCH_ASSOC);
        if ($eposta_kullaniciadi_kontrol) {
            header("location: kayit.php?mesaj=kayit_var");
        } else {
            $yeniKullaniciKayit = $db->prepare("INSERT INTO kullanicilar SET
                ad_soyad = ?,
                kullanici_adi = ?,
                email = ?,
                sifre = ?
            ");
            $kayitKontrol = $yeniKullaniciKayit->execute([
                $_POST['ad_soyad'],
                $_POST['kullanici_adi'],
                $_POST['email'],
                md5($_POST['sifre'])
            ]);
            if ($kayitKontrol) {
                header("location: giris.php?mesaj=kayit_basarili");
            }
        }
    }
} else {
    die('Get isteği gönderildi.');
}
