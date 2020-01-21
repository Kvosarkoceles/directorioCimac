<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("administrador/Usuarios_model");
	}
	public function index(){
		if ($this->session->userdata("login")) {
			redirect(base_url()."directorio/contactos");
		}
		else{
			$this->load->view("login");
		}
	}
	public function login(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$res = $this->Usuarios_model->login($username);
			if (!$res){
			$this->session->set_flashdata("error","El usuario es incorrecto");
			redirect(base_url()."administrador/auth");
		}
		elseif(password_verify($password, $res->password)) {
			$data  = array(
				'id' => $res->id,
				'nombres' => $res->nombres,
				'username' => $res->username,
				'area' => $res->id_area,
				'rol' => $res->id_rol,
				'avatar' => $res->avatar,
				'login' => TRUE
			);
			$this->session->set_userdata($data);
			if ($password=="x") {
					redirect(base_url()."directorio/usuarios/profile/".$this->session->userdata('id'));
			}else {
				redirect(base_url()."Welcome");
			}

		}
		else{
			$this->session->set_flashdata("error","La contraseña son incorrectos");
			redirect(base_url()."administrador/auth");
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
