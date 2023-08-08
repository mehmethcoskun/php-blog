<?php

require_once './header.php';

$kategoriler = $db->query("SELECT * FROM kategoriler ORDER BY kayit_tarihi DESC", PDO::FETCH_ASSOC);

?>

<div class="container py-5">
    <div class="row mb-3">
        <div class="col-12">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Yeni Kategori Ekle</button>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="100">ID</th>
                            <th>Başlık</th>
                            <th width="200">Oluşturulma Tarihi</th>
                            <th width="160"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($kategoriler->rowCount()) : ?>
                            <?php foreach ($kategoriler as $kategori) : ?>
                                <tr>
                                    <td><?= $kategori['id'] ?></td>
                                    <td><?= $kategori['baslik'] ?></td>
                                    <td><?= $kategori['kayit_tarihi'] ?></td>
                                    <td class="text-end">
                                        <button type="button" class="btn btn-warning btn-sm">Düzenle</button>
                                        <button type="button" class="btn btn-danger btn-sm">Sil</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="4">Hiç kategori eklenmedi.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <form action="./post.php" method="POST" class="modal-dialog">
        <input type="hidden" name="type" value="kategoriEkle">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Yeni Kategori Oluşturma</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Başlık</label>
                    <input type="text" class="form-control" name="baslik" id="exampleFormControlInput1" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Vazgeç</button>
                <button type="submit" class="btn btn-success">Kaydet</button>
            </div>
        </div>
    </form>
</div>

<?php require_once './footer.php'; ?>