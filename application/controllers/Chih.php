<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chih extends CI_Controller {

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
	public function AGN980316FJ5(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/chih/AGN980316FJ5');
		$this->load->view('estacion/footer');
	}
	//TODAS LAS AUTOGAS DE LA FRONTERA
	public function AFR1302216L1(){
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/chih/AFR1302216L1', compact('nameU'));
		$this->load->view('estacion/footer');
	}
	public function DCL880518UG2(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/chih/DCL880518UG2');
		$this->load->view('estacion/footer');
	}
	public function DGM880621FU5(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/chih/DGM880621FU5');
		$this->load->view('estacion/footer');
	}
	public function DIRL580912V96(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/chih/DIRL580912V96');
		$this->load->view('estacion/footer');
	}
	public function EST980316F45(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/chih/EST980316F45');
		$this->load->view('estacion/footer');
	}
	public function GGO0209238J1(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/chih/GGO0209238J1');
		$this->load->view('estacion/footer');
	}
	public function GVA951010DW1(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/chih/GVA951010DW1');
		$this->load->view('estacion/footer');
	}
	public function ORA0507116F3(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/chih/ORA0507116F3');
		$this->load->view('estacion/footer');
	}
	public function PET171229S93(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/chih/PET171229S93');
		$this->load->view('estacion/footer');
	}
	public function RAMJ500311A56(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/chih/RAMJ500311A56');
		$this->load->view('estacion/footer');
	}
	public function SAL01072046A(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/chih/SAL01072046A');
		$this->load->view('estacion/footer');
	}
	public function SAN010720DAA(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/chih/SAN010720DAA');
		$this->load->view('estacion/footer');
	}
	public function SCA920721AV1(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/chih/SCA920721AV1');
		$this->load->view('estacion/footer');
	}
	public function SCR961126MD9(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/chih/SCR961126MD9');
		$this->load->view('estacion/footer');
	}
	public function SEX9204017Q6(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/chih/SEX9204017Q6');
		$this->load->view('estacion/footer');
	}
	public function SGA9211115D0(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/chih/SGA9211115D0');
		$this->load->view('estacion/footer');
	}
	public function SIA930628530(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/chih/SIA930628530');
		$this->load->view('estacion/footer');
	}
	public function SIGG330219EI0(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/chih/SIGG330219EI0');
		$this->load->view('estacion/footer');
	}
	public function SIM000324HN9(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/chih/SIM000324HN9');
		$this->load->view('estacion/footer');
	}
	public function SJA880518PRA(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/chih/SJA880518PRA');
		$this->load->view('estacion/footer');
	}
	public function SLV020207676(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/chih/SLV020207676');
		$this->load->view('estacion/footer');
	}
	public function SNM981008336(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/chih/SNM981008336');
		$this->load->view('estacion/footer');
	}
	public function SNR960621UZA(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/chih/SNR960621UZA');
		$this->load->view('estacion/footer');
	}
	public function SOA960322B57(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/chih/SOA960322B57');
		$this->load->view('estacion/footer');
	}
	public function SPE920721J33(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/chih/SPE920721J33');
		$this->load->view('estacion/footer');
	}
	public function SPS840928PE5(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/chih/SPS840928PE5');
		$this->load->view('estacion/footer');
	}
	public function STL000303B33(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/chih/STL000303B33');
		$this->load->view('estacion/footer');
	}
	public function SUR020207LTA(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/chih/SUR020207LTA');
		$this->load->view('estacion/footer');
	}


	/* FUNCIONES DE PERMISOS DE CRE */
	public function PL6389(){
		$pl = "PL/6389";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL1743(){
		$pl = "PL/1743";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL1745(){
		$pl = "PL/1745";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL13620(){
		$pl = "PL/13620";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL12840(){
		$pl = "PL/12840";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL12841(){
		$pl = "PL/12841";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL12842(){
		$pl = "PL/12842";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL12843(){
		$pl = "PL/12843";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL13074(){
		$pl = "PL/13074";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL7762(){
		$pl = "PL/7762";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL1744(){
		$pl = "PL/1744";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL830(){
		$pl = "PL/830";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL846(){
		$pl = "PL/846";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL847(){
		$pl = "PL/847";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL857(){
		$pl = "PL/857";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL858(){
		$pl = "PL/858";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL862(){
		$pl = "PL/862";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL870(){
		$pl = "PL/870";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL9444(){
		$pl = "PL/9444";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL2516(){
		$pl = "PL/2516";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL4580(){
		$pl = "PL/4580";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL11409(){
		$pl = "PL/11409";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL5809(){
		$pl = "PL/5809";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL7301(){
		$pl = "PL/7301";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL3326(){
		$pl = "PL/3326";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL3341(){
		$pl = "PL/3341";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL4616(){
		$pl = "PL/4616";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL5158(){
		$pl = "PL/5158";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL5791(){
		$pl = "PL/5791";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL5806(){
		$pl = "PL/5806";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL6550(){
		$pl = "PL/6550";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL6557(){
		$pl = "PL/6557";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL7738(){
		$pl = "PL/7738";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL3339(){
		$pl = "PL/3339";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL9406(){
		$pl = "PL/9406";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL9420(){
		$pl = "PL/9420";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL5821(){
		$pl = "PL/5821";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL5670(){
		$pl = "PL/5670";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL13624(){
		$pl = "PL/13624";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL9125(){
		$pl = "PL/9125";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL4119(){
		$pl = "PL/4119";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL5849(){
		$pl = "PL/5849";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL5850(){
		$pl = "PL/5850";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL5851(){
		$pl = "PL/5851";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL5852(){
		$pl = "PL/5852";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL11302(){
		$pl = "PL/11302";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL4115(){
		$pl = "PL/4115";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL4118(){
		$pl = "PL/4118";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL5166(){
		$pl = "PL/5166";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL3322(){
		$pl = "PL/3322";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL4610(){
		$pl = "PL/4610";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL5162(){
		$pl = "PL/5162";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL13114(){
		$pl = "PL/13114";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL3334(){
		$pl = "PL/3334";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL6561(){
		$pl = "PL/6561";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL6564(){
		$pl = "PL/6564";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL4121(){
		$pl = "PL/4121";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL5159(){
		$pl = "PL/5159";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL9103(){
		$pl = "PL/9103";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
}
