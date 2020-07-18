<?php

require "vendor/autoload.php";

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Html2PdfException;
use Spipu\Html2Pdf\Html2PdfExceptionFormatter;

$code = (isset($_POST['code']) ? $_POST['code'] : '');
$code1 = (isset($_POST['code1']) ? $_POST['code1'] : '');
$sem = (isset($_POST['sem']) ? $_POST['sem'] : '');
$sem1 = (isset($_POST['sem1']) ? $_POST['sem1'] : '');
$prog = (isset($_POST['prog']) ? $_POST['prog'] : '');
$sesi = (isset($_POST['sesi']) ? $_POST['sesi'] : '');
$start = (isset($_POST['start']) ? $_POST['start'] : '');
$end = (isset($_POST['end']) ? $_POST['end'] : '');
$start1 = (isset($_POST['start1']) ? $_POST['start1'] : '');
$end1 = (isset($_POST['end1']) ? $_POST['end1'] : '');

try {
    $html2pdf = new HTML2PDF('P','A4','en',true,'UTF-8',[0,0,0,0]);
    $html2pdf->pdf->SetDisplayMode('fullpage');
    ob_start();
    include "fypA.php";
    $content = ob_get_clean();
    $html2pdf->writeHTML($content);
    error_reporting(0);
    $html2pdf->createIndex('','38','12',false,true,1,"helvetica");
    $html2pdf->output( substr($data, 0, 10). ".pdf");
}
catch (Html2PdfException $e) {
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}

?>