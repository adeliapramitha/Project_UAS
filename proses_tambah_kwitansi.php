<?php
    include 'koneksi.php';
    $tgl_kwt = new DateTime ($_POST['tgl_kwt']);
    $dari =$_POST['dari'];
    $untuk =$_POST['untuk'];
    $jumlah =$_POST['jumlah'];
    $terbilang =$_POST['terbilang'];
    $penerima =$_POST['penerima'];

    $insert = mysqli_query($conn, "insert into kwitansi(tgl_kwt, dari, untuk, jumlah, terbilang, penerima) values ('".$_POST['tgl_kwt']."', '".$dari."', '".$untuk."', '".$jumlah."', '".$terbilang."', '".$penerima."')");
    if($insert){
            echo "<script>alert('Sukses menambahkan data kwitansi');location.href='kwitansi.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan data kwitansi');location.href='tambah_kwitansi.php';</script>";
        }
?>
