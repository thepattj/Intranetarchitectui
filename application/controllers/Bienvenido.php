<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bienvenido extends CI_Controller {
	public function index(){
		$this->load->view('login/login'); //Es la carga inicial
	}
	/*public function restablecer(){
		$this->load->view('login/restablecer');
	}*/
}
