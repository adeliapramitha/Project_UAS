<?php
if($_POST){
    $id_kwitansi=$_POST['id_kwitansi'];
    $dari=$_POST['dari'];
    $untuk=$_POST['untuk']; 
    $jumlah=$_POST['jumlah'];
    $terbilang=$_POST['terbilang'];
    $penerima=$_POST['penerima'];

        include "koneksi.php";
        $update=mysqli_query($conn,"update kwitansi set dari='$dari', untuk='$untuk', jumlah='$jumlah', terbilang='$terbilang', penerima='$penerima' where id_kwitansi='$id_kwitansi'") or die(mysqli_error());
         
         if($update){
            echo "<script>alert('Sukses mengubah data kwitansi');location.href='kwitansi.php';</script>";
        } else {
            echo "<script>alert('Gagal mengubah data kwitansi');location.href='tambah_kwitansi.php';</script>";
        }
    }
?><!-- punya adel -->