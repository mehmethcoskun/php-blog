<?php require './header.php'; ?>

<div class="container py-5">
    <div class="d-flex flex-column align-items-center w-100">
        <form method="POST" class="card w-50" action="girisPost.php">

            <div class="card-body p-5">
                <h1 class="card-title text-center mb-5">Giriş Yap</h1>
                <?php

                // var_dump($_SESSION['uyelik']);

                if (isset($_GET['mesaj'])) {
                    if ($_GET['mesaj'] == 'inputlar_bos') {
                        echo '<div class="alert alert-danger" role="alert">Tüm alanların doldurulması zorunlu.</div>';
                    } elseif ($_GET['mesaj'] == 'sifre_yanlis') {
                        echo '<div class="alert alert-danger" role="alert">Şifrenizi yanlış girdiniz.</div>';
                    } elseif ($_GET['mesaj'] == 'kullanici_bulunamadi') {
                        echo '<div class="alert alert-danger" role="alert">Girilen bilgilere ait üyelik bulunamadı.</div>';
                    } elseif ($_GET['mesaj'] == 'kayit_basarili') {
                        echo '<div class="alert alert-success" role="alert">Üyelik işleminiz başarıyla tamamlandı. Giriş yapabilirsiniz.</div>';
                    } elseif ($_GET['mesaj'] == 'giris_yap') {
                        echo '<div class="alert alert-danger" role="alert">Profilinize erişebilmek için giriş yapmalısınız.</div>';
                    }
                }

                ?>
                <div class="mb-3">
                    <label for="inputKullaniciAdi" class="form-label">Kullanıcı Adı</label>
                    <input type="text" class="form-control" name="kullanici_adi" id="inputKullaniciAdi">
                </div>
                <div class="mb-5">
                    <label for="inputSifre" class="form-label">Şifre</label>
                    <input type="password" class="form-control" name="sifre" id="inputSifre">
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Giriş Yap</button>
                </div>
            </div>

        </form>
    </div>
</div>

<?php require './footer.php'; ?>