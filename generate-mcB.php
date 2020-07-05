<?php

require "vendor/autoload.php";

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Html2PdfException;
use Spipu\Html2Pdf\Html2PdfExceptionFormatter;

/*
if (!isset($_POST['data'])) {
    header("location: index2.php");
die();
}
*/

//$data = isset($_POST['data']);

$fname = (isset($_POST['fname']) ? $_POST['fname'] : '');
$id = (isset($_POST['id']) ? $_POST['id'] : '');
$days = (isset($_POST['days']) ? $_POST['days'] : '');
$reason = (isset($_POST['reason']) ? $_POST['reason'] : '');
$datea = (isset($_POST['datea']) ? $_POST['datea'] : '');
$dateb = (isset($_POST['dateb']) ? $_POST['dateb'] : '');
$edate = (isset($_POST['edate']) ? $_POST['edate'] : '');


try {
    $html2pdf = new HTML2PDF('P','A4','en',true,'UTF-8',[0,0,0,0]);
    $html2pdf->pdf->SetDisplayMode('fullpage');
    ob_start();
    include "mcB.php";
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