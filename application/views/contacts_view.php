<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Daftar Kontak</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
// Konfirmasi hapus menggunakan SweetAlert
document.querySelectorAll('.btn-danger').forEach(button => {
    button.addEventListener('click', function(e) {
        e.preventDefault();
        const url = this.href;
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Kontak ini akan dihapus!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        });
    });
});
</script>
</head>
<body>
<div class="container">
  <h2>Daftar Kontak</h2>
  <a href="<?php echo site_url('contacts/add'); ?>" class="btn btn-success">Tambah Kontak</a>
  <table class="table">
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
                <td><?php echo $contact->no_telpon; ?></td>
                <td><?php echo $contact->no_ktp; ?></td>
                <td><?php echo $contact->nama; ?></td>
                <td>
                  <a href="<?php echo site_url('contacts/edit/'.$contact->id); ?>" class="btn btn-warning">Edit</a>
                <td>
                    <a href="<?php echo site_url('contacts/edit/'.$contact->id); ?>" class="btn btn-warning">Edit</a>
                    <a href="<?php echo site_url('contacts/delete/'.$contact->id); ?>" class="btn btn-danger"
                    onclick="return confirm('Apakah Anda yakin ingin menghapus kontak ini?');">Hapus</a>
                </td>

              </td>
          </tr>
          <?php endforeach; ?>
      </tbody>
  </table>
</div>
</body>
</html>
