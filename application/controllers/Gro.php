<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gro extends CI_Controller {

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
	public function CSF970110GP0(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/gro/CSF970110GP0');
		$this->load->view('estacion/footer');
	}
	public function ESA010626556(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/gro/ESA010626556');
		$this->load->view('estacion/footer');
	}
	public function ESS990811AZ3(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/gro/ESS990811AZ3');
		$this->load->view('estacion/footer');
	}
	public function SAD130403LE3(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/gro/SAD130403LE3');
		$this->load->view('estacion/footer');
	}
	public function SCO0204088SA(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/gro/SCO0204088SA');
		$this->load->view('estacion/footer');
	}
	public function SMA081016LR7(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/gro/SMA081016LR7');
		$this->load->view('estacion/footer');
	}
	public function SOM1011085Z1(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/gro/SOM1011085Z1');
		$this->load->view('estacion/footer');
	}

	/* FUNCIONES DE PERMISOS DE CRE */
	public function PL8448(){
		$pl = "PL/8448";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL8450(){
		$pl = "PL/8450";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL20294(){
		$pl = "PL/20294";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL8438(){
		$pl = "PL/8438";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL8441(){
		$pl = "PL/8441";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL8869(){
		$pl = "PL/8869";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL8436(){
		$pl = "PL/8436";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL8429(){
		$pl = "PL/8429";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL8431(){
		$pl = "PL/8431";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL8424(){
		$pl = "PL/8424";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL8420(){
		$pl = "PL/8420";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL8419(){
		$pl = "PL/8419";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
}
