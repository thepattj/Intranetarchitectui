<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyectos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('proyectos_model');
		$this->load->model('subirfactura_model');
		//$this->load->helper();
	}

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
		$this->load->view('proyectos');
	}
	public function iguala(){
		//echo "vista iguala";
		$data['nameU'] = $this->session->userdata('nombreU');
		/*$nameU = $this->session->userdata('nombreU');*/
		$id = $this->session->userdata('idPL');
		//echo $id;

		/*$query = $this->proyectos_model->busiguala($id);
		//echo $query->num_rows();//son la cantidad de rows que bajan.
		foreach ($query->result() as $row) {
			echo $row->estatus;
		}*/ // esto sirve para leer mas rapido el MODEL

		$data['igualasta'] = $this->proyectos_model->busiguala($id); //datos de iguala
		//echo $data['igualasta'][0]['fechaInicio']; //YA DA LOS TRES DATOS
		$data['factcarga'] = $this->subirfactura_model->busfactura($id);
		//echo $data['factcarga']; //=>no existen resultados
		//echo $data['factcarga'][0]['estatus'];

		$this->load->view('menu/header');
		$this->load->view('proyectos/iguala', $data);
		$this->load->view('menu/footer');
	}
}
