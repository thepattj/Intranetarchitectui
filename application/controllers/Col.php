<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Col extends CI_Controller {

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
	public function AMP021209PQ3(){
		$namesta = "AUTOSERVICIO MANZANILLO PUERTO";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}
	public function GOD070315UM6(){
		$namesta = "GRUPO OCCIDENTAL DE COMBUSTIBLES";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}
	/* FUNCIONES DE PERMISOS DE CRE */
	public function PL5870(){
		$pl = "PL/5870";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL5872(){
		$pl = "PL/5872";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL5874(){
		$pl = "PL/5874";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL5875(){
		$pl = "PL/5875";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL6006(){
		$pl = "PL/6006";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL13090(){
		$pl = "PL/13090";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL23509(){
		$pl = "PL/23509";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
}
