<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facturas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('subirfactura_model');
		//$this->load->helper();
	}

	public function index(){
		//$data['correoC'] = "";
		$this->load->view('factura/header.php');
		$this->load->view('factura/facturar.php');
		$this->load->view('factura/footer.php');
	}

	public function cargar_archivo(){
		print_r($_FILES); // muestra los datos de los tres archvios que se estan subiendo

		$this->load->library("upload");
		$config = array(
			"upload_path"=>"../documentPortal/Noviembre2020",
			"allowed_types"=>"pdf"
		);
		$_FILES['archivosF']['name'] = $_FILES['archivosF']['name'][1]
		$_FILES['archivosF']['type'] = $_FILES['archivosF']['type'][1]
		$_FILES['archivosF']['tmp_name'] = $_FILES['archivosF']['tmp_name'][1]
		$_FILES['archivosF']['error'] = $_FILES['archivosF']['error'][1]
		$_FILES['archivosF']['size'] = $_FILES['archivosF']['size'][1]
		$this->upload->initialize($config);
		if($this->upload->do_upload('archivo')){
			$data = array("upload_data" => $this->upload->data());
			$datos = array(
				"name" => $data['upload_data']['file_name'],
			);
			if($this->subirfactura_model->cargafactigual($datos)){
				echo "Registro guardado";
			}else{
				echo "Error al intentar guardar la informacion";
			}
		}else{
			echo $this->upload->display_errors();
		}
	}

}