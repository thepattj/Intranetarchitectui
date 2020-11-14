<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nl extends CI_Controller {

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
	public function ASO790220LZ1(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/nl/ASO790220LZ1');
		$this->load->view('estacion/footer');
	}
	public function EDO110202883(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/nl/EDO110202883');
		$this->load->view('estacion/footer');
	}
	public function OZA010405F60(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/nl/OZA010405F60');
		$this->load->view('estacion/footer');
	}
	public function SCI941114QF9(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/nl/SCI941114QF9');
		$this->load->view('estacion/footer');
	}
		

	/* FUNCIONES DE PERMISOS DE CRE */
	public function PL1743(){}
	public function PL1745(){}
}
