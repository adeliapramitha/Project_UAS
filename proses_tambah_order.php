<?php
    include 'koneksi.php';
    $mj = $_POST['mj'];
    $nama_sewa = $_POST['nama_sewa'];
    $ktp = $_POST['ktp'];
    $jk_sewa = $_POST['jk_sewa'];
    $alamat = $_POST['alamat'];
    $telp_sewa = $_POST['telp_sewa'];
    $tgl_sewa = new DateTime ($_POST['tgl_sewa']);
    $tgl_kembali = new DateTime ($_POST['tgl_kembali']);
    $selisih = $tgl_kembali->diff($tgl_sewa);
    $x = $selisih->d;
    $qry_sepeda = mysqli_query($conn, "select * from sepeda where id_sepeda='$mj'");
    $dt_sepeda = mysqli_fetch_array($qry_sepeda);
    $harga_total = $x * $dt_sepeda['harga'];
    $insert = mysqli_query($conn, "insert into sewa(id_sepeda, nama_sewa, ktp, jk_sewa, alamat, telp_sewa, tgl_sewa, tgl_kembali, lama, harga_total) values ('".$mj."', '".$nama_sewa."', '".$ktp."', '".$jk_sewa."', '".$alamat."', '".$telp_sewa."', '".$_POST['tgl_sewa']."', '".$_POST['tgl_kembali']."','".$x."','".$harga_total."')");
    if($insert){
            echo "<script>alert('Sukses menambahkan data order');location.href='order.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan data order');location.href='tambah_order.php';</script>";
        }
?>