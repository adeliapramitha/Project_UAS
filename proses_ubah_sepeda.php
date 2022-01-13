<?php
if($_POST){
    $id_sepeda=$_POST['id_sepeda'];
    $merk=$_POST['merk'];
    $jenis=$_POST['jenis']; 
    $harga=$_POST['harga'];
    $s_sepeda=$_POST['s_sepeda'];

    if(empty($merk)){
        echo "<script>alert('Merk tidak boleh kosong');location.href='tambah_sepeda.php';</script>";

    } elseif(empty($jenis)){
        echo "<script>alert('Jenis Sepeda tidak boleh kosong');location.href='tambah_sepeda.php';</script>";
    } elseif(empty($harga)){
        echo "<script>alert('Harga tidak boleh kosong');location.href='tambah_sepeda.php';</script>";
    } elseif(empty($s_sepeda)){
        echo "<script>alert('Status Sepeda tidak boleh kosong');location.href='tambah_sepeda.php';</script>";
    } else {
        include "koneksi.php";
        $update=mysqli_query($conn,"update sepeda set merk='$merk', jenis='$jenis', harga='$harga', s_sepeda='$s_sepeda' where id_sepeda='$id_sepeda'") or die(mysqli_error());
         
         if($update){
            echo "<script>alert('Sukses mengubah data sepeda');location.href='sepeda.php';</script>";
        } else {
            echo "<script>alert('Gagal mengubah data sepeda');location.href='tambah_sepeda.php';</script>";
        }
    }
}
?><!-- punya adel -->