<?php
    if($_GET['id_sepeda']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from sepeda where id_sepeda='".$_GET['id_sepeda']."'");
        if ($qry_hapus){
            echo "<script>alert('Sukses hapus sepeda');location.href='sepeda.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus sepeda');location.href='sepeda.php';</script>";
        }
    }
?><!-- punya adel -->