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
			'telefonos' => $this->Usuarios_model->getMenuTelefonos(),
			'emails' => $this->Usuarios_model->getMenuEmails(),
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
	public function store(){
		$nombres = $this->input->post("nombres_usuario");
		$apellidos = $this->input->post("apellidos_usuario");
		$username = $this->input->post("username_usuario");
		$password = password_hash($this->input->post("password_usuario"), PASSWORD_DEFAULT);
		$rol = $this->input->post("rol_usuario");
		$area = $this->input->post("area_usuario");
		$domicilioParticular = $this->input->post("domicilio_particularUsuario");
		$this->form_validation->set_rules("nombres_usuario","Nombres","required|min_length[3]");
		$this->form_validation->set_rules("apellidos_usuario","Apellidos","required|min_length[3]");
		$this->form_validation->set_rules("username_usuario","Username","trim|required|is_unique[usuarios.username]|min_length[3]");
		$this->form_validation->set_rules('password_usuario', 'Password', 'required|min_length[5]|max_length[30]');
		$this->form_validation->set_rules('confirmacionPasword_usuario', 'Confirmation', 'required|matches[password_usuario]');


		if ($this->form_validation->run() == FALSE) {
				$this->add();
		}else {
			$mi_archivo = 'mi_archivo';
			$config['upload_path'] = './uploads/imagenes/usuarios';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['file_name'] = $username;
			$config['max_size'] = "50000";//tamaño en kilobytes
			$config['max_width'] = "2000";
			$config['max_height'] = "2000";
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload($mi_archivo)) {
				echo'<script type="text/javascript">
								alert("Agrege un Avatar por favor");
							</script>';
					$this->add();
			}else {
				$file_info = $this->upload->data();
				$archivo = $file_info['file_name'];
				$data  = array(
					'username' => $username,
					'password' => $password,
					'avatar' => $archivo,
					'id_rol' => $rol,
					'id_area' => $area,
					'id_estatus' => "1"
				);
				$dataContanto = array(
					'nombres' => $nombres,
					'apellidos' => "$apellidos",
					'institucion' => "Comunicación e Información de la Mujer A. C. CDMX, 2019",
					'domicilio_laboral' => "Balderas 86, Colonia Centro, 06050 Ciudad de México, CDMX",
					'domicilio_particular' => $domicilioParticular,
					'datos_asistente' => "f",
					'id_usuario' => "1",
					'id_area' => "1",
					'id_estatus' => "1",
				);
				if ($this->Usuarios_model->save($data,$dataContanto)) {
					//$this->thumbs($archivo);
					$width=300;
					$height=300;
					$destino='128x128';
					$width2=36;
					$height2=36;
					$destino2='thumbs';
					$this->thumbs($archivo,$width,$height,$destino);
					$this->thumbs($archivo,$width2,$height2,$destino2);
					redirect(base_url()."administrador/usuarios");
				}
				else{
					$this->session->set_flashdata("error","No se pudo guardar la informacion");
					redirect(base_url()."administrador/usuarios/add");
				}
			}

		//	$file_info = $this->upload->data();
			//$archivo = $file_info['file_name'];

		}
	}
	private function thumbs($imagen,$width,$height,$destino) {
		$CI = & get_instance();
		$CI->load->library('image_lib');
		$config['image_library'] = 'gd2';
		$config['source_image'] = 'uploads/imagenes/usuarios/'.$imagen;
		$config['new_image'] = 'uploads/imagenes/usuarios/'.$destino.'/'.$imagen;
		$config['maintain_ratio'] = TRUE;
		$config['create_thumb'] = FALSE;
		$config['width'] = $width;
		$config['height'] =$height;
		$CI->image_lib->initialize($config);
		if (!$CI->image_lib->resize()) {
			echo $this->image_lib->display_errors('', '');
		}
	}
}
