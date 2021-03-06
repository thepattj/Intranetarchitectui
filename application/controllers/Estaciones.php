<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estaciones extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('estacionescl_model');
		//$this->load->helper();
	}

	public function index(){
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('estacion/header');
		$this->load->view('estacion/estados', compact('nameU'));
		$this->load->view('estacion/footer');
	}
	public function states(){
		$stateS = $this->input->post('estadoE');
		$nameU = $this->session->userdata('nombreU');
		//echo $stateS;
		$this->load->view('estacion/header');
		$this->load->view('estacion/estadosr', compact('stateS','nameU'));
		$this->load->view('estacion/footer');
	}
	public function load(){
		$data['nameU'] = $this->session->userdata('nombreU');
		$numU = $this->session->userdata('idU');

		$data['plUser'] = $this->estacionescl_model->busqpluser($numU);
		//echo $data['plUser'][0]['numeroEst']; //YA DA LOS TRES DATOS

		$this->load->view('estacion/header');
		$this->load->view('estacion/stationclient', $data);
		$this->load->view('estacion/footer');
	}

	/*public function chih(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/estado/chih');
		$this->load->view('estacion/footer');
	}
	public function coa(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/estado/coa');
		$this->load->view('estacion/footer');
	}
	public function dgo(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/estado/dgo');
		$this->load->view('estacion/footer');
	}
	public function edomex(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/estado/edomex');
		$this->load->view('estacion/footer');
	}
	public function gto(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/estado/gto');
		$this->load->view('estacion/footer');
	}
	public function gro(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/estado/gro');
		$this->load->view('estacion/footer');
	}
	public function hgo(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/estado/hgo');
		$this->load->view('estacion/footer');
	}
	public function jal(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/estado/jal');
		$this->load->view('estacion/footer');
	}
	public function mich(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/estado/mich');
		$this->load->view('estacion/footer');
	}
	public function mor(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/estado/mor');
		$this->load->view('estacion/footer');
	}
	public function nl(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/estado/nl');
		$this->load->view('estacion/footer');
	}
	public function qro(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/estado/qro');
		$this->load->view('estacion/footer');
	}
	public function slp(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/estado/slp');
		$this->load->view('estacion/footer');
	}
	public function tam(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/estado/tam');
		$this->load->view('estacion/footer');
	}
	public function ver(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/estado/ver');
		$this->load->view('estacion/footer');
	}
	public function zac(){
		$this->load->view('estacion/header');
		$this->load->view('estacion/estado/zac');
		$this->load->view('estacion/footer');
	}*/
}
