<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deletepage extends CI_Controller {

	public function index()
	{
        $this->data['result'] = $this-> Model_adddoc -> getDoc('document');
		    $this->load->view('deletepage',$this->data);
    }

    public function delete($id) {

        $this -> load -> model("Model_adddoc");
        $delete_doc = $this -> Model_adddoc -> deleteDoc('document',$id);

        if($delete_doc > 0){
          redirect ('deletepage/'); }
        else {
          echo "Deleting user failed";
        }
      }
    
}