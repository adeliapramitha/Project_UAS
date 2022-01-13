<?php
    if($_GET['id_sewa']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from sewa where id_sewa='".$_GET['id_sewa']."'");
        if ($qry_hapus){
            echo "<script>alert('Sukses hapus data sewa');location.href='order.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus data sewa');location.href='order.php';</script>";
        }
    }
?><!-- punya adel -->