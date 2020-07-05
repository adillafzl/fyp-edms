<?php
   class Model_login extends CI_Model {

     public function proseslogin($email,$password) {

       //$this -> db -> where('no',$id);
       //$this -> db -> update('register',$data);

        $this->db->where('email',$email);
        $this->db->where('password',$password);

        return $this->db->get('register')->row();

     }

    }
?>
