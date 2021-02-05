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
</head>

<body>
    <?php
        if(isset($_POST['nama']))
        {
            $nama = $_POST['nama'];
            $no_polisi = $_POST['no_polisi'];
            $warna = $_POST['warna'];
            $tahun = $_POST['tahun'];
            
            $result = mysqli_query($con, "INSERT INTO mobil(no_polisi, nama, warna, tahun) VALUES('$no_polisi', '$nama', '$warna', '$tahun')");

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
                        <h4 class="card-title">Form Mobil</h4>
                        <p class="text-muted">Input data mobil baru</p>
                        <form action="tambahmobil.php" method="POST">
                            <div class="form-group">
                                <label for="no_polisi">Nomor Polisi</label>
                                <input type="text" name="no_polisi" id="no_polisi" class="form-control" placeholder="Nomor Polisi" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Mobil</label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama mobil" required>
                            </div>
                            <div class="form-group">
                                <label for="warna">Warna</label>
                                <input type="text" name="warna" id="warna" class="form-control" placeholder="Warna" required>
                            </div>
                            <div class="form-group">
                                <label for="tahun">Tahun</label>
                                <input type="number" name="tahun" id="tahun" class="form-control" placeholder="Tahun" required>
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
</body>

</html>