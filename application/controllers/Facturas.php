<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facturas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('subirfactura_model');
		//$this->load->helper();
	}

	public function index(){
		$nameU = $this->session->userdata('nombreU');
		//$data['correoC'] = "";
		$this->load->view('factura/header.php');
		$this->load->view('factura/facturar.php', compact("nameU"));
		$this->load->view('factura/footer.php');
	}

	public function cargar_archivo(){
		//print_r($_FILES); // muestra los datos de los tres archvios que se estan subiendo
		$j= 0;

		$mes = date('m');
		$year = date('Y');

		if($mes == 01){
			$mes = 'Enero';
		}if($mes == 02){
			$mes = 'Febrero';
		}if($mes == 03){
			$mes = 'Marzo';
		}if($mes == 04){
			$mes = 'Abril';
		}if($mes == 05){
			$mes = 'Mayo';
		}if($mes == 06){
			$mes = 'Junio';
		}if($mes == 07){
			$mes = 'Julio';
		}if($mes == 08){
			$mes = 'Agosto';
		}if($mes == 09){
			$mes = 'Septiembre';
		}if($mes == 10){
			$mes = 'Octubre';
		}if($mes == 11){
			$mes = 'Noviembre';
		}if($mes == 12){
			$mes = 'Diciembre';
		}

		$direccion="documentPortal/".$mes.$year;

		$config = array(
			"upload_path"=>"../documentPortal/".$mes.$year,
			"allowed_types"=>"zip",
			"max_size"=>"2048000"
		);
		$variblefiles = $_FILES;
		$files = count($_FILES['archivosF']['name']);
		//print_r($files); comprobacion de documentos
		for($i=0; $i < $files; $i++){
			//$this->load->library("upload", $config); //siempre 1ra
			$this->load->library("upload");
			$_FILES['archivosF']['name'] = $variblefiles['archivosF']['name'][$i];
			$_FILES['archivosF']['type'] = $variblefiles['archivosF']['type'][$i];
			$_FILES['archivosF']['tmp_name'] = $variblefiles['archivosF']['tmp_name'][$i];
			$_FILES['archivosF']['error'] = $variblefiles['archivosF']['error'][$i];
			$_FILES['archivosF']['size'] = $variblefiles['archivosF']['size'][$i];

			$this->upload->initialize($config);
			if($this->upload->do_upload('archivosF')){
				$correoC = $this->input->post('grupoSelect');
				$data = array("upload_data" => $this->upload->data());
				$datos = array(
					"nombre" => $data['upload_data']['file_name'],
					"correos" => $correoC,
					"direccion" =>$direccion,
				);
				if($this->subirfactura_model->cargafactigual($datos)){
					//echo " Registro guardado";
					$j = $j+1;
					//print_r($datos);
					//redirect(base_url()."facturas");
				}else{
					echo "Error al intentar guardar la informacion";
					//print_r($_FILES); muestra los datos del archvio
					//print_r($datos);
				}
			}else{
				echo $this->upload->display_errors();
			}
		}

		if($j == $files){
			//echo "valor de files".$files."valor de J".$j;
			redirect(base_url()."facturas");//funciona

			/*$nameU = $this->session->userdata('nombreU');
			$modal = "Cargado";
			
			$this->load->view('factura/header.php');
			$this->load->view('factura/facturar.php', compact("nameU"));
			$this->load->view('factura/footer.php');*///tambien funciona pero crga dentro de esta funcion
		}
	}

}
