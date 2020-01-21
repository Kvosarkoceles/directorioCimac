<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emails extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model("mantenimiento/Emails_model");
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
			'areas' => $this->Emails_model->getEmails(),
		);
		$dataAreas = array(
			'areas' => $this->Emails_model->getMenuAreas(),
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside',$dataAreas);
		$this->load->view("mantenimiento/emails/list",$data);
		$this->load->view('layouts/footer');
	}
	public function add(){
		$data  = array(
			'menu_estatus' => $this->Emails_model->getMenuStatus(),
		);
		$dataAreas = array(
			'areas' => $this->Emails_model->getMenuAreas(),
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside',$dataAreas);
		$this->load->view("mantenimiento/emails/add",$data);
		$this->load->view('layouts/footer');
	}
	public function store(){
		$nombre = $this->input->post("nombre_CategoriaEmail");
		$descripcion = $this->input->post("descripcion_CategoriaEmail");
		$id_estatus = $this->input->post("estatus_CategoriaEmail");
		$this->form_validation->set_rules("nombre_CategoriaEmail","Nombre","required|min_length[3]|is_unique[menu_categoria_email.nombre]");
		$this->form_validation->set_rules("descripcion_CategoriaEmail","Descripcion","required|min_length[3]");
		if ($this->form_validation->run() == FALSE) {
			$this->add();
		}
		else {
			$data  = array(
				'nombre' => $nombre,
				'descripcion' => $descripcion,
				'id_estatus' => $id_estatus,
			);
			if ($this->Emails_model->save($data)) {
				redirect(base_url()."mantenimiento/emails");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."mantenimiento/emails/add");
			}
		}
	}
	public function view($id){
		$data  = array(
			'area' => $this->Emails_model->getEmail($id),
		);
		$dataAreas = array(
			'areas' => $this->Emails_model->getMenuAreas(),
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside',$dataAreas);
		$this->load->view("mantenimiento/emails/view",$data);
		$this->load->view('layouts/footer');
	}
	public function edit($id){
		$data  = array(
			'area' => $this->Emails_model->getEmail($id),
			'menu_estatus' => $this->Emails_model->getMenuStatus(),
		);
		$dataAreas = array(
			'areas' => $this->Emails_model->getMenuAreas(),
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside',$dataAreas);
		$this->load->view("mantenimiento/emails/edit",$data);
		$this->load->view('layouts/footer');
	}
	public function update(){
		$id_area = $this->input->post("id_CategoriaEmail");
		$nombre = $this->input->post("nombre_CategoriaEmail");
		$descripcion = $this->input->post("descripcion_CategoriaEmail");
		$estatus = $this->input->post("estatus_CategoriaEmail");

		$data  = array(
			'nombre' => $nombre,
			'descripcion' => $descripcion,
			'id_estatus' => $estatus,
		);

		if ($this->Emails_model->update($id_area,$data)) {
			redirect(base_url()."mantenimiento/emails/view/".$id_area);
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/emails/edit/".$id_area);
		}
	}
	public function enabled($id){
		$data  = array(
			'id_estatus' => 1,
		);

		if ($this->Emails_model->update($id,$data)) {
			redirect(base_url()."mantenimiento/emails/");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/emails/");
		}
	}
	public function disabled($id){
		$data  = array(
			'id_estatus' => 2,
		);

		if ($this->Emails_model->update($id,$data)) {
			redirect(base_url()."mantenimiento/emails/");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/emails/");
		}
	}
}
