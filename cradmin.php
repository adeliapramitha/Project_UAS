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

    <title>CETAK LAPORAN ADMIN</title>
  </head>
  <body style="padding: 30px;" onload="window.print();">
<h3 align="center">LAPORAN DATA ADMIN</h3>

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>JENIS KELAMIN</th>
                <th>USERNAME</th>
                <th>LEVEL</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $qry_admin=mysqli_query($conn,"select * from admin");
            $no=0;
            while($dt_admin=mysqli_fetch_array($qry_admin)){
            $no++;?><!-- punya adel -->
                <tr>
                    <td><?=$no?></td><td><?=$dt_admin['nama_admin']?></td> <td><?=$dt_admin['jk_admin']?></td><td><?=$dt_admin['username']?></td><td><?=$dt_admin['level']?></td>
                </tr>
                <?php
                }
                ?>
        </tbody>
</table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<?php
?>
  </body>
</html>