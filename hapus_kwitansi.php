<?php
    if($_GET['id_kwitansi']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from kwitansi where id_kwitansi='".$_GET['id_kwitansi']."'");
        if ($qry_hapus){
            echo "<script>alert('Sukses hapus kwitansi');location.href='kwitansi.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus kwitansi');location.href='kwitansi.php';</script>";
        }
    }
?><!-- punya adel -->