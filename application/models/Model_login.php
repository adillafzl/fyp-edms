<?php
   class Model_login extends CI_Model {

     public function proseslogin($email,$password) {

        $this->db->where('email',$email);
        $this->db->where('password',$password);

        return $this->db->get('register')->row();

     }

     function loginlect($email, $password)
    {
        return $email == $_POST['email'] && $password == $_POST['password'];
    }

    }
?>
