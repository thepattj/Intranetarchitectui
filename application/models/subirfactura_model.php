<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class subirFactura_model extends CI_Model{
	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function cargafactigual($ddato){
		//echo "NOMBRE DEL ARCHVIO: =>".$ddato[nombre];
		$nombrearch = $ddato['nombre']; // variable para separar nombre de archivo
		$partes = explode("_", $nombrearch);
		$bid = $partes[2];
		$parteid = explode(".", $bid);
		$bid = $parteid[0];
		$length = mb_strlen($bid);
		$bid1 = substr($bid, 0,2);
		$bid2 = substr($bid, 2,$length);
		$bid = $bid1."/".$bid2;
		
		
		$nombreid = $partes[1]; //idFACTURA
		$fecha = date('Y-m-d');
		//echo $bid;

		$this->db->select('idCESH');
		$this->db->from('cliente');
		$this->db->like('idCESH',$bid);
		$query = $this->db->get();
		//echo $query->num_rows();
		foreach ($query->result() as $row) {
			$idPL = $row->idCESH;
		}


		/* idgenFactura => name primera parte
		estatus => cargada
		formadPago => NULL
		correoCC => correos
		fechaCarga => de php
		fechaAct => sera la fecha de descarga NULL
		fechaPago => hasta que finalice lo demas vendria por update NULL
		rutaArchivo => direccion+name
		idCESH => name segunda parte */


		$sql = "INSERT INTO factura (idgenFactura, estatus, correoCC, fechaCarga, rutaArchivo, idCESH) VALUES ('".$nombreid."','CARGADA','".$ddato['correos']."','".$fecha."','".$ddato['direccion']."/".$ddato['nombre']."','".$idPL."')";
		//echo $sql;
		$this->db->query($sql);
		return TRUE;
	}

	public function busfactura($idCESH){
		$this->db->select('estatus, rutaArchivo, fechaCarga');
		$this->db->from('factura');
		//$this->db->like('idCESH', );
		$this->db->where('idCESH', $idCESH);
		$query = $this->db->get();

		if($query->num_rows()>0){
			return $query->result_array();
		}else{
			$result = "No existen resultados";
			return $result;
		}
	}
}

?>
