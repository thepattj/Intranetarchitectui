<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dgo extends CI_Controller {

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
	public function ASE990208EWA(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/dgo/ASE990208EWA');
		$this->load->view('estacion/footer');
	}
	public function ASS010124QRA(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/dgo/ASS010124QRA');
		$this->load->view('estacion/footer');
	}
	public function ASS950620424(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/dgo/ASS950620424');
		$this->load->view('estacion/footer');
	}
	public function MUAJ280724LKA(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/dgo/MUAJ280724LKA');
		$this->load->view('estacion/footer');
	}
	public function SAP0009025S8(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/dgo/SAP0009025S8');
		$this->load->view('estacion/footer');
	}

	/* FUNCIONES DE PERMISOS DE CRE */
	public function PL921(){
		$pl = "PL/921";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL856(){
		$pl = "PL/856";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL886(){
		$pl = "PL/886";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL21610(){
		$pl = "PL/21610";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL1391(){
		$pl = "PL/1391";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
}
