<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gto extends CI_Controller {

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
		$this->load->view('estacion/gto/ASM930428DK7');
		$this->load->view('estacion/footer');
	}
	public function GGO0209238J1(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/gto/GGO0209238J1');
		$this->load->view('estacion/footer');
	}
	public function GODO640323NH3(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/gto/GODO640323NH3');
		$this->load->view('estacion/footer');
	}
	public function GSC941006TZ1(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/gto/GSC941006TZ1');
		$this->load->view('estacion/footer');
	}
	public function ROFD9502163B3(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/gto/ROFD9502163B3');
		$this->load->view('estacion/footer');
	}
	public function SAP090603TE4(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/gto/SAP090603TE4');
		$this->load->view('estacion/footer');
	}
	public function SBC1102175LA(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/gto/SBC1102175LA');
		$this->load->view('estacion/footer');
	}
	public function SIN000117E55(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/gto/SIN000117E55');
		$this->load->view('estacion/footer');
	}
	public function SIT000215655(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/gto/SIT000215655');
		$this->load->view('estacion/footer');
	}
	public function SSO050829CEA(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/gto/SSO050829CEA');
		$this->load->view('estacion/footer');
	}

	/* FUNCIONES DE PERMISOS DE CRE */
	public function PL2054(){
		$pl = "PL/2054";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL5713(){
		$pl = "PL/5713";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL5727(){
		$pl = "PL/5727";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL5829(){
		$pl = "PL/5829";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL9645(){
		$pl = "PL/9645";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL4668(){
		$pl = "PL/4668";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL4673(){
		$pl = "PL/4673";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL18790(){
		$pl = "PL/18790";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL21223(){
		$pl = "PL/21223";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL1154(){
		$pl = "PL/1154";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL10737(){
		$pl = "PL/10737";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL1486(){
		$pl = "PL/1486";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL6449(){
		$pl = "PL/6449";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL6451(){
		$pl = "PL/6451";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL6453(){
		$pl = "PL/6453";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL4702(){
		$pl = "PL/4702";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL4226(){
		$pl = "PL4226";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL9596(){
		$pl = "PL/9596";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL9725(){
		$pl = "PL/9725";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL20069(){
		$pl = "PL/20069";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
}
