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
			$numdpto = $data['duser'][0]['idDpto'];
			$nameuser = $data['duser'][0]['nombre'];
			$numuser = $data['duser'][0]['idUsuario'];
			//print_r($numuser." nombre ".$nameuser); //ya da el valor

			// NO SE PUEDE ENVIAR POR MEDIO DE VARIBLES LOS DATOS QUE SE NECESITAN SI NO ENVIA COMO UN GET EN EL PHP NORMAL
			$this->session->set_userdata('numeroU', $numdpto);
			$this->session->set_userdata('nombreU', $nameuser);
			$this->session->set_userdata('idU', $numuser);

			// destory session
	    // $this->session->sess_destroy();

			//$this->session->set_flashdata('numeroU', $numuser); //FLASH DATA
			//$this->session->set_flashdata('nombreU', $nameuser); //FLASH DATA

			if($numdpto == '1'){ //ANALISIS DE RIESGO
				//echo $numuser;
				redirect('inicio/analisis');
			}if($numdpto == '2'){ //CLIENTES!
				//echo $numuser." - NOMBRE USUARIO".$nameuser;
				redirect('../inicio/cliente');
			}if($numdpto == '3'){ //CONTRALORIA
				//print_r($numuser." - NOMBRE USUARIO".$nameuser);
				redirect('../inicio/contraloria');
			}if($numdpto == '4'){ //EVIS
				redirect('inicio/Social');
			}if($numdpto == '5'){ //VEHICULAR
				redirect('inicio/Vehicular');
			}if($numdpto == '6'){ //IP
				redirect('inicio/Preventivo');
			}if($numdpto == '7'){ //JURIDICO
				redirect('inicio/Juridico');
			}if($numdpto == '8'){ //MIA
				redirect('inicio/Ambiental');
			}if($numdpto == '9'){ //PRE
				redirect('inicio/Protocolo');
			}if($numdpto == '10'){ //SASISOPA
				redirect('inicio/Sasisopa');
			}if($numdpto == '11'){ //STPS
				redirect('inicio/Stps');
			}if($numdpto == '12'){ //LF, COA
				redirect('inicio/Atmosferico');
			}if($numdpto == '13'){ // YO
				redirect('inicio/Sistemas');
			}if($numdpto == '14'){ // JEFES
				redirect('inicio/Gerencias');
			}if($numdpto == '15'){ // LICS
				redirect('inicio/Directivos');
			}if($numdpto == '16'){ //LEGASPI
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
	public function salir(){
		//echo"destory session";
	    $this->session->sess_destroy();
	    redirect(base_url());
	}
}
