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
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view("mantenimiento/areas/list",$data);
		$this->load->view('layouts/footer');
	}

	public function view($id){
		$data  = array(
			'area' => $this->Areas_model->getArea($id),
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view("mantenimiento/areas/view",$data);
		$this->load->view('layouts/footer');
	}
	public function edit($id){
		$data  = array(
			'area' => $this->Areas_model->getArea($id),
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view("mantenimiento/areas/edit",$data);
		$this->load->view('layouts/footer');
	}
}
