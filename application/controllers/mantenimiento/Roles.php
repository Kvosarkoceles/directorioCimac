<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model("mantenimiento/Roles_model");
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
			'areas' => $this->Roles_model->getRoles(),
		);
		$dataAreas = array(
			'areas' => $this->Roles_model->getMenuAreas(),
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside',$dataAreas);
		$this->load->view("mantenimiento/roles/list",$data);
		$this->load->view('layouts/footer');
	}
	public function add(){
		$data  = array(
			'menu_estatus' => $this->Roles_model->getMenuStatus(),
		);
		$dataAreas = array(
			'areas' => $this->Roles_model->getMenuAreas(),
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside',$dataAreas);
		$this->load->view("mantenimiento/roles/add",$data);
		$this->load->view('layouts/footer');
	}
	public function store(){
		$nombre = $this->input->post("nombre_rol");
		$descripcion = $this->input->post("descripcion_rol");
		$id_estatus = $this->input->post("estatus_rol");
		$this->form_validation->set_rules("nombre_rol","Nombre","required|min_length[3]|is_unique[menu_roles.nombre]");
		$this->form_validation->set_rules("descripcion_rol","Descripcion","required|min_length[3]");
		if ($this->form_validation->run() == FALSE) {
			$this->add();
		}
		else {
			$data  = array(
				'nombre' => $nombre,
				'descripcion' => $descripcion,
				'id_estatus' => $id_estatus,
			);
			if ($this->Roles_model->save($data)) {
				redirect(base_url()."mantenimiento/roles");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."mantenimiento/roles/add");
			}
		}
	}
	public function view($id){
		$data  = array(
			'area' => $this->Roles_model->getRol($id),
		);
		$dataAreas = array(
			'areas' => $this->Roles_model->getMenuAreas(),
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside',$dataAreas);
		$this->load->view("mantenimiento/roles/view",$data);
		$this->load->view('layouts/footer');
	}
	public function edit($id){
		$data  = array(
			'area' => $this->Roles_model->getRol($id),
			'menu_estatus' => $this->Roles_model->getMenuStatus(),
		);
		$dataAreas = array(
			'areas' => $this->Roles_model->getMenuAreas(),
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside',$dataAreas);
		$this->load->view("mantenimiento/roles/edit",$data);
		$this->load->view('layouts/footer');
	}
	public function update(){
		$id_rol = $this->input->post("id_rol");
		$nombre = $this->input->post("nombre_rol");
		$descripcion = $this->input->post("descripcion_rol");
		$estatus = $this->input->post("estatus_rol");

		$data  = array(
			'nombre' => $nombre,
			'descripcion' => $descripcion,
			'id_estatus' => $estatus,
		);

		if ($this->Roles_model->update($id_rol,$data)) {
			redirect(base_url()."mantenimiento/roles/view/".$id_rol);
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/roles/edit/".$id_rol);
		}
	}
	public function enabled($id){
		$data  = array(
			'id_estatus' => 1,
		);

		if ($this->Roles_model->update($id,$data)) {
			redirect(base_url()."mantenimiento/roles");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/roles");
		}
	}
	public function disabled($id){
		$data  = array(
			'id_estatus' => 2,
		);

		if ($this->Roles_model->update($id,$data)) {
			redirect(base_url()."mantenimiento/roles");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/roles");
		}
	}
}
