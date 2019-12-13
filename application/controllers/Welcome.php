<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 public function __construct(){
 		parent::__construct();
 		if (!$this->session->userdata("login")) {
 			redirect(base_url()."administrador/auth");
 		}
 		$this->load->model("directorio/Contactos_model");
 	}
	public function index(){
		$dataAreas = array(
			'areas' => $this->Contactos_model->getMenuAreas(),
		);
				$this->load->view('layouts/header');
				$this->load->view('layouts/aside',$dataAreas);
				$this->load->view('blank');
				$this->load->view('layouts/footer');
	}
}
