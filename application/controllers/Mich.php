<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mich extends CI_Controller {

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
	public function ASM930428DK7(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/mich/ASM930428DK7');
		$this->load->view('estacion/footer');
	}
	public function CCC161215DW6(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/mich/CCC161215DW6');
		$this->load->view('estacion/footer');
	}
	public function EAN000713F4A(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/mich/EAN000713F4A');
		$this->load->view('estacion/footer');
	}
	public function GEB080530BG0(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/mich/GEB080530BG0');
		$this->load->view('estacion/footer');
	}
	public function HUCE560604LR9(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/mich/HUCE560604LR9');
		$this->load->view('estacion/footer');
	}
	public function KALL590825E76(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/mich/KALL590825E76');
		$this->load->view('estacion/footer');
	}
	public function SSL110707RZ5(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/mich/SSL110707RZ5');
		$this->load->view('estacion/footer');
	}
	

	/* FUNCIONES DE PERMISOS DE CRE */
	public function PL1743(){}
	public function PL1745(){}
}
