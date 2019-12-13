	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactos extends CI_Controller {

	private $permisos;

	public function __construct(){
		parent::__construct();
		$this->permisos=$this->backend_lib->control();
		$this->load->model("Contactos_model");
		$this->load->model("Usuarios_model");

	}

	public function index(){
		$area=$this->session->userdata("area");
		$data  = array(
			'contactos' => $this->Contactos_model->getContactos($area),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("directorio/lista",$data);
		$this->load->view("layouts/footer");
	}

	public function add(){
		$data  = array(
			'telefonos' => $this->Contactos_model->getTelefonos(),
			'emails' => $this->Contactos_model->getEmails(),

		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("directorio/add",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$idcontacto = $this->input->post("idcontacto");
		$nombres = $this->input->post("nombres");
		$apellidos = $this->input->post("apellidos");
		$institucion = $this->input->post("institucion");
		$domicilio_laboral = $this->input->post("domicilio_laboral");
		$domicilio_particular = $this->input->post("domicilio_particular");
		$telefono = $this->input->post("telefono");
		$id_telefono = $this->input->post("id_telefono");
		$telefono2 = $this->input->post("telefono2");
		$id_telefono2 = $this->input->post("id_telefono2");
		$telefono3 = $this->input->post("telefono3");
		$id_telefono3 = $this->input->post("id_telefono3");
		$telefono4 = $this->input->post("telefono4");
		$id_telefono4 = $this->input->post("id_telefono4");
		$email = $this->input->post("email");
		$id_email = $this->input->post("id_email");
		$email2 = $this->input->post("email2");
		$id_email2 = $this->input->post("id_email2");
		$datos_asistente = $this->input->post("datos_asistente");
		$area = $this->input->post("area");

		$data  = array(
			'nombres' => $nombres,
			'apellidos' => $apellidos,
			'institucion' => $institucion,
			'domicilio_laboral' => $domicilio_laboral,
			'domicilio_particular' => $domicilio_particular,
			'telefono' => $telefono,
			'id_telefono' => $id_telefono,
			'telefono2' => $telefono2,
			'id_telefono2' => $id_telefono2,
			'telefono3' => $telefono3,
			'id_telefono3' => $id_telefono3,
			'telefono4' => $telefono4,
			'id_telefono4' => $id_telefono4,
			'email' => $email,
			'id_email' => $id_email,
			'email2' => $email2,
			'id_email2' => $id_email2,
			'datos_asistente' => $datos_asistente,
		);

		if ($this->Contactos_model->update($idcontacto,$data)) {
			redirect(base_url()."directorio/contactos/lista/".$area);
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."directorio/contactos/edit".$idcontacto);
		}
	}

	public function store(){
		$nombres = $this->input->post("nombres");
		$apellidos = $this->input->post("apellidos");
		$institucion = $this->input->post("institucion");
		$domicilio_laboral = $this->input->post("domicilio_laboral");
		$domicilio_particular = $this->input->post("domicilio_particular");
		$telefono = $this->input->post("telefono");
		$id_telefono = $this->input->post("id_telefono");
		$telefono2 = $this->input->post("telefono2");
		$id_telefono2 = $this->input->post("id_telefono2");
		$telefono3 = $this->input->post("telefono3");
		$id_telefono3 = $this->input->post("id_telefono3");
		$telefono4 = $this->input->post("telefono4");
		$id_telefono4 = $this->input->post("id_telefono4");
		$email = $this->input->post("email");
		$id_email = $this->input->post("id_email");
		$email2 = $this->input->post("email2");
		$id_email2 = $this->input->post("id_email2");
		$datos_asistente = $this->input->post("datos_asistente");
		$id_area = $this->session->userdata("area");
		$id_usuario= $this->session->userdata("id");

		$data  = array(
			'estado' => "1",
			'nombres' => $nombres,
			'apellidos' => $apellidos,
			'institucion' => $institucion,
			'domicilio_laboral' => $domicilio_laboral,
			'domicilio_particular' => $domicilio_particular,
			'telefono' => $telefono,
			'id_telefono' => $id_telefono,
			'telefono2' => $telefono2,
			'id_telefono2' => $id_telefono2,
			'telefono3' => $telefono3,
			'id_telefono3' => $id_telefono3,
			'telefono4' => $telefono4,
			'id_telefono4' => $id_telefono4,
			'email' => $email,
			'id_email' => $id_email,
			'email2' => $email2,
			'id_email2' => $id_email2,
			'datos_asistente' => $datos_asistente,
			'id_area' => $id_area,
			'id_usuario' => $id_usuario,
		);

		if ($this->Contactos_model->save($data)) {
			redirect(base_url()."directorio/contactos");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."directorio/contactos/add");
		}
	}
	public function view(){
		$idcontacto = $this ->input ->post("idcontacto");
		$data = array(
			"contacto" => $this->Contactos_model->getContacto($idcontacto)
		);
		$this->load->view("directorio/view",$data);
	}

	public function edit($id){
		$data  = array(
			'telefonos' => $this->Contactos_model->getTelefonos(),
			'emails' => $this->Contactos_model->getEmails(),
			'contacto' => $this->Contactos_model->getEditarContacto($id)
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("directorio/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function lista($id){
		$data  = array(
			'contactos' => $this->Contactos_model->getContactos($id),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("directorio/lista",$data);
		$this->load->view("layouts/footer");
	}



}
