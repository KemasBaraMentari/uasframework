<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Kontak</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <h2>Edit Kontak</h2>
  <form action="<?php echo site_url('contacts/edit/'.$contact->id); ?>" method="post">
      <div class="form-group">
          <label for="no_telpon">No Telp:</label>
          <input type="text" class="form-control" id="no_telpon" name="no_telpon" value="<?php echo $contact->no_telpon; ?>" required>
      </div>
      <div class="form-group">
          <label for="no_ktp">No KTP:</label>
          <input type="text" class="form-control" id="no_ktp" name="no_ktp" value="<?php echo $contact->no_ktp; ?>" required>
      </div>
      <div class="form-group">
          <label for="nama">Nama:</label>
          <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $contact->nama; ?>" required>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
      <a href="<?php echo site_url('contacts'); ?>" class="btn btn-secondary">Kembali</a>
  </form>
</div>
</body>
</html>
