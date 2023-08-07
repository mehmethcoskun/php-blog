<?php

require_once 'db.php';

$db->exec("CREATE TABLE IF NOT EXISTS kullanicilar (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    ad_soyad VARCHAR(255) NOT NULL,
    kullanici_adi VARCHAR(50) NOT NULL,
    email VARCHAR(255) NULL DEFAULT NULL,
    sifre LONGTEXT NULL DEFAULT NULL,
    foto LONGTEXT NULL DEFAULT NULL,
    kayit_tarihi DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
) CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB;");

$db->exec("CREATE TABLE IF NOT EXISTS kategoriler (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    baslik VARCHAR(255) NOT NULL,
    kayit_tarihi DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
) CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB;");

$db->exec("CREATE TABLE IF NOT EXISTS yazilar (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    baslik VARCHAR(255) NOT NULL,
    kategori_id INT(11) NOT NULL,
    icerik LONGTEXT NULL DEFAULT NULL,
    kapak_foto LONGTEXT NULL DEFAULT NULL,
    kullanici_id INT(11) NOT NULL,
    kayit_tarihi DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    son_guncelleme DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
) CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB;");
