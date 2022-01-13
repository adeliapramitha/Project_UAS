<?php
if($_POST){
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
        $insert=mysqli_query($conn,"insert into sepeda (merk, jenis, harga, s_sepeda) value ('".$merk."','".$jenis."','".$harga."','".$s_sepeda."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan data sepeda');location.href='sepeda.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan data sepeda');location.href='tambah_sepeda.php';</script>";
        }
    }
}
?><!-- punya adel -->