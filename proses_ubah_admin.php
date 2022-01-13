<?php
if($_POST){
    $id_admin=$_POST['id_admin'];
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
        $update=mysqli_query($conn,"update admin set nama_admin='$nama_admin', jk_admin='$jk_admin', username='$username', password='$password', level='$level' where id_admin='$id_admin'") or die(mysqli_error());
         
         if($update){
            echo "<script>alert('Sukses mengubah data admin');location.href='admin.php';</script>";
        } else {
            echo "<script>alert('Gagal mengubah data admin');location.href='tambah_admin.php';</script>";
        }
    }
}
?><!-- punya adel -->