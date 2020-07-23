<?php
   class Loginlecturer extends CI_Controller {

      public function index() {
         $this->load->view('loginLecturer');

      }
      public function loginl() {
        // $this->load->view('dashboard');

      $email = $_POST['email'];
        $password = $_POST['password'];
        if ($this->Model_login->loginlect($email, $password)) {
            $this->session->set_userdata('email', $email);
            $this->load->view('dashboard');
        } else {
            $data['error'] = 'Invalid Account';
            $this->load->view('Loginlecturer', $data);
        }

      }

   }
?>
