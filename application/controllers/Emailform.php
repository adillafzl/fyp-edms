<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emailform extends CI_Controller {

	public function index()
	{
		$this->load->view('emailform');
    }
    
    public function email()
    {
        $email = $_POST['email'];

        $data = array('email'=> $email);

        $this -> load -> model("Model_email");
        $insert = $this-> Model_email->email('email_add',$data);
        if($insert > 0) {
            $message = "Email successfully sent";
            echo "<script type='text/javascript'>alert('$message');</script>";
            redirect ('');
        }
          else {
            echo 'Error';
          }
    }

}
