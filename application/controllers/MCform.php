<?php

    require "vendor/autoload.php";
    use Spipu\Html2Pdf\Html2Pdf;
    use Spipu\Html2Pdf\Html2PdfException;
    use Spipu\Html2Pdf\Html2PdfExceptionFormatter;

   class MCform extends CI_Controller {
  
    public function index()
	{
        $this->load->view('mc-form');
        
	}

    public function insert() {
        $fullname = $_POST['fullname'];
        $doa = $_POST['doa'];
        $illness = $_POST['illness'];
        $hosp = $_POST['hosp'];
        $mc = $_POST['mc'];

        $data = array('fullname'=> $fullname, 'doa' => $doa, 'illness'=> $illness,
                      'hosp'=> $hosp,'mc'=> $mc);

                     

        $this->load->model('Model_mca');
        $insert = $this-> Model_mca->insertData('mca',$data);
        if($insert > 0) {
          echo 'Data successfully added';
          //redirect('newpage');
        }
        else {
          echo 'Error';
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
            ob_end_clean();
            $html2pdf->output( substr($data, 0, 10). ".pdf");
            //$html2pdf->output('F');
            print_r ('test');
        }

        catch (Html2PdfException $e) {
            $formatter = new ExceptionFormatter($e);
            echo $formatter->getHtmlMessage();
        }


    }

    public function join ($table, $tbljoin, $join) {
        $this->db->join($tbljoin,$join);
        return $this->db->get($table);
    }
        
}

?>
    