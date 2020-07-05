<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prints extends CI_Controller {
    function __construct(){
        parent :: __construct();
        require_once APPPATH.'third_party/dompdf/dompdf_config.inc.php';
    }

	public function index()
	{
		$this->load->view('prints');
    }
    
    public function printpdf()
    {
        $dompdf = new Dompdf();

        $data = array('namerec'=> $namerec, 'addrec' => $addrec, 'date'=> $date,
        'title'=> $title, 'content'=> $content);

        $html = $this->load->view('prints',$data,true);

        $dompdf->load_html($html);

        $dompdf->set_paper('a4','potrait');

        $dompdf->render();

        $pdf = $dompdf->output();

        $dompdf->stream('blank.pdf',array("Attachment" => false));
    }

}
