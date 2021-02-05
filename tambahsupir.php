<?php 
    include('modules/koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Mobil Cahaya Semesta</title>
    <?php include('components/dependencies.php'); ?>
    <link rel="stylesheet" href="vendor/css/bootstrap-datepicker.min.css">
</head>

<body>
    <?php
        if(isset($_POST['nama']))
        {
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $telp = $_POST['telp'];

            $result = mysqli_query($con, "INSERT INTO supir(nama, alamat, tanggal_lahir, telp) VALUES('$nama', '$alamat', '$tanggal_lahir', '$telp')");

        }
        
    ?>
    <div class="wrapper">
        <?php include('components/sidebar.php') ?>
        <div id="content">
            <?php include('components/navbar.php') ?>
            <div id="content-wrapper">
                <?php include('components/alert.php') ?>
                <div class="card shadow-sm rounded">
                    <div class="card-body">
                        <h4 class="card-title">Form Supir</h4>
                        <p class="text-muted">Pendaftaran supir baru</p>
                        <form action="tambahsupir.php" method="POST">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama lengkap" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control datepicker" placeholder="Tanggal Lahir" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label for="telp">No. Handphone</label>
                                <input type="number" name="telp" id="telp" class="form-control" placeholder="Nomor handphone" required>
                            </div>
                            <div class="text-center">
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd'
            })
        });
    </script>
</body>

</html>