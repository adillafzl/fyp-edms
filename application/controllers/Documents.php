<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documents extends CI_Controller {

	public function index()
	{
		$this->data['result'] = $this-> Model_adddoc -> getDoc('document');
        $this->load->view('documents', $this->data);
	}

}

