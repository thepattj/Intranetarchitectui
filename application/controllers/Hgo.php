<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hgo extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		echo "PRUEBA DE 22!";
	}
	public function CPI9001102R9(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/hgo/CPI9001102R9');
		$this->load->view('estacion/footer');
	}
	public function GGT030211DL1(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/hgo/GGT030211DL1');
		$this->load->view('estacion/footer');
	}
	public function GTR020814DD8(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/hgo/GTR020814DD8');
		$this->load->view('estacion/footer');
	}
	public function SIX080818SYA(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/hgo/SIX080818SYA');
		$this->load->view('estacion/footer');
	}
	public function SGA180612VD4(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/hgo/SGA180612VD4');
		$this->load->view('estacion/footer');
	}
	

	/* FUNCIONES DE PERMISOS DE CRE */
	public function PL1743(){}
	public function PL1745(){}
}
