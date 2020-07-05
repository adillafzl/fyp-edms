<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suratcuti extends CI_Controller {

	public function index()
	{
		$this->load->view('suratcuti-form');

}

public function insert() {
	$sign = $_POST['sign'];
	$reason = $_POST['reason'];
	$hosp = $_POST['hosp'];
	$mc = $_POST['mc'];

	$data = array('sign'=> $sign, 'reason' => $reason, 'hosp'=> $hosp,
				  'mc'=> $mc);

	$this->load->model('Model_suratcuti');
	$insert = $this-> Model_suratcuti->insertData('surat_cuti',$data);
	if($insert > 0) {
	  echo 'Data successfully added';
	  redirect('suratcuti');
	}
	else {
	  echo 'Error';
	}

}

public function checkRadio() {

	
	$sign = $_POST['sign'];
	$reason = $_POST['reason'];
	$hosp = $_POST['hosp'];
	$mc = $_POST['mc'];

	$data = array('sign'=> $sign, 'reason' => $reason, 'hosp'=> $hosp,
				  'mc'=> $mc);

	$this -> load -> model("Model_suratcuti");
    $get_data = $this -> Model_suratcuti -> getData('surat_cuti',);

	if($sign == 'me'){
		
		if($reason == 'sick'){
			if($hosp == 'yes'){
				
				if($mc == 'yes'){
					redirect ('mc-form.php');
				}

				elseif($mc == 'no'){
					if($mc == 'no'){
						redirect ('mcB-form.php');
					}
				}
			}
							
			elseif($hosp == 'no'){
				if($mc == 'no'){
						redirect ('mcC-form.php');
				}
			}
		}
		elseif($reason == 'death'){
			if($hosp == 'no'){
				if($mc == 'no'){
						redirect ('mcD-form.php');
				}
			}
		}
		else{
			redirect ('mcE-form.php');
		}	
		}
	
		if($sign == 'others'){
		
		}
	}
}

?>