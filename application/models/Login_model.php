<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    public function __construct() {
		parent::__construct();
	}
    public function login_user($username,$password)
	{
        $this->db->where('especialista_carnet',$username);
    	$this->db->where('especialista_codigo',$password);
    	$query = $this->db->get('especialistas');
    	if($query->num_rows() == 1)
    	{
    		return $query->row();
    	}else{
    	    return FALSE;
    	}
    }
    

}

/* End of file Login_model.php */


?>