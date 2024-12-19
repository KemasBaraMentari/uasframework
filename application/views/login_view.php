<!-- login_view.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/css/styles.css') ?>">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <h2 class="text-center">Login</h2>
                <form id="loginForm" action="<?= site_url('login/authenticate') ?>" method="post">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
                <p class="text-center mt-3">Belum punya akun? <a href="<?= site_url('register') ?>">Daftar sekarang</a></p>
            </div>
        </div>
    </div>

    <script src="<?= base_url('public/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('public/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('public/js/sweetalert2.min.js') ?>"></script>
    <script src="<?= base_url('public/js/scripts.js') ?>"></script>
    <script>
        $(document).ready(function() {
            $('#loginForm').submit(function(event) {
                event.preventDefault();
                
                $.ajax({
                    url: $(this).attr('action'),
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        if(response.success) {
                            Swal.fire('Berhasil', 'Anda berhasil login!', 'success').then(() => {
                                window.location.href = '<?= site_url('contacts') ?>';
                            });
                        } else {
                            Swal.fire('Gagal', 'Username atau password salah!', 'error');
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
