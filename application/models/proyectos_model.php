<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class proyectos_model extends CI_Model{
	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function busiguala($idCESH){
		//echo "NUMEROUSER=>".$idUser;

		$this->db->select('fechaInicio, fechaTermino, estatus');
		$this->db->from('proyectos');
		$this->db->like('idCESH', $idCESH);
		$this->db->where('idServicio', 1);
		$query = $this->db->get();

		if($query->num_rows()>0){
			return $query->result_array();
		}else{
			return false;
		}
		//$query = $this->db->get();
		//return $this->db->get(); //para regresar valores y usarlos en el controller
	}
}

?>
