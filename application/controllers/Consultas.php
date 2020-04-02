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
    protected function generaCodigo($length = 10){
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);  
    }

	public function index()
	{   
        $data['recientes'] = $this->mensaje_model->getRecientes();
        $data['frecuentes'] = $this->mensaje_model->getFrecuentes();
        $data['respondido'] = $this->mensaje_model->getRespondidas();
		$this->load->view('template/header');
		$this->load->view('vistas/home_view', $data);
		$this->load->view('template/footer');
    }

    public function respuestas(){   
        $data['recientes'] = $this->mensaje_model->getRecientes();
        $data['frecuentes'] = $this->mensaje_model->getFrecuentes();
        $data['preguntas'] = $this->mensaje_model->getPreguntas();
		$this->load->view('template/header');
		$this->load->view('vistas/responder_view', $data);
		$this->load->view('template/footer');
    }

    public function guardaMensaje(){
        $data['user_name'] = $this->input->post('nombre');
        $data['user_fono'] = $this->input->post('fono');
        $data['user_tipo'] = 'pregunta';
        $data['user_date'] = date("Y-m-d H:i:s");
        $data['user_codigo'] = $this->generaCodigo();
        $user_id = $this->mensaje_model->guardarUsuario($data);

        $data2['pregunta_date'] = date("Y-m-d H:i:s");      
        $data2['pregunta_cont'] = $this->input->post('mensaje');
        $data2['pregunta_categoria'] = '';
        $data2['pregunta_user_codigo'] = $user_id;
        $data2['pregunta_codigo'] = $this->generaCodigo();
        $this->mensaje_model->guardarPregunta($data2);
        $res = 1;
        echo json_encode($res);
    }
    public function guardaRespuesta(){
        $data2['respuesta_date'] = date("Y-m-d H:i:s");      
        $data2['respuesta_cont'] = $this->input->post('respuesta');
        $data2['respuesta_pregunta_codigo'] = $this->input->post('preg_id');
        $data2['respuesta_user_codigo'] = $this->input->post('codigo');
        $data2['respuesta_codigo'] = $this->generaCodigo();
        $pregunta_categoria = $this->input->post('categoria');
        $valor = $this->mensaje_model->guardarRespuesta($data2, $pregunta_categoria);
        $res = 1;
        echo json_encode($res);
        //print($this->input->post('nombre'));
        //print_r($data);
        //print_r($data2);
    }
}
