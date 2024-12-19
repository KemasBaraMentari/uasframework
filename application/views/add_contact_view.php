<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kontak</title>
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
    <style>
        body {
            background-color: #e9f5ff;
        }
        .add-contact-container {
            margin-top: 50px;
        }
        .add-contact-form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .form-control {
            border-radius: 5px;
            border-color: #28a745;
        }
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
            border-radius: 5px;
        }
        .btn-success:hover {
            background-color: #218838;
            border-color: #218838;
        }
    </style>
</head>
<body>
<div class="container add-contact-container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="text-center mb-4">Tambah Kontak</h3>
            <form action="<?= base_url('contacts/add_contact'); ?>" method="POST" class="add-contact-form">
                <div class="form-group">
                    <label for="no_telpon">No Telp</label>
                    <input type="text" class="form-control" id="no_telpon" name="no_telpon" required>
                </div>
                <div class="form-group">
                    <label for="no_ktp">No KTP</label>
                    <input type="text" class="form-control" id="no_ktp" name="no_ktp" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <button type="submit" class="btn btn-success btn-block">Tambah Kontak</button>
            </form>
        </div>
    </div>
</div>
<script src="path/to/jquery.min.js"></script>
<script src="path/to/bootstrap.bundle.min.js"></script>
</body>
</html>
