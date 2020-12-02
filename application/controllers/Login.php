<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('usuario_model');
		$this->load->helper('mihelper');
	}

	public function index(){
		$usuario = $this->input->post('username');
		$pass = $this->input->post('password');		

		$data['user'] = $this->usuario_model->login($usuario,$pass);
		$numdpto = $data['user'][0]['idDpto'];
		$nameuser = $data['user'][0]['nombre'];
		$numuser = $data['user'][0]['idUsuario'];

		$this->session->set_userdata('numeroU', $numdpto);
		$this->session->set_userdata('nombreU', $nameuser);
		$this->session->set_userdata('idU', $numuser);
		$data['nombreU'] = $nameuser;

		if($numdpto == '1'){ //ANALISIS DE RIESGO
			//echo $numuser;
			redirect('inicio/analisis');
		}if($numdpto == '2'){ //CLIENTES!
			//echo $numuser." - NOMBRE USUARIO".$nameuser;
			redirect('../inicio/cliente');
		}if($numdpto == '3'){ //CONTRALORIA
			//print_r($numuser." - NOMBRE USUARIO".$nameuser);
			//header("localtion".base_url()."Inicio/contraloria");
			//redirect('../inicio/contraloria');
			$this->load->view('menu/header');
		    $this->load->view('menu/contador',$data);
		    $this->load->view('menu/footer');
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
