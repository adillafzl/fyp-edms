<?php

require "vendor/autoload.php";

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Html2PdfException;
use Spipu\Html2Pdf\Html2PdfExceptionFormatter;


$fullname = (isset($_POST['fullname']) ? $_POST['fullname'] : '');
$position = (isset($_POST['position']) ? $_POST['position'] : '');
$jawatan = (isset($_POST['jawatan']) ? $_POST['jawatan'] : '');
$jabatan = (isset($_POST['jabatan']) ? $_POST['jabatan'] : '');
$program = (isset($_POST['program']) ? $_POST['program'] : '');
$start = (isset($_POST['start']) ? $_POST['start'] : '');
$end = (isset($_POST['end']) ? $_POST['end'] : '');
$lokasi = (isset($_POST['lokasi']) ? $_POST['lokasi'] : '');
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
    include "lantik.php";
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