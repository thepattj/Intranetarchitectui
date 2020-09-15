<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario_model extends CI_Model{
	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function login($usern, $pasw){
		//$data = $this->db->get_where('usuario',array('user'=>$usern,'psw'=>$pasw));
		//return $data
		
		$this->db->where('user', $usern);
		$this->db->where('psw',$pasw);
		//return $this->db->get('idDpto'); NOS DEVOLVERIA UNA FILA PORQUE VA A EXISTIR
		$rsql = $this->db->get('usuario');
		if($rsql->num_rows()>0){
			return true;
		}else{
			return false;
		}
		//$this->db->
	}
}

?>