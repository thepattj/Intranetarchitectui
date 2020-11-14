<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

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
		$this->load->view('menu/header');
		$this->load->view('menu/inicio');
		$this->load->view('menu/footer');
	}
	/*public function prueba(){
		echo "EXISTE ESTA PRUEBA PARA";
	}*/

	public function contraloria(){
		//aqui se recoje la informacion de la memoria flash
		$nameU = $this->session->userdata('nombreU');
		//echo $nameU;

		$this->load->view('menu/header');
		$this->load->view('menu/contador', compact("nameU"));
		$this->load->view('menu/footer');
	}

	public function clientes(){
		$nameU = $this->session->userdata('nombreU');

		$this->load->view('menu/header');
		$this->load->view('menu/clientes', compact("nameU"));
		$this->load->view('menu/footer');
	}
}
