<?php defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{

    public function index()
    {
        $this->load->view('login');
    }

    public function process_login()
    {
        $staffid = $_POST['staffid'];
        $password = $_POST['password'];
        if ($this->Model_account->login($staffid, $password)) {
            $this->session->set_userdata('staffid', $staffid);
            $this->load->view('dashboard');
        } else {
            $message = "Invalid Account";
            echo "<script type='text/javascript'>alert('$message');</script>";
            //redirect ('account');
        }
    }

    public function logout() {
        $this->session->unset_userdata('staffid');
        redirect('login');
    }

}