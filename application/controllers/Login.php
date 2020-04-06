<?php

defined('BASEPATH') OR exit('No direct script access allowed');
    class Login extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('login_model');
            $this->load->model('mensaje_model');
            
            //$this->load->library('form_validation');
            //$this->load->database('default');
        }
        public function valido(){
            if($this->session->userdata('is_logued_in') == FALSE)
            {
                redirect(base_url().'login');
            }
        }
        public function index()
        {
            switch ($this->session->userdata('perfil')) {
                case '':
                    $data1['recientes'] = $this->mensaje_model->getRecientes();
                    $data1['frecuentes'] = $this->mensaje_model->getFrecuentes();
                    $data['preguntas'] = $this->mensaje_model->getPreguntas();
                    $data['token'] = $this->token();
                    $data['titulo'] = 'Ingrese sus Datos';
                    $this->load->view('template/header');
                    $this->load->view('vistas/login_view',$data);
                    $this->load->view('vistas/fichas_view',$data1);
                    $this->load->view('template/footer');
                    break;
                case 'e':
                    redirect(base_url().'consultas/respuestas');
                    break;
                default:
                    $data['token'] = $this->token();
                    $data1['recientes'] = $this->mensaje_model->getRecientes();
                    $data1['frecuentes'] = $this->mensaje_model->getFrecuentes();
                    $data['preguntas'] = $this->mensaje_model->getPreguntas();
                    $data['titulo'] = 'Ingrese sus datos';
                    $this->load->view('template/heder');
                    $this->load->view('vistas/login_view',$data);
                    $this->load->view('vistas/fichas_view',$data1);
                    $this->load->view('template/footer');
                    break;
            }
        }
        public function ingresar()
        {
            //print("Entro a ingresar y su token es:" . $this->session->userdata('token'));
            if($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token'))
            {
                //print("Entro al token");
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                //Verifica en la BBDD si esta el usuario o Unidad Educativa
                $check_user = $this->login_model->login_user($username,$password);
                //print_r($check_user);
                if($check_user != FALSE)
                {
                    //ASigna al array data el estado logueado, su id, su perfil(administrador, director), su nombre de usuario
                    $data = array(
                    'is_logued_in' 	=> 		TRUE,
                    'codigo' 	    => 		$check_user->especialista_codigo,
                    'perfil'		=>		'e',
                    'carnet' 		=> 		$check_user->especialista_carnet,
                    'nombre'         =>        $check_user->especialista_name
                    );
                    //con el array	crea las 4 variables de sesion
                    $this->session->set_userdata($data);
                    //redirecciona al Metodo Index del Controlador Login
                    $this->index();
                    //echo "Exito";
                    //print_r($data);
                }else{
                    //print($this->input->post('username'));
                    redirect(base_url().'login');
                }
            }else{
                //print("El token es: ".$this->input->post('token'));
                redirect(base_url().'login');
            }
        }
    
        public function token()
        {
            $token = md5(uniqid(rand(),true));
            $this->session->set_userdata('token',$token);
            return $token;
        }
        public function logout()
        {
            $this->session->sess_destroy();
            redirect(base_url().'login/');
        }
    }

/* End of file Login.php */

?>