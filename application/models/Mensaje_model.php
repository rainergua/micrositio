<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Mensaje_model extends CI_Model {
    public function __construct() {
    	parent::__construct();
    }

    public function guardarUsuario($datos){
        //$data = $datos;
        $this->db->where('user_name', $datos['user_name']);
        $this->db->where('user_fono', $datos['user_fono']);        
        $query = $this->db->get('users');
        if($query->num_rows() == 0){
            $this->db->insert('users', $datos);
            return $datos['user_codigo'];
        }elseif($query->num_rows()==1){
            return $query->row()->user_codigo;
        }else{
            return FALSE;
        }
    }
    public function guardarWap($datos){
        $this->db->insert('whatsapps',$datos);
        return $datos['wap_codigo'];
    }

    public function guardarPregunta($datos){
        $this->db->insert('preguntas', $datos);
        return $datos['pregunta_codigo'];
    }
    public function guardarRespuesta($datos){
        $this->db->insert('respuestas', $datos);        
        return $datos['respuesta_codigo'];
    }
    public function actualizaPregunta($datos, $pregunta){
        $this->db->where('pregunta_codigo', $pregunta);
        $this->db->update('preguntas', $datos);
        return $pregunta;
    }
    public function getUsuario( $codigo){
        $this->db->where('pregunta_codigo', $codigo);       
        $user_codigo = $this->db->get('preguntas')->row()->pregunta_user_codigo;
        $this->db->where('user_codigo', $user_codigo);
        return $this->db->get('users')->row();
    }

    public function obtCodigo($tabla, $id){
        $this->db->where('pregunta_id', $id);       
        return $this->db->get($tabla)->row()->pregunta_codigo;       
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
    public function getPreguntas(){
        $this->db->from('preguntas p');
        $this->db->join('users u', 'p.pregunta_user_codigo=u.user_codigo');
        $this->db->where('p.pregunta_ok', FALSE);
        $this->db->order_by('pregunta_date');
        $this->db->distinct();
        return $this->db->get()->result();

    }
    public function getRespondidas(){    
        $this->db->from('preguntas p');
        $this->db->join('respuestas r', 'p.pregunta_codigo=r.respuesta_pregunta_codigo');
        $this->db->where('p.pregunta_ok', TRUE);
        $this->db->limit(3);
        $this->db->order_by('r.respuesta_date', 'desc');
        return $this->db->get()->result();
    }
    public function getPregUsuario(){
        $this->db->select('pregunta_codigo, pregunta_cont, user_name, user_ocupacion, user_edad');
        $this->db->from('preguntas p');
        $this->db->join('users u', 'p.pregunta_user_codigo=u.user_codigo');
        $this->db->where('p.pregunta_ok', FALSE);
        $this->db->order_by('pregunta_date');
        $this->db->distinct();
        return $this->db->get()->result();
    }
}

/* End of file Mensaje_model.php */


?>