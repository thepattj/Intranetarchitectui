<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class estacionescl_model extends CI_Model{
	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function busqpluser($idUser){
		//echo "NUMEROUSER=>".$idUser;

		$this->db->select('cl.idCESH,cl.razonSocial,cl.numeroEst');
		$this->db->from('cliente cl');
		$this->db->join('permiso per', 'per.idCESH = cl.idCESH');
		$this->db->where('per.idUsuario', $idUser);
		$query = $this->db->get();

		//SELECT NORMAL
		/*$this->db->select('idCESH');
		$this->db->where('idUsuario', $idUser);
		$query = $this->db->get('permiso');*/

		if($query->num_rows()>0){
			return $query->result_array();
		}else{
			return false;
		}
		/*if($query->num_rows()>0){
			$row = $query->row_array();
			$i = $i+1;
			return $row;
		}else{
			return "No existen resultados";
		}*/
	}
}

?>
