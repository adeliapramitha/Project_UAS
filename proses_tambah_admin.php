<?php
if($_POST){
    $nama_admin=$_POST['nama_admin'];
    $jk_admin=$_POST['jk_admin']; 
    $username=$_POST['username'];
    $password=$_POST['password'];
    $level=$_POST['level'];

    if(empty($nama_admin)){
        echo "<script>alert('Nama tidak boleh kosong');location.href='tambah_admin.php';</script>";

    } elseif(empty($jk_admin)){
        echo "<script>alert('Jenis Kelamin tidak boleh kosong');location.href='tambah_admin.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('Username tidak boleh kosong');location.href='tambah_admin.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('Password tidak boleh kosong');location.href='tambah_admin.php';</script>";
    } elseif(empty($level)){
        echo "<script>alert('Level tidak boleh kosong');location.href='tambah_admin.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into admin (nama_admin, jk_admin, username, password, level) value ('".$nama_admin."','".$jk_admin."','".$username."','".$password."','".$level."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan data admin');location.href='admin.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan data admin');location.href='tambah_admin.php.php';</script>";
        }
    }
}
?><!-- punya adel -->