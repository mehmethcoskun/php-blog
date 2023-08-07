<?php require_once './header.php' ?>

<div class="container py-5">
    <div class="d-flex flex-column align-items-center w-100">
        <form method="POST" class="card w-50" action="kayitPost.php">
            <div class="card-body p-5">
                <h1 class="card-title text-center mb-5">Kayıt Ol</h1>
                <?php

                if (isset($_GET['mesaj'])) {
                    if ($_GET['mesaj'] == 'inputlar_bos') {
                        echo '<div class="alert alert-danger" role="alert">Tüm alanların doldurulması zorunlu.</div>';
                    } elseif ($_GET['mesaj'] == 'kayit_var') {
                        echo '<div class="alert alert-danger" role="alert">Girilen kullanıcı adı veya e-posta adresi ile üyelik bulundu.</div>';
                    }
                }
                ?>
                <div class="mb-3">
                    <label for="inputAdSoyad" class="form-label">Ad Soyad</label>
                    <input type="text" class="form-control" name="ad_soyad" id="inputAdSoyad">
                </div>
                <div class="mb-3">
                    <label for="inputKullaniciAdi" class="form-label">Kullanıcı Adı</label>
                    <input type="text" class="form-control" name="kullanici_adi" id="inputKullaniciAdi">
                </div>
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">E-posta</label>
                    <input type="email" class="form-control" name="email" id="inputEmail">
                </div>
                <div class="mb-3">
                    <label for="inputSifre" class="form-label">Şifre</label>
                    <input type="password" class="form-control" name="sifre" id="inputSifre">
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Kaydı Tamamla</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php require_once './footer.php' ?>