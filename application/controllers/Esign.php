<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Esign extends CI_Controller {

	public function index()
	{
		$this->load->view('esign');

		//$this->load->helper('url');
		//echo site_url('fyp/assests/js/signature.js');
	}

}
