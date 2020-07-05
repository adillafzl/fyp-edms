<?php
   class Register extends CI_Controller {

      public function index() {
         $this->load->view('register(1)');
      }

      public function home() {
        $this->load->view('home');
     }

      public function insert() {
        $staffid = $_POST['staffid'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $icnum = $_POST['icnum'];
        $email = $_POST['email'];
        $phoneno = $_POST['phoneno'];
        $password = $_POST['password'];

        $data = array('staffid'=> $staffid, 'firstname' => $firstname, 'lastname'=> $lastname,
                      'icnum'=> $icnum, 'email'=> $icnum, 'email'=> $email,
                      'phoneno'=> $phoneno, 'password'=> $password);

        $insert = $this-> Model_registerc->insertData('register',$data);
        if($insert > 0) {
          echo 'Data successfully added';
          redirect('Register/index');
        }
        else {
          echo 'Error';
        }

        }
        }

?>
