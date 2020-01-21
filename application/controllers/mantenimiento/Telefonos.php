<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Telefonos extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model("mantenimiento/Telefonos_model");
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
			'areas' => $this->Telefonos_model->getTelefonos(),
		);
		$dataAreas = array(
			'areas' => $this->Telefonos_model->getMenuAreas(),
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside',$dataAreas);
		$this->load->view("mantenimiento/telefonos/list",$data);
		$this->load->view('layouts/footer');
	}
	public function add(){
		$data  = array(
			'menu_estatus' => $this->Telefonos_model->getMenuStatus(),
		);
		$dataAreas = array(
			'areas' => $this->Telefonos_model->getMenuAreas(),
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside',$dataAreas);
		$this->load->view("mantenimiento/telefonos/add",$data);
		$this->load->view('layouts/footer');
	}
	public function store(){
		$nombre = $this->input->post("nombre_CategoriaTelefono");
		$descripcion = $this->input->post("descripcion_CategoriaTelefono");
		$id_estatus = $this->input->post("estatus_CategoriaTelefono");
		$this->form_validation->set_rules("nombre_CategoriaTelefono","Nombre","required|min_length[3]|is_unique[menu_categoria_telefono.nombre]");
		$this->form_validation->set_rules("descripcion_CategoriaTelefono","Descripcion","required|min_length[3]");
		if ($this->form_validation->run() == FALSE) {
			$this->add();
		}
		else {
			$data  = array(
				'nombre' => $nombre,
				'descripcion' => $descripcion,
				'id_estatus' => $id_estatus,
			);
			if ($this->Telefonos_model->save($data)) {
				redirect(base_url()."mantenimiento/telefonos");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."mantenimiento/telefonos/add");
			}
		}
	}
	public function view($id){
		$data  = array(
			'area' => $this->Telefonos_model->getTelefono($id),
		);
		$dataAreas = array(
			'areas' => $this->Telefonos_model->getMenuAreas(),
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside',$dataAreas);
		$this->load->view("mantenimiento/telefonos/view",$data);
		$this->load->view('layouts/footer');
	}
	public function edit($id){
		$data  = array(
			'telefono' => $this->Telefonos_model->getTelefono($id),
			'menu_estatus' => $this->Telefonos_model->getMenuStatus(),
		);
		$dataAreas = array(
			'areas' => $this->Telefonos_model->getMenuAreas(),
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside',$dataAreas);
		$this->load->view("mantenimiento/telefonos/edit",$data);
		$this->load->view('layouts/footer');
	}
	public function update(){
		$id_area = $this->input->post("id_CategoriaTelefono");
		$nombre = $this->input->post("nombre_CategoriaTelefono");
		$descripcion = $this->input->post("descripcion_CategoriaTelefono");
		$estatus = $this->input->post("estatus_CategoriaTelefono");

		$data  = array(
			'nombre' => $nombre,
			'descripcion' => $descripcion,
			'id_estatus' => $estatus,
		);

		if ($this->Telefonos_model->update($id_area,$data)) {
			redirect(base_url()."mantenimiento/telefonos/view/".$id_area);
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/telefonos/edit/".$id_area);
		}
	}
	public function enabled($id){
		$data  = array(
			'id_estatus' => 1,
		);

		if ($this->Telefonos_model->update($id,$data)) {
			redirect(base_url()."mantenimiento/telefonos/");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/telefonos/");
		}
	}
	public function disabled($id){
		$data  = array(
			'id_estatus' => 2,
		);

		if ($this->Telefonos_model->update($id,$data)) {
			redirect(base_url()."mantenimiento/telefonos/");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/telefonos/");
		}
	}
}
