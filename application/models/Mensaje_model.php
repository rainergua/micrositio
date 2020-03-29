<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Mensaje_model extends CI_Model {
    public function __construct() {
    	parent::__construct();
    }
    public function guarda_mensaje(datos){
        if($this->db->insert("mensaje", $data)){
			return TRUE;
		}else{
			return FALSE;
		}
    }

    

}

/* End of file Mensaje_model.php */


?>