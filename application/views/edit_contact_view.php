<!-- edit_contact_view.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kontak</title>
    <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/css/styles.css') ?>">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <h2 class="text-center">Edit Kontak</h2>
                <form id="editContactForm" action="<?= site_url('contacts/update/' . $contact->id) ?>" method="post">
                    <div class="form-group">
                        <label for="phone_number">No Telp:</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?= $contact->phone_number ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="id_number">No KTP:</label>
                        <input type="text" class="form-control" id="id_number" name="id_number" value="<?= $contact->id_number ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama:</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= $contact->name ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <script src="<?= base_url('public/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('public/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('public/js/sweetalert2.min.js') ?>"></script>
    <script src="<?= base_url('public/js/scripts.js') ?>"></script>
    <script>
        $(document).ready(function() {
            $('#editContactForm').submit(function(event) {
                event.preventDefault();
                
                $.ajax({
                    url: $(this).attr('action'),
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        if(response.success) {
                            Swal.fire('Berhasil', 'Kontak berhasil diperbarui!', 'success').then(() => {
                                window.location.href = '<?= site_url('contacts') ?>';
                            });
                        } else {
                            Swal.fire('Gagal', 'Terjadi kesalahan, coba lagi.', 'error');
                        }
                    },
                    error: function() {
                        Swal.fire('Terjadi kesalahan', 'Silakan coba lagi.', 'error');
                    }
                });
            });
        });
    </script>
</body>
</html>
