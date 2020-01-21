<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Areas extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model("mantenimiento/Areas_model");
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
			'areas' => $this->Areas_model->getAreas(),
		);
		$dataAreas = array(
			'areas' => $this->Areas_model->getMenuAreas(),
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside',$dataAreas);
		$this->load->view("mantenimiento/areas/list",$data);
		$this->load->view('layouts/footer');
	}
	public function add(){
		$data  = array(
			'menu_estatus' => $this->Areas_model->getMenuStatus(),
		);
		$dataAreas = array(
			'areas' => $this->Contactos_model->getMenuAreas(),
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside',$dataAreas);
		$this->load->view("mantenimiento/areas/add",$data);
		$this->load->view('layouts/footer');
	}
	public function store(){
		$nombre = $this->input->post("nombre_area");
		$descripcion = $this->input->post("descripcion_area");
		$id_estatus = $this->input->post("estatus_area");
		$this->form_validation->set_rules("nombre_area","Nombre","required|min_length[3]|is_unique[areas.nombre]");
		$this->form_validation->set_rules("descripcion_area","Descripcion","required|min_length[3]");
		if ($this->form_validation->run() == FALSE) {
			$this->add();
		}
		else {
			$data  = array(
				'nombre' => $nombre,
				'descripcion' => $descripcion,
				'id_estatus' => $id_estatus,
			);
			if ($this->Areas_model->save($data)) {
				redirect(base_url()."mantenimiento/areas");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."mantenimiento/areas/add");
			}
		}
	}
	public function view($id){
		$data  = array(
			'area' => $this->Areas_model->getArea($id),
		);
		$dataAreas = array(
			'areas' => $this->Areas_model->getMenuAreas(),
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside',$dataAreas);
		$this->load->view("mantenimiento/areas/view",$data);
		$this->load->view('layouts/footer');
	}
	public function edit($id){
		$data  = array(
			'area' => $this->Areas_model->getArea($id),
			'menu_estatus' => $this->Areas_model->getMenuStatus(),
		);
		$dataAreas = array(
			'areas' => $this->Areas_model->getMenuAreas(),
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside',$dataAreas);
		$this->load->view("mantenimiento/areas/edit",$data);
		$this->load->view('layouts/footer');
	}
	public function update(){
		$id_area = $this->input->post("id_area");
		$nombre = $this->input->post("nombre_area");
		$descripcion = $this->input->post("descripcion_area");
		$estatus = $this->input->post("estatus_area");

		$data  = array(
			'nombre' => $nombre,
			'descripcion' => $descripcion,
			'id_estatus' => $estatus,
		);

		if ($this->Areas_model->update($id_area,$data)) {
			redirect(base_url()."mantenimiento/areas/view/".$id_area);
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/areas/edit/".$id_area);
		}
	}
	public function enabled($id){
		$data  = array(
			'id_estatus' => 1,
		);

		if ($this->Areas_model->update($id,$data)) {
			redirect(base_url()."mantenimiento/areas/");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/areas/");
		}
	}
	public function disabled($id){
		$data  = array(
			'id_estatus' => 2,
		);

		if ($this->Areas_model->update($id,$data)) {
			redirect(base_url()."mantenimiento/areas/");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/areas/");
		}
	}
}
