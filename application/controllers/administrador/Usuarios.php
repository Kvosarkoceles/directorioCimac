<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
	public function __construct(){

		parent::__construct();
		$this->load->model("administrador/Usuarios_model");
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
		$data  = array(
			'areas' => $this->Usuarios_model->getUsuarios(),
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view("administrador/usuarios/list",$data);
		$this->load->view('layouts/footer');
	}

	public function view($id){


		//	"usuario" => $this->Usuarios_model->getUsuario($idusuario),
			//'areas' => $this->Usuarios_model->getAreas(),

		$data  = array(
			'areas' => $this->Usuarios_model->getUsuarios(),
			"usuario" => $this->Usuarios_model->getUsuario($id),
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view("administrador/usuarios/view",$data);
		$this->load->view('layouts/footer');

	}
	public function add(){
		$data  = array(
			'areas' => $this->Usuarios_model->getMenuAreas(),
			'roles' => $this->Usuarios_model->getMenuRoles(),
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view("administrador/usuarios/add",$data);
		$this->load->view('layouts/footer');
	}
	public function edit($id){
		$data  = array(
			'areas' => $this->Usuarios_model->getMenuAreas(),
			'roles' => $this->Usuarios_model->getMenuRoles(),
			"usuario" => $this->Usuarios_model->getUsuario($id),
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view("administrador/usuarios/edit",$data);
		$this->load->view('layouts/footer');
	}
}
