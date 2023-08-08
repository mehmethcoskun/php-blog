<?php

require_once '../db.php';

if (!isset($_SESSION['uyelik']) || empty($_SESSION['uyelik']) || !is_array($_SESSION['uyelik'])) {
    // giriş yapılmadıysa giriş sayfasına yönlendir
    header("location: " . APP_URL . "/giris.php?mesaj=giris_yap");
} else {
    if ($_SESSION['uyelik']['admin'] == 1) {
        // giriş yapıldı ise ve admin yetkisine sahipse panele erişim sağlansın
        header("location: yazilar.php");
    } else {
        die('Yetkiniz bulunmamaktadır.');
    }
}
