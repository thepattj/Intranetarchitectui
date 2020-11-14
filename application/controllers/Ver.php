<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ver extends CI_Controller {

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
	public function GCA930127KF0(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/ver/GCA930127KF0');
		$this->load->view('estacion/footer');
	}
	public function JUZS231230382(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/ver/JUZS231230382');
		$this->load->view('estacion/footer');
	}
	public function NARI370221NI1(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/ver/NARI370221NI1');
		$this->load->view('estacion/footer');
	}
	public function PEGF591216R8(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/ver/PEGF591216R8');
		$this->load->view('estacion/footer');
	}


	/* FUNCIONES DE PERMISOS DE CRE */
	public function PL1743(){}
	public function PL1745(){}
}
