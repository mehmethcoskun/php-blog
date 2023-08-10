<?php

require_once './header.php';

$kategoriler = $db->query("SELECT * FROM kategoriler ORDER BY baslik ASC", PDO::FETCH_ASSOC);

?>

<div class="container py-5">
    <div class="d-flex align-items-center justify-content-center">
        <div class="card w-75">
            <form action="post.php" id="formBlogEkle" method="POST" enctype="multipart/form-data" class="card-body p-5">
                <input type="hidden" name="type" value="yeniBlog">
                <div class="mb-5">
                    <h3>Yeni Blog Yazısı Oluştur</h3>
                </div>
                <div class="mb-3">
                    <label for="baslik" class="form-label">Başlık</label>
                    <input type="text" class="form-control" name="baslik" id="baslik" placeholder="Başlık" required>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Resim seçin</label>
                    <input class="form-control" type="file" name="resim" id="formFile">
                </div>
                <div class="mb-3">
                    <label for="kategoriId" class="form-label">Kategori</label>
                    <select class="form-select" name="kategoriId" id="kategoriId">
                        <?php foreach ($kategoriler as $kategori) :  ?>
                            <option value="<?= $kategori['id'] ?>"><?= $kategori['baslik'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <textarea id="summernote" name="icerik"></textarea>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary btn-lg px-5">Kaydet</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once './footer.php'; ?>