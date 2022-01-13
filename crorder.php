<?php
  include 'koneksi.php';
    session_start();
    if($_SESSION['status_login']!=true){
    header('location: login.php');
    }
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CETAK LAPORAN SEWA</title>
  </head>
  <body  style="padding: 30px;" onload="window.print();">
    <?php
    include 'koneksi.php';
    $qry_sewa= mysqli_query($conn, "select * from sepeda, sewa where sepeda.id_sepeda=sewa.id_sepeda") or die(mysqli_error());
    ?>
    <h3 align="center">CETAK LAPORAN DATA SEWA</h3>

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>MERK</th>
                <th>JENIS SEPEDA</th>
                <th>NAMA PENYEWA</th>
                <th>KTP</th>
                <th>TANGGAL MULAI</th>
                <th>TANGGAL SELESAI</th>
                <th>LAMA SEWA</th>
                <th>TOTAL HARGA</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=0;
            while($dt_sewa=mysqli_fetch_array($qry_sewa)){
            $no++;?><!-- punya adel -->
                <tr>
                    <td><?=$no?></td><td><?=$dt_sewa['merk']?></td> <td><?=$dt_sewa['jenis']?></td><td><?=$dt_sewa['nama_sewa']?></td><td><?=$dt_sewa['ktp']?></td><td><?=$dt_sewa['tgl_sewa']?></td><td><?=$dt_sewa['tgl_kembali']?></td><td><?=$dt_sewa['lama']?></td><td><?=$dt_sewa['harga_total']?></td>
                </tr>
                <?php
                }
                ?>
        </tbody>
</table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>