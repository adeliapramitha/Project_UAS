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
<center><h3>LAPORAN DATA SEPEDA</h3></center>

   	<table border="1" cellspacing="0" cellpadding="1" align="center">
            <tr>
                <th>NO</th>
                <th>MERK</th>
                <th>JENIS SEPEDA</th>
                <th>HARGA/HARI</th>
                <th>STATUS SEPEDA</th>
            </tr>
            <?php
            include "koneksi.php";
            $qry_sepeda=mysqli_query($conn,"select * from sepeda");
            $no=0;
            while($dt_sepeda=mysqli_fetch_array($qry_sepeda)){
            $no++;?><!-- punya adel -->
                <tr>
                    <td><?=$no?></td><td><?=$dt_sepeda['merk']?></td> <td><?=$dt_sepeda['jenis']?></td><td><?=$dt_sepeda['harga']?></td><td><?=$dt_sepeda['s_sepeda']?></td>
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
$dompdf->stream("Lap Sepeda",array("Attachment"=>1));
?>