<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newpage extends CI_Controller {

	public function index()
	{
		$this->load->view('newpage');
	}

	public function insert() {
        $docname = $_POST['docname'];
       
        $data = array('docname'=> $docname);

        $insert = $this-> Model_registerc->insertData('document',$data);
        if($insert > 0) {
          echo 'Data successfully added';
          redirect('newpage');
        }
        else {
          echo 'Error';
        }

        }

}
