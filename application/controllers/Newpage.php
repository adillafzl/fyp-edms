<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newpage extends CI_Controller {

	public function index()
	{
		$this->load->view('newpage');
  }
  
  public function fyp()
	{
		$this->load->view('newfyppage');
  }
  
  public function li()
	{
		$this->load->view('newlipage');
	}

	public function insert() {
        $docname = $_POST['docname'];
       
        $data = array('docname'=> $docname);

        $insert = $this-> Model_registerc->insertData('document',$data);
        if($insert > 0) {
          echo 'Data successfully added';
          redirect('newpage');
        }
        else {
          echo 'Error';
        }

        }

  public function template() {

	
        $surat_cuti = $_POST['surat_cuti'];
        $surat_fyp = $_POST['surat_fyp'];
        $surat_li = $_POST['surat_li'];
        $surat_lantik = $_POST['surat_lantik'];
        
        $data = array('surat_cuti'=> $surat_cuti,'surat_fyp'=> $surat_fyp);
        
        $this -> load -> model("Model_newpage");
        $newpage = $this -> Model_newpage -> insertPage('temp_surat',$data);

           
            if($surat_cuti == true){
              // header("Location: http://localhost/fyp/suratcuti/");
              redirect('suratcuti');
            }

            
            elseif($surat_fyp == true){
              // header("Location: http://localhost/fyp/template/fyp/");
              redirect('template/fyp');
            }

            elseif($surat_li == true){
              // header("Location: http://localhost/fyp/template/li");
              redirect('template/li');
            }
  


  }

  public function fypp() {
    
    $fypA = $_POST['fypA'];
    $fypB = $_POST['fypB'];

    $data = array('fypA'=> $fypA,'fypB'=> $fypB);

    $this -> load -> model("Model_newpage");
    $newpage = $this -> Model_newpage -> insertPage('temp_fyp',$data);

    if($fypA == true){
//       header("Location: http://localhost/fyp/fypA-form.php/");
	    redirect('fypA-form.php');
    }

    
    elseif($fypB == true){
//       header("Location: http://localhost/fyp/fypB-form.php/");
	    redirect('fypB-form.php');
    }
  }

  public function lii() {
    
    $slia = $_POST['slia'];
    $slib = $_POST['slib'];

    $data = array('slia'=> $slia,'slib'=> $slib);

    $this -> load -> model("Model_newpage");
    $newpage = $this -> Model_newpage -> insertPage('temp-li',$data);

    if($slia == true){
//       header("Location: http://localhost/fyp/SLI01-form.php/");
	    redirect('SLI01-form.php');
    }

    
    elseif($slib == true){
//       header("Location: http://localhost/fyp/SLI03-form.php/");
	    redirect('SLI03-form.php');
    }
  }

}

?>
