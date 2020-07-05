<?php
   class DisplayUser extends CI_Controller {

      public function index() {

         $this->data['result'] = $this-> Model_displayuser -> getUser('register');
         $this->load->view('displayuser', $this->data);
      }

      public function delete($id) {

        $this -> load -> model("Model_displayuser");
        $delete_user = $this -> Model_displayuser -> deleteUser('register',$id);

        if($delete_user > 0){
          redirect ('displayuser/'); }
        else {
          echo "Deleting user failed";
        }
      }

      public function edit($id) {
        //keluarkan data untuk update
        $this->data['dataEdit'] = $this-> Model_displayuser ->dataEdit('register',$id);
        $this->load->view('editform',$this->data);

      }


     public function update($id) {
       //button update kat editform

        //$no = $_POST['no'];
        $staffid = $_POST['staffid'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $icnum = $_POST['icnum'];
        $email = $_POST['email'];
        $phoneno = $_POST['phoneno'];
        $password = $_POST['password'];

        //$this -> load -> model("Model_displayuser");

        $data = array('staffid'=> $staffid, 'firstname' => $firstname, 'lastname'=> $lastname,
                      'icnum'=> $icnum, 'email'=> $email,
                      'phoneno'=> $phoneno, 'password'=> $password);

        $this->load->model('Model_displayuser');

         //$this->data['editUser'] = $this -> Model_displayuser -> editUser('register',$data, $id);
         $edit_user = $this-> Model_displayuser->editUser('register',$data,$id);

        //echo $this->db->last_query();

        if($edit_user > 0){
          redirect ('displayuser/'); }
        else {
          echo "Updating user failed";
        }
      }


   }
?>
