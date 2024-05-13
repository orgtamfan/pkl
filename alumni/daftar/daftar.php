<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="icon" type="image/x-icon" href="../assets/logo(no bg).ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="login-dark">
        <form action="proses.php" method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><img src="../assets/img/user.png"></img></div>
            <div class="form-group"><input class="form-control" id="nama"type="text" name="nama" placeholder="Nama Lengkap" required></div>
            <div class="form-group"><input class="form-control" id="nisn"type="text" name="nisn" placeholder="NISN" required></div>
            <div class="form-group"><input class="form-control" id="nis"type="text" name="nis" placeholder="NIS"required></div>
            <div class="form-group"><input class="form-control" id="tempat"type="text" name="tempat" placeholder="Tempat, Tanggal Lahir" require><div class="form-group"><input class="form-control" id="tgl_lahir"type="date" name="tgl_lahir" placeholder="Tanggal Lahir" required></div>
            <div class="form-group"><input class="form-control" id="thn_lulus"type="text" name="thn_lulus" placeholder="Tahun Lulus (hanya angka)" required></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div>
            <a href="../login.php" class="forgot">Already have an account?</a></form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>