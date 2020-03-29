<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Microsite extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('mensaje_model');
		//$this->load->library('form_validation');
		//$this->load->database('default');
    }
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('vistas/home_view');
		$this->load->view('template/footer');
    }

    public function guargaMensaje(){
        $this->input->post('nombre');
        $this->input->post('mensaje');
    }
}
