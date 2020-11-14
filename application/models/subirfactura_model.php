<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class subirFactura_model extends CI_Model{
	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function cargafactigual($data = array()){
		echo  " DENTRO DEL MODEL:::falta dividir NOMBRE DEL ARCHVIO: =>".$data[name];

		/* idgenFactura => name primera parte
		estatus => cargada
		formadPago => NULL
		correoCC => correos
		fechaCarga => de php
		fechaAct => sera la fecha de descarga NULL
		fechaPago => hasta que finalice lo demas vendria por update NULL
		rutaArchivo => direccion+name
		idCESH => name segunda parte */

		

		//$insert = $this->db->insert('files',$data);
		//return $insert?true:false;

		/* $this->db->select('idDpto');
		$this->db->where('user', $usern);
		$this->db->where('psw',$pasw);
		$this->db->from('usuario');

		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result_array();
		}else{
			return false;
		} */
	}
}

?>