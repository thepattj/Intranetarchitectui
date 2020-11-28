<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qro extends CI_Controller {

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
	public function AAF1107272S1(){
		$nameU = $this->session->userdata('nombreU');
		$namesta = "ABASTECEDORA AVE FENIX";

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}
	public function MAMX610501DBA(){
		$namesta = "EFREN MARTINEZ MORFIN";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}
	public function EGA060630K72(){
		$namesta = "ENERGETICOS EL GARITON";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}
	public function MOTE570610T42(){
		$namesta = "ENRIQUE MONTES TREJO";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}
	public function GAG9403107L2(){
		$namesta = "GAGO";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}
	public function GCT1412116G8(){
		$namesta = "GASOLINERA CENTENARIO TX";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}
	public function GNO140114CG8(){
		/*NO LO SE*/
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/qro/GNO140114CG8', compact('nameU'));
		$this->load->view('estacion/footer');
	}
	public function GGA110623R89(){
		/*NO LO SE*/
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/qro/GGA110623R89', compact('nameU'));
		$this->load->view('estacion/footer');
	}
	public function GGB0407198W2(){
		$namesta = "GRUPO GASOLINERO BERISA";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}
	public function GGO1101134D0(){
		/*NO LO SE*/
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/qro/GGO1101134D0', compact('nameU'));
		$this->load->view('estacion/footer');
	}
	public function GGP070420R71(){
		/*NO LO SE*/
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/qro/GGP070420R71', compact('nameU'));
		$this->load->view('estacion/footer');
	}
	public function GGR061110DL0(){
		$namesta = "GRUPO GASOLINERO ROJAS";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}
	public function GGO0209238J1(){
		$namesta = "GRUPO GOCALVI";
		$nostate = 22;
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta', 'nostate'));
		$this->load->view('estacion/footer');
	}
	public function VAJL710910TN0(){
		$namesta = "JOSE LUIS VAZQUEZ JIMENEZ";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}
	public function SAQ110912DI7(){
		/*NO LO SE*/
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/qro/SAQ110912DI7', compact('nameU'));
		$this->load->view('estacion/footer');
	}
	public function SAQ110822U79(){
		/*NO LO SE*/
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/qro/SAQ110822U79', compact('nameU'));
		$this->load->view('estacion/footer');
	}
	public function SBA161219082(){
		/*NO LO SE*/
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/qro/SBA161219082', compact('nameU'));
		$this->load->view('estacion/footer');
	}
	public function SEC160608N95(){
		/*NO LO SE*/
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/qro/SEC160608N95', compact('nameU'));
		$this->load->view('estacion/footer');
	}
	public function SGA030122GY5(){
		/*NO LO SE*/
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/qro/SGA030122GY5', compact('nameU'));
		$this->load->view('estacion/footer');
	}
	public function SPC0301072E4(){
		$nameU = $this->session->userdata('nombreU');
		$namesta = "SERVICIO PLAZA CIRCUNVALACION";

    $this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}
	public function SQP161107HW5(){
		/*NO LO SE*/
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/qro/SQP161107HW5', compact('nameU'));
		$this->load->view('estacion/footer');
	}
	public function SQS110113MU0(){
		$namesta = "SERVICIO QUINTANA SUR";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}
	public function SRS16111163A(){
		/*NO LO SE*/
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/qro/SRS16111163A', compact('nameU'));
		$this->load->view('estacion/footer');
	}
	public function SIC1009244L8(){
		$namesta = "SERVICIOS INTEGRALES DE COMBUSTIBLES";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}
	public function SPQ1402181D3(){
		/*NO LO SE*/
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/qro/SPQ1402181D3', compact('nameU'));
		$this->load->view('estacion/footer');
	}
	public function SMA1605047T9(){
		/*NO LO SE*/
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/qro/SMA1605047T9', compact('nameU'));
		$this->load->view('estacion/footer');
	}
	public function SEP1507277N2(){
		$namesta = "SERVIGAS ESTACION PALMILLAS";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}
	public function SHJ1410274T0(){
		$namesta = "SERVIGAS HACIENDA EL JACAL";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}
	public function SSV921014FF4(){
		$namesta = "SUPER SERVICIO LA VENTA";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}
	public function SSM9710095A1(){
		/*NO LO SE*/
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/qro/SSM9710095A1', compact('nameU'));
		$this->load->view('estacion/footer');
	}
	public function SSQ121221SV1(){
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/qro/SSQ121221SV1', compact('nameU'));
		$this->load->view('estacion/footer');
	}
	public function SSM960704NS1(){
		/*NO LO SE*/
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/qro/SSM960704NS1', compact('nameU'));
		$this->load->view('estacion/footer');
	}
	public function AGA040226BA4(){
		$namesta = "AGC GASO";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}
	public function ASM930428DK7(){
		$namesta = "AUTO SERVICIO MIR-SOT";
		$nostate = 22;
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta', 'nostate'));
		$this->load->view('estacion/footer');
	}
	public function AQU090926KL4(){
		$namesta = "AUTOSERVICIO QUERETANO";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}
	public function SCZ171123RZ7(){
		$namesta = "SERVICIO LA CAPILLA ZARAGOZA";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}
	public function SLP171204HYA(){
		$namesta = "SERVICIO LPQ";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}
	public function SSM1804175Y1(){
		$namesta = "SM&QRO";
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estacrfc',compact('nameU', 'namesta'));
		$this->load->view('estacion/footer');
	}
	public function SJQ1804164E0(){
		/*NO LO SE*/
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/qro/SJQ1804164E0', compact('nameU'));
		$this->load->view('estacion/footer');
	}

	/*POR PL PARA DAR LA INFORMACION DE CADA UNO DE LAS ESTACIONES*/
	public function PL0002(){
		$pl = "PL/0002";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL9330(){
		$pl = "PL/9330";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL19310(){
		$pl = "PL/19310";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL0006(){
		$pl = "PL/0006";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL9977(){
		$pl = "PL/9977";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL23011(){
		$pl = "PL/23011";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL11473(){
		$pl = "PL/11473";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL3186(){
		$pl = "PL/3186";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL2512(){
		$pl = "PL/2512";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL19683(){
		$pl = "PL/19683";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL3307(){
		$pl = "PL/3307";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL3734(){
		$pl = "PL/3734";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL12610(){
		$pl = "PL/12610";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL2066(){
		$pl = "PL/2066";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL7802(){
		$pl = "PL/7802";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL19448(){
		$pl = "PL/19448";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL3541(){
		$pl = "PL/3541";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL3556(){
		$pl = "PL/3556";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL6040(){
		$pl = "PL/6040";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL19185(){
		$pl = "PL/19185";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL11492(){
		$pl = "PL/11492";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL9409(){
		$pl = "PL/9409";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL19026(){
		$pl = "PL/19026";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL4552(){
		$pl = "PL/4552";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL21024(){
		$pl = "PL/21024";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL0003(){
		$pl = "PL/0003";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	/* public function PL21024(){
		$pl = "PL/21024";
	 	$nameU = $this->session->userdata('nombreU');

	 	$this->load->view('estacion/header');
	 	$this->load->view('estacion/clientesta', compact('nameU','pl'));
	 	$this->load->view('estacion/footer');
	 }*/
	public function PL21029(){
		$pl = "PL/21029";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL6837(){
		$pl = "PL/6837";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL3016(){
		$pl = "PL/3016";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL20136(){
		$pl = "PL/20136";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL10820(){
		$pl = "PL/10820";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL0000(){
		$pl = "PL/0000";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL20779(){
		$pl = "PL/20779";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL1484(){
		$pl = "PL/1484";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL1790(){
		$pl = "PL/1790";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL1833(){
		$pl = "PL/1833";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL19514(){
		$pl = "PL/19514";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL21035(){
		$pl = "PL/21035";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL5164(){
		$pl = "PL/5164";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL21034(){
		$pl = "PL/21034";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL0001(){
		$pl = "PL/0001";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL7583(){
		$pl = "PL/7583";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL10787(){
		$pl = "PL/10787";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL4609(){
		$pl = "PL/4609";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL3109(){
		$pl = "PL/3109";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}
	public function PL10227(){
		$pl = "PL/10227";
		$this->session->set_userdata('idPL', $pl);
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/clientesta', compact('nameU','pl'));
		$this->load->view('estacion/footer');
	}

}
