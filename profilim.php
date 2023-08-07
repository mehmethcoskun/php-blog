<?php

require './header.php';

if (!isset($_SESSION['uyelik']) || empty($_SESSION['uyelik']) || !is_array($_SESSION['uyelik'])) {
    header("location: giris.php?mesaj=giris_yap");
}

?>

<div class="container py-5">
    <p>Profilim sayfası</p>
</div>

<?php require './footer.php' ?>