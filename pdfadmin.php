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
    <center><h3>LAPORAN DATA ADMIN</h3></center>
    <table  border="1" cellspacing="0" cellpadding="1" align="center">
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>JENIS KELAMIN</th>
                <th>USERNAME</th>
                <th>LEVEL</th>
            </tr>
            <?php
            include "koneksi.php";
            $qry_admin=mysqli_query($conn,"select * from admin");
            $no=0;
            while($dt_admin=mysqli_fetch_array($qry_admin)){
            $no++;?><!-- punya adel -->
                <tr>
                    <td><?=$no?></td><td><?=$dt_admin['nama_admin']?></td> <td><?=$dt_admin['jk_admin']?></td><td><?=$dt_admin['username']?></td><td><?=$dt_admin['level']?></td>
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
$dompdf->stream("Lap Admin",array("Attachment"=>1));
?>