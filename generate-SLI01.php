<?php

require "vendor/autoload.php";

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Html2PdfException;
use Spipu\Html2Pdf\Html2PdfExceptionFormatter;

$name = (isset($_POST['name']) ? $_POST['name'] : '');
$nric = (isset($_POST['nric']) ? $_POST['nric'] : '');
$studid = (isset($_POST['studid']) ? $_POST['studid'] : '');
$start = (isset($_POST['start']) ? $_POST['start'] : '');
$end = (isset($_POST['end']) ? $_POST['end'] : '');


try {
    $html2pdf = new HTML2PDF('P','A4','en',true,'UTF-8',[0,0,0,0]);
    $html2pdf->pdf->SetDisplayMode('fullpage');
    ob_start();
    include "SLI01.php";
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