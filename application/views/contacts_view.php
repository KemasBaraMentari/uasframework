<!-- contacts_view.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kontak</title>
    <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/css/styles.css') ?>">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="text-center">Daftar Kontak</h2>
                <a href="<?= site_url('contacts/add') ?>" class="btn btn-success mb-3">Tambah Kontak</a>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Telp</th>
                            <th>No KTP</th>
                            <th>Nama</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; foreach($contacts as $contact): ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $contact->phone_number ?></td>
                                <td><?= $contact->id_number ?></td>
                                <td><?= $contact->name ?></td>
                                <td>
                                    <a href="<?= site_url('contacts/edit/' . $contact->id) ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?= site_url('contacts/delete/' . $contact->id) ?>" class="btn btn-danger btn-sm delete-contact" data-id="<?= $contact->id ?>">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="<?= base_url('public/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('public/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('public/js/sweetalert2.min.js') ?>"></script>
    <script src="<?= base_url('public/js/scripts.js') ?>"></script>
    <script>
        $(document).ready(function() {
            // SweetAlert delete confirmation with AJAX
            $('.delete-contact').click(function(e) {
                e.preventDefault();
                var contactId = $(this).data('id');
                var link = $(this).attr('href');

                Swal.fire({
                    title: 'Konfirmasi',
                    text: 'Apakah Anda yakin ingin menghapus?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: link,
                            method: 'GET',
                            success: function(response) {
                                if (response.success) {
                                    Swal.fire('Dihapus!', 'Kontak berhasil dihapus.', 'success').then(() => {
                                        location.reload();
                                    });
                                } else {
                                    Swal.fire('Gagal', 'Terjadi kesalahan.', 'error');
                                }
                            },
                            error: function() {
                                Swal.fire('Terjadi kesalahan', 'Silakan coba lagi.', 'error');
                            }
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>
