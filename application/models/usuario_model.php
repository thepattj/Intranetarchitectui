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

		$this->db->select('idDpto, nombre');
		$this->db->where('user', $usern);
		$this->db->where('psw',$pasw);
		$this->db->from('usuario');

		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result_array();
		}else{
			return false;
		}
		
		/* 
		//return $this->db->get('idDpto'); NOS DEVOLVERIA UNA FILA PORQUE VA A EXISTIR
		$rsql = $this->db->get('usuario');
		if($rsql->num_rows()>0){
			return $rsql->result_array();
		}else{
			return false;
		} */


		//$this->db->
	}
}

?>