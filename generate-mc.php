<?php

require "vendor/autoload.php";

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Html2PdfException;
use Spipu\Html2Pdf\Html2PdfExceptionFormatter;


$fullname = (isset($_POST['fullname']) ? $_POST['fullname'] : '');
$doa = (isset($_POST['doa']) ? $_POST['doa'] : '');
$illness = (isset($_POST['illness']) ? $_POST['illness'] : '');
$hosp = (isset($_POST['hosp']) ? $_POST['hosp'] : '');
$mc = (isset($_POST['mc']) ? $_POST['mc'] : '');
$img = (isset($_POST['img']) ? $_POST['img'] : '');

function do_upload(){
$config = array(
    'upload_path' => "./uploads/",
    'allowed_types' => "gif|jpg|png|jpeg|pdf",
    'overwrite' => TRUE,
    'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
    'max_height' => "768",
    'max_width' => "1024"
    );
    $this->load->library('upload', $config);
}


try {
    $html2pdf = new HTML2PDF('P','A4','en',true,'UTF-8',[0,0,0,0]);
    $html2pdf->pdf->SetDisplayMode('fullpage');
    ob_start();
    include "mc.php";
    $content = ob_get_clean();
    $html2pdf->writeHTML($content);
    error_reporting(0);
    $html2pdf->createIndex('','38','12',false,true,1,"helvetica");
    $html2pdf->output( substr($data, 0, 10). ".pdf");
    //$html2pdf->output('F');
}
catch (Html2PdfException $e) {
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}

?>