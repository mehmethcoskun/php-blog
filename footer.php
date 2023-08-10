</body>

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js" integrity="sha512-lVkQNgKabKsM1DA/qbhJRFQU8TuwkLF2vSN3iU/c7+iayKs08Y8GXqfFxxTZr1IcpMovXnf2N/ZZoMgmZep1YQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            placeholder: 'İçerik',
            tabsize: 2,
            height: 500
        });
    })
</script>

<script>
    $('#formBlogEkle').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: 'post.php',
            data: $(this).serialize(),
            success: function(data) {
                if (data.status === true) {
                    alert('İşlem başarılı')
                }
            }
        });
    })
</script>

</html>