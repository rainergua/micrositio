<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Mensaje_model extends CI_Model {
    public function __construct() {
    	parent::__construct();
    }
    public function getRecientes(){
        
        $this->db->where('pregunta_categoria !=', 'frecuente');
        $this->db->order_by('pregunta_date', 'desc');
        return $this->db->get('preguntas', 3)->result();
    }
    public function getFrecuentes(){
        $this->db->where('pregunta_categoria', 'frecuente');
        $this->db->order_by('pregunta_date', 'desc');
        return $this->db->get('preguntas', 3)->result();
    }
    public function guardarUsuario($datos){
        //Para uso con PDO_driver postgres
        //$id= $this->db->insert_id('public."MyTable_MyTableId_seq"');
        $this->db->insert('users',$datos);
        $user_id = $this->db->insert_id();
        if($user_id>0){
			return $user_id;
		}else{
			return FALSE;
		}
    }
    public function guardarPregunta($datos){
        //Para uso con PDO_driver postgres
        //$id= $this->db->insert_id('public."MyTable_MyTableId_seq"');
        $this->db->insert('preguntas',$datos);
        $mensaje_id = $this->db->insert_id($datos);
        if($mensaje_id>0){
			return $mensaje_id;
		}else{
			return FALSE;
		}
    }
    public function getPreguntas(){
        $this->db->where('pregunta_ok', FALSE);
        $this->db->order_by('pregunta_date', 'desc');
        return $this->db->get('preguntas')->result();
    }

    

}

/* End of file Mensaje_model.php */


?>