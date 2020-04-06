<?php

defined('BASEPATH') OR exit('No direct script access allowed');
//$this->load->library('abstime(10000024536176)');
class Consultas extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('mensaje_model');
    }
    protected function generaCodigo($length = 10){
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);  
    }

	public function index()
	{   
        $data1['recientes'] = $this->mensaje_model->getRecientes();
        $data1['frecuentes'] = $this->mensaje_model->getFrecuentes();
        $data['respondido'] = $this->mensaje_model->getRespondidas();
		$this->load->view('template/header');
        $this->load->view('vistas/home_view', $data);
        $this->load->view('vistas/fichas_view', $data1);
		$this->load->view('template/footer');
    }

    public function respuestas(){   
        $data1['recientes'] = $this->mensaje_model->getRecientes();
        $data1['frecuentes'] = $this->mensaje_model->getFrecuentes();
        $data['preguntas'] = $this->mensaje_model->getPreguntas();
		$this->load->view('template/header');
        $this->load->view('vistas/responder_view', $data);
        $this->load->view('vistas/fichas_view', $data1);
		$this->load->view('template/footer');
    }
    public function obtUsuario(){
        $pregunta_codigo = $this->input->post('preg_id');
        $user = $this->mensaje_model->getUsuario($pregunta_codigo);
        echo json_encode($user);
    }
    public function guardaWap(){
        $data2 = array(
            'user_name' => $this->input->post('nombre'),
            'user_fono' => $this->input->post('fono'),
            'user_edad' => $this->input->post('edad'),
            'user_ocupacion' => $this->input->post('ocupacion'),
            'user_tipo' => 'whatsapp',        
            'user_date' => date("Y-m-d H:i:s"),
            'user_codigo' => $this->generaCodigo()
        );
        $user_id = $this->mensaje_model->guardarUsuario($data2);
        
        $data1 = array(
            'wap_user_codigo' => $user_id,//$user_id,
            'wap_que' => $this->input->post('preg1'),
            'wap_cuando' => $this->input->post('preg2'),
            'wap_porque' => $this->input->post('preg3'),
            'wap_date' => date("Y-m-d H:i:s"),
            'wap_codigo' => $this->generaCodigo(),
            //TODO
            /*AQUI SE DEBE IMPLEMENTAR EL PROCESO DE SELECCION ALEATORIA DE LOS ESPECIALISTAS*/  
            'wap_especialista_codigo' => ""
        );
        $wap_id = $this->mensaje_model->guardarWap($data1);
        $mensaje = '*Mi nombre es:* '.$data2['user_name']. ' *Me siento:* '.$data1['wap_que'].' *Desde:* '.$data1['wap_cuando'].' *Porque:* '. $data1['wap_porque'];
        $res = '59167325245&text='.str_replace(' ', '%20', $mensaje);
        echo json_encode($res, JSON_UNESCAPED_UNICODE);
    }
    public function guardaMensaje(){
        $data['user_name'] = $this->input->post('nombre');
        $data['user_fono'] = $this->input->post('fono');
        $data['user_tipo'] = 'pregunta';
        $data['user_date'] = date("Y-m-d H:i:s");
        $data['user_ocupacion'] = $this->input->post('ocupacion');
        $data['user_edad'] = $this->input->post('edad');
        $data['user_codigo'] = $this->generaCodigo();
        $user_id = $this->mensaje_model->guardarUsuario($data);

        $data2['pregunta_date'] = date("Y-m-d H:i:s");      
        $data2['pregunta_cont'] = $this->input->post('mensaje');
        $data2['pregunta_categoria'] = '';
        $data2['pregunta_ok'] = FALSE;
        $data2['pregunta_tipo'] = '';
        $data2['pregunta_user_codigo'] = $user_id;
        $data2['pregunta_codigo'] = $this->generaCodigo();
        $this->mensaje_model->guardarPregunta($data2);
        $res = 1;
        echo json_encode($res);
        //$this->index();
    }
    public function guardaRespuesta(){
        $respuesta = $this->input->post('respuesta');
        $preg_id = $this->input->post('preg_id');
        $resp_codigo = $this->generaCodigo();
        $pregunta_categoria = $this->input->post('categoria');
        $pregunta_tipo = $this->input->post('tipo');
        $data2 = array(
            'respuesta_date' => date("Y-m-d H:i:s"),      
            'respuesta_cont' => $respuesta,
            'respuesta_pregunta_codigo' => $preg_id,
            /*<?=form_hidden('carnet',$this->session->userdata('carnet'))?>
            <?=form_hidden('codigo',$this->session->userdata('codigo'))?>*/
            //'respuesta_pregunta_codigo' => $this->session->userdata('codigo'),
            'respuesta_user_codigo' => $this->session->userdata('codigo'),
            'respuesta_codigo' => $this->generaCodigo()
        );
        $data['pregunta_categoria'] = $this->input->post('categoria');
        $data['pregunta_tipo'] = $this->input->post('tipo');
        $data['pregunta_ok'] = TRUE;
        $valor = $this->mensaje_model->guardarRespuesta($data2);
        $valor2 = $this->actPreguntas($data, $data2['respuesta_pregunta_codigo']);
        $res = 1;
        echo json_encode($res);
        //$this->respuestas();
        //print($this->input->post('nombre'));*/
        //print_r($data);
        //print_r($data2);
    }
    public function actPreguntas($data, $codigo){
       $valor =  $this->mensaje_model->actualizaPregunta($data, $codigo);
       return TRUE;
    }

    public function obtPregUsu(){
        $data = $this->mensaje_model->getPregUsuario();
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }
}
