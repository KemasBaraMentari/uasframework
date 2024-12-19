<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tambah Kontak</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <h2>Tambah Kontak</h2>
  <form action="<?php echo site_url('contacts/add'); ?>" method="post">
      <div class="form-group">
          <label for="no_telpon">No Telp:</label>
          <input type="text" class="form-control" id="no_telpon" name="no_telpon" required>
      </div>
      <div class="form-group">
          <label for="no_ktp">No KTP:</label>
          <input type="text" class="form-control" id="no_ktp" name="no_ktp" required>
      </div>
      <div class="form-group">
          <label for="nama">Nama:</label>
          <input type="text" class="form-control" id="nama" name="nama" required>
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
      <a href="<?php echo site_url('contacts'); ?>" class="btn btn-secondary">Kembali</a>
  </form>
</div>
</body>
</html>
