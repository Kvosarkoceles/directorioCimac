	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactos extends CI_Controller {

	private $permisos;

	public function __construct(){
		parent::__construct();
	$this->load->model("directorio/Contactos_model");

	}

	public function index(){
		$area=$this->session->userdata("area");
		$data  = array(
			'contactos' => $this->Contactos_model->getContactos($area),
			'area' => $this->Contactos_model->getArea($area),
		);
		$dataAreas = array(
			'areas' => $this->Contactos_model->getMenuAreas(),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside",$dataAreas);
		$this->load->view("directorio/list",$data);
		$this->load->view("layouts/footer");
	}

	public function areas($area){
		$data  = array(
			'contactos' => $this->Contactos_model->getContactos($area),
			'area' => $this->Contactos_model->getArea($area),
		);
		$dataAreas = array(
			'areas' => $this->Contactos_model->getMenuAreas(),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside",$dataAreas);
		$this->load->view("directorio/list",$data);
		$this->load->view("layouts/footer");
	}
	public function view($id){
		$data  = array(
			'contacto' => $this->Contactos_model->getContacto($id),
		);
		$dataAreas = array(
			'areas' => $this->Contactos_model->getMenuAreas(),
			'telefonos' => $this->Contactos_model->getTelefonos($id),
			'correos' => $this->Contactos_model->getCorreos($id),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside",$dataAreas);
		$this->load->view("directorio/view",$data);
		$this->load->view("layouts/footer");
	}
}
