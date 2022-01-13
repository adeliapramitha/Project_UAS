<?php
    ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
    include 'koneksi.php';
    $qry_sewa= mysqli_query($conn, "select * from sepeda, sewa where sepeda.id_sepeda=sewa.id_sepeda") or die(mysqli_error());
    ?>
    <h3 align="center">CETAK LAPORAN DATA SEWA</h3>

    <table  border="1" cellspacing="0" cellpadding="1" align="center">
            <tr>
                <th>NO</th>
                <th>MERK</th>
                <th>JENIS SEPEDA</th>
                <th>NAMA PENYEWA</th>
                <th>KTP</th>
                <th>TANGGAL MULAI</th>
                <th>TANGGAL SELESAI</th>
                <th>LAMA SEWA</th>
                <th>TOTAL HARGA</th>
            </tr>
            <?php
            $no=0;
            while($dt_sewa=mysqli_fetch_array($qry_sewa)){
            $no++;?><!-- punya adel -->
                <tr>
                    <td><?=$no?></td><td><?=$dt_sewa['merk']?></td> <td><?=$dt_sewa['jenis']?></td><td><?=$dt_sewa['nama_sewa']?></td><td><?=$dt_sewa['ktp']?></td><td><?=$dt_sewa['tgl_sewa']?></td><td><?=$dt_sewa['tgl_kembali']?></td><td><?=$dt_sewa['lama']?></td><td><?=$dt_sewa['harga_total']?></td>
                </tr>
                <?php
                }
                ?>
</table>
</body>
</html>
<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();

$html = ob_get_contents();
ob_end_clean();
$dompdf->loadHtml($html);
// (Opsional) Mengatur ukuran kertas dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Menjadikan HTML sebagai PDF
$dompdf->render();
// Output akan menghasilkan PDF (1 = download dan 0 = preview)
$dompdf->stream("Lap Order",array("Attachment"=>1));
?>