<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kontak</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h3>Edit Kontak</h3>
        <form action="<?= base_url('contacts/update/' . $contact['id']); ?>" method="post">
            <div class="mb-3">
                <label for="no_ktp" class="form-label">No KTP</label>
                <input type="text" name="no_ktp" id="no_ktp" class="form-control" value="<?= $contact['no_ktp']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" value="<?= $contact['nama']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">No Telp</label>
                <input type="text" name="no_telp" id="no_telp" class="form-control" value="<?= $contact['no_telp']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
