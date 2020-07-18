<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller {

	public function fyp()
	{
		$this->load->view('newfyppage');
	}

	public function li()
	{
		$this->load->view('newlipage');
	}

}
