<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ags extends CI_Controller {

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
	public function RFCSTA0522(){
		$namesta = "ESTACION ENERGAS";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}


	/* FUNCIONES DE PERMISOS DE CRE */
	public function PL0010(){
		$pl = "PL/0010";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
}
