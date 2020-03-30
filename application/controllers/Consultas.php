<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultas extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('mensaje_model');
		//$this->load->library('form_validation');
		//$this->load->database('default');
    }
	public function index()
	{   
        $data['recientes'] = $this->mensaje_model->getRecientes();
        $data['frecuentes'] = $this->mensaje_model->getFrecuentes();
		$this->load->view('template/header');
		$this->load->view('vistas/home_view', $data);
		$this->load->view('template/footer');
    }

    public function guardaMensaje(){
        $data['user_name'] = $this->input->post('nombre');
        $data['user_fono'] = $this->input->post('fono');
        $data['user_tipo'] = 'pregunta';
        $data['user_date'] = date("Y-m-d H:i:s");
        $user_id = $this->mensaje_model->guardarUsuario($data);
        $data2['pregunta_date'] = date("Y-m-d H:i:s");      
        $data2['pregunta_cont'] = $this->input->post('mensaje');
        $data2['pregunta_user_id'] = $user_id;
        $this->mensaje_model->guardarPregunta($data2);
        print_r($data);
        print_r($data2);
    }
    public function respuestas()
	{   
        $data['recientes'] = $this->mensaje_model->getRecientes();
        $data['frecuentes'] = $this->mensaje_model->getFrecuentes();
        $data['preguntas'] = $this->mensaje_model->getPreguntas();
		$this->load->view('template/header');
		$this->load->view('vistas/responder_view', $data);
		$this->load->view('template/footer');
    }

}
