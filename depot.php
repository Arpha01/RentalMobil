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
        $data = mysqli_query($con, 'SELECT * FROM depot');
    ?>
    <div class="wrapper">
        <?php include('components/sidebar.php') ?>
        
        <div id="content">
            <?php include('components/navbar.php') ?>
            <div id="content-wrapper">
                <div class="card shadow-sm rounded">
                    <div class="card-body">
                        <h4 class="card-title">Data Depot</h4>
                        <div class="d-flex justify-content-between">
                            <div class="col-sm-2 col-md-4 pl-0">
                                <input type="text" name="search" id="search" class="form-control form-control-sm" placeholder="Cari..">
                            </div>
                            <a href="#" class="btn btn-primary btn-sm">Tambah</a>
                        </div>
                        <div class="table-responsive mt-4">
                            <table class="table table-flush">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($row = mysqli_fetch_array($data)) {?>
                                        <tr>
                                            <td><?php echo $row['nama']; ?></td>
                                            <td><?php echo $row['alamat']; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>