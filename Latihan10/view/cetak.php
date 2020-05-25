<?php
require_once("assets/dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$html = '<center><h3>Daftar Nama Sekolah</h3></center><br/>';
$html .= '<table border="1" width="100%">
 <tr>

 <th>Nama</th>
 <th>Alamat</th>
 <th>Logo</th>
 </tr>';

while ($tampils = $this->model->fetch($cetak)) {
    $html .= "<tr>

 <td>" . $tampils[1] . "</td>
 <td>" . $tampils[2] . "</td>
 <td><img src='assets/logo/" . $tampils[3] . "'  class='img-circle' width='100'</td>
 </tr>";
}
$html .= "</html>";

$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('Uwuw.pdf');
