<?php
   class GenerateQR extends CI_Controller {

      public function index() 
      {
        $this->load->library('ciqrcode');
         
        $config['cacheable'] = true;
        $config['cachedir'] = './assets';
        $config['errorlog'] = './assets';
        $config['imagedir'] = './assets/QRCODE/';
        $config['quality'] = true;
        $config['size'] = '1024';
        $config['black'] = array(224,255,255);
        $config['white'] = array(70,130,180);

        $this->ciqrcode->initialize($config);

        $image_name = random_string('alnum', 16).'.png';
        
        $params['data'] = random_string('alnum', 16);
        $params['level'] = 'H';
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name;

        $this->ciqrcode->generate($params);

        $data['title'] = 'QR Code';
        $data['img'] = $image_name;
        $this->load->view('generateqr',$data);
      }

   }
?>

