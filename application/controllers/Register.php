<?php
   class Register extends CI_Controller {

      public function index() {
         $this->load->view('registerstaff');
      }

      public function home() {
        $this->load->view('home');
     }

      public function insert() {
        $userid = $_POST['userid'];
        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $data = array('userid'=> $userid, 'username' => $username, 'phone'=> $phone,
                      'email'=> $email,'password'=> $password);

        $insert = $this-> Model_registerc->insertData('admin',$data);
        if($insert > 0) {
          echo 'Data successfully added';
          redirect('Register/index');
        }
        else {
          echo 'Error';
        }

        }
        

        public function addStaff() {
          $staffid = $_POST['staffid'];
          $fname = $_POST['fname'];
          $lname = $_POST['lname'];
          $phone = $_POST['phone'];
          $address = $_POST['address'];
          $password = $_POST['password'];
  
          $data = array('staffid'=> $staffid, 'fname' => $fname, 'lname'=> $lname,
                        'phone'=> $phone,'address'=> $address,'password'=> $password);
  
          $insert = $this-> Model_registerc->insertData('staff',$data);
          if($insert > 0) {
            echo 'Data successfully added';
            redirect('home');
          }
          else {
            echo 'Error';
          }
  
          }
        }

?>
