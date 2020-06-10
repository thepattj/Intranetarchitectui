<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estaciones extends CI_Controller {

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
		$this->load->view('estacion/header');
		$this->load->view('estacion/estados');
		$this->load->view('estacion/footer');
	}
	public function chih(){
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
	}
	public function AGN980316FJ5(){
		Ocho::AGN980316FJ5();
	}
}
