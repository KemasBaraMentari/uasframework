<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kontak</title>
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
    <style>
        body {
            background-color: #e9f5ff;
        }
        .contacts-container {
            margin-top: 50px;
        }
        .contacts-table {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .btn {
            border-radius: 5px;
        }
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }
        .btn-success:hover {
            background-color: #218838;
            border-color: #218838;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #c82333;
        }
    </style>
</head>
<body>
<div class="container contacts-container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="text-center mb-4">Daftar Kontak</h3>
            <a href="<?= base_url('contacts/add'); ?>" class="btn btn-success mb-3">Tambah Kontak</a>
            <div class="contacts-table">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No Telp</th>
                            <th>No KTP</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($contacts as $contact): ?>
                            <tr>
                                <td><?= $contact->no_telpon; ?></td>
                                <td><?= $contact->no_ktp; ?></td>
                                <td><?= $contact->nama; ?></td>
                                <td>
                                    <a href="<?= base_url('contacts/edit/' . $contact->id); ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm delete-contact" data-id="<?= $contact->id; ?>">Hapus</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="path/to/jquery.min.js"></script>
<script src="path/to/bootstrap.bundle.min.js"></script>
<script src="path/to/sweetalert2.all.min.js"></script>
<script>
    $(document).ready(function(){
        $('.delete-contact').click(function(){
            var id = $(this).data('id');
            Swal.fire({
                title: 'Konfirmasi',
                text: "Apakah Anda yakin ingin menghapus kontak ini?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '<?= base_url('contacts/delete/'); ?>' + id,
                        type: 'POST',
                        success: function(response) {
                            location.reload();
                        }
                    });
                }
            });
        });
    });
</script>
</body>
</html>
