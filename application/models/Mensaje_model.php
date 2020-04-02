<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Mensaje_model extends CI_Model {
    public function __construct() {
    	parent::__construct();
    }

    public function guardarUsuario($datos){
        $data = $datos;
        $this->db->where('user_name', $data['user_name']);
        $this->db->where('user_fono', $data['user_fono']);        
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
    public function guardarPregunta($datos){
        $this->db->insert('preguntas',$datos);
        $mensaje_codigo = $datos['pregunta_codigo'];
        return $mensaje_codigo;
    }
    public function guardarRespuesta($datos,$pregunta_categoria){
        $this->db->insert('respuestas',$datos);        
        $respuesta_codigo = $datos['respuesta_codigo'];
        $this->db->set('pregunta_ok', TRUE);
        $this->db->set('pregunta_categoria', $pregunta_categoria);
        $this->db->where('pregunta_codigo', $datos['respuesta_pregunta_codigo']);
        $this->db->update('preguntas');
        return $respuesta_codigo;
    }



    public function obtCodigo($tabla, $id){
        $this->db->where('preunta_id', $id);
        
        return $this->db->get($tabla)->row->pregunta_codigo;
        
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
        $this->db->where('pregunta_ok', FALSE);
        $this->db->order_by('pregunta_date', 'desc');
        return $this->db->get('preguntas')->result();
    }
    public function getRespondidas(){    
        $this->db->from('preguntas p');
        $this->db->join('respuestas r', 'p.pregunta_codigo=r.respuesta_pregunta_codigo');
        $this->db->where('p.pregunta_ok', TRUE);
        $this->db->limit(2);
        $this->db->order_by('r.respuesta_date', 'desc');
        return $this->db->get()->result();
    }

}

/* End of file Mensaje_model.php */


?>