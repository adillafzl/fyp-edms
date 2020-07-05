<?php
class Pages extends CI_Controller {

        public function index()
        {
        $this->load->view('test/header');
        $this->load->view('test/home');
          $this->load->view('test/about');
        $this->load->view('test/footer');

        }
}
