<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function __construct(){
		parent::__construct();
		$this->load->model('usuario_model');
		//$this->load->helper();
	}

	public function index(){
		if(isset($_POST['password'])){
			$data['user'] = $this->usuario_model->login($_POST['username'], $_POST['password']);
			$numuser = $data['user'][0]['idDpto'];
			//$otrnum = $data['user'][0]['idDpto'];
			//print_r($numuser); //ya da el valor
			
			if($numuser == '1'){
				//echo $numuser;
				redirect('inicio/analisis');
			}if($numuser == '2'){
				//echo $numuser;
				redirect('inicio/cliente');
			}if($numuser == '3'){
				//echo $numuser;
				redirect('../inicio/contraloria', $numuser);
			}if($numuser == '4'){
				redirect('inicio/Social');
			}if($numuser == '5'){
				redirect('inicio/Vehicular');
			}if($numuser == '6'){
				redirect('inicio/Preventivo');
			}if($numuser == '7'){
				redirect('inicio/Juridico');
			}if($numuser == '8'){
				redirect('inicio/Ambiental');
			}if($numuser == '9'){
				redirect('inicio/Protocolo');
			}if($numuser == '10'){
				redirect('inicio/Sasisopa');
			}if($numuser == '11'){
				redirect('inicio/Stps');
			}if($numuser == '12'){
				redirect('inicio/Atmosferico');
			}if($numuser == '13'){
				redirect('inicio/Sistemas');
			}if($numuser == '14'){
				redirect('inicio/Gerencias');
			}if($numuser == '15'){
				redirect('inicio/Directivos');
			}if($numuser == '16'){
				redirect('inicio/Comercial');
			}else{
				echo "no existe";
				//cambiar por un modal
				redirect('login');
			}
			/*$this->load->model('usuario_model');
			if( $this->usuario_model->login($_POST['username'], $_POST['password'])){
				
			}else{
				redirect('login');
			}*/
		}
		$this->load->view('login/login');
	}
	/*public function restablecer(){
		$this->load->view('login/restablecer');
	}*/
}
