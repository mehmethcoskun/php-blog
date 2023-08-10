<?php

require_once './db.php';

if ($_POST['type'] == 'yeniBlog') {

    if (isset($_POST['baslik']) && !empty($_POST['baslik'])) {

        $blogKaydet = $db->prepare("INSERT INTO yazilar SET
        baslik = ?,
        kategori_id = ?,
        icerik = ?,
        kapak_foto = ?,
        kullanici_id = ?
        ");
        $kaydet = $blogKaydet->execute([
            $_POST['baslik'],
            $_POST['kategori_id'],
            $_POST['icerik'],
            $foto,
            $_SESSION['uyelik']['id']
        ]);
    }

    $cevap = [
        'status' => true,
        'message' => 'Yeni blog yazısı başarıyla kaydedildi.'
    ];

    echo json_encode($cevap);
}
