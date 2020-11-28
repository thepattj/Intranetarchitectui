	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edomex extends CI_Controller {

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
	public function AAAM530924CG6(){
		$namesta = "MELITON ALCANTARA ANDRADE";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}
	public function GQL941129CY5(){
		$namesta = "GRUPO QL";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}
	public function GTE941124DN6(){
		$namesta = "GASOLINERA TEOLOYUCAN";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}
	public function GTO971006M5A(){
		$namesta = "GRUPO TOREMEX";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}
	public function GTR020814DD8(){
		$namesta = "GRUPO TREHER";
		$nostate = 15;
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta', 'nostate'));
		$this->load->view('estacion/footer');
	}
	public function KHI150611K36(){
		$namesta = "KAIZEN HIDROCARBUROS COMPANY";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}
	public function SAC9606107B4(){
		$namesta = "SERVICIO ACULCO";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}
	public function SHU041209DU4(){
		$namesta = "SERVICIO HUEHUETOCA";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}
	public function SSA050705SC2(){
		$namesta = "SUPER SERVICIO AURORA";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}
	public function SSA110425M79(){
		$namesta = "SUPER SERVICIO AILES";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}

	/* FUNCIONES DE PERMISOS DE CRE */
	public function PL4338(){
		$pl = "PL/4338";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL2209(){
		$pl = "PL/2209";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL2616(){
		$pl = "PL/2616";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL5210(){
		$pl = "PL/5210";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL19259(){
		$pl = "PL/19259";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL22402(){
		$pl = "PL/22402";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL8659(){
		$pl = "PL/8659";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL2966(){
		$pl = "PL/2966";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL3086(){
		$pl = "PL/3086";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL12856(){
		$pl = "PL/12856";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL19215(){
		$pl = "PL/19215";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
}
