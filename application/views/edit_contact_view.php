<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kontak</title>
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
    <style>
        body {
            background-color: #e9f5ff;
        }
        .edit-contact-container {
            margin-top: 50px;
        }
        .edit-contact-form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .form-control {
            border-radius: 5px;
            border-color: #007bff;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 5px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container edit-contact-container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="text-center mb-4">Edit Kontak</h3>
            <form action="<?= base_url('contacts/update_contact/' . $contact->id); ?>" method="POST" class="edit-contact-form">
                <div class="form-group">
                    <label for="no_telpon">No Telp</label>
                    <input type="text" class="form-control" id="no_telpon" name="no_telpon" value="<?= $contact->no_telpon; ?>" required>
                </div>
                <div class="form-group">
                    <label for="no_ktp">No KTP</label>
                    <input type="text" class="form-control" id="no_ktp" name="no_ktp" value="<?= $contact->no_ktp; ?>" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $contact->nama; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Update Kontak</button>
            </form>
        </div>
    </div>
</div>
<script src="path/to/jquery.min.js"></script>
<script src="path/to/bootstrap.bundle.min.js"></script>
</body>
</html>
