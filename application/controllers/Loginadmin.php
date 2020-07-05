<?php
   class Loginadmin extends CI_Controller {

      public function index() {
         $this->load->view('loginAdmin');
      }

      public function loginprocess() {

        $this->load->model('Model_login');

        $email_user = $this -> input -> post('email',true);
        $pass_user = $this -> input -> post('password',true);
        $cek = $this -> Model_login -> proseslogin($email_user,$pass_user);

        //$data['result']= $this->db->get('register');

        $result = count($cek);
        if ($result > 0) {

          $select = $this-> db-> get_where('register',array('email'=>$email_user, 'password'=>$pass_user)) -> row();
          $this-> session-> set_userdata($data);
          $data = array('logged_in' => true,
                        'loger' => $select-> firstname);

          redirect ('dashboard');

          echo 'Login Successful' ;
        }
        else {
          $this -> session -> set_flashdata('err','Email and password not found');
        redirect ('loginFormAdmin');
        }
    }
}

?>