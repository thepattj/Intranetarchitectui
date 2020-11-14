<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('usuario_model');
		$this->load->library('session');
		//$this->load->helper();
	}

	public function index(){
		$this->load->view('login/login'); //Es la carga inicial

		if(isset($_POST['password'])){ //si existe esto
			//echo "SIRVE PARA SABER SI EL PASS ESTA LLENO";
			$data['duser'] = $this->usuario_model->login($_POST['username'], $_POST['password']);
			//$this->usuario_model->login($_POST['username'], $_POST['password']);
			$numuser = $data['duser'][0]['idDpto'];
			$nameuser = $data['duser'][0]['nombre'];
			//print_r($numuser." nombre ".$nameuser); //ya da el valor

			// NO SE PUEDE ENVIAR POR MEDIO DE VARIBLES LOS DATOS QUE SE NECESITAN SI NO ENVIA COMO UN GET EN EL PHP NORMAL
			$this->session->set_userdata('numeroU', $numuser);
			$this->session->set_userdata('nombreU', $nameuser);

			// destory session
	    // $this->session->sess_destroy();

			//$this->session->set_flashdata('numeroU', $numuser); //FLASH DATA
			//$this->session->set_flashdata('nombreU', $nameuser); //FLASH DATA

			if($numuser == '1'){ //ANALISIS DE RIESGO
				//echo $numuser;
				redirect('inicio/analisis');
			}if($numuser == '2'){ //CLIENTES!
				//echo $numuser;
				redirect('inicio/cliente');
			}if($numuser == '3'){ //CONTRALORIA
				redirect('../inicio/contraloria');
			}if($numuser == '4'){ //EVIS
				redirect('inicio/Social');
			}if($numuser == '5'){ //VEHICULAR
				redirect('inicio/Vehicular');
			}if($numuser == '6'){ //IP
				redirect('inicio/Preventivo');
			}if($numuser == '7'){ //JURIDICO
				redirect('inicio/Juridico');
			}if($numuser == '8'){ //MIA
				redirect('inicio/Ambiental');
			}if($numuser == '9'){ //PRE
				redirect('inicio/Protocolo');
			}if($numuser == '10'){ //SASISOPA
				redirect('inicio/Sasisopa');
			}if($numuser == '11'){ //STPS
				redirect('inicio/Stps');
			}if($numuser == '12'){ //LF, COA
				redirect('inicio/Atmosferico');
			}if($numuser == '13'){ // YO
				redirect('inicio/Sistemas');
			}if($numuser == '14'){ // JEFES
				redirect('inicio/Gerencias');
			}if($numuser == '15'){ // LICS
				redirect('inicio/Directivos');
			}if($numuser == '16'){ //LEGASPI
				redirect('inicio/Comercial');
			}else{
				echo "no existe";
				//cambiar por un modal
				redirect('login');
			}

		}
	}
	/*public function restablecer(){
		$this->load->view('login/restablecer');
	}*/
}
