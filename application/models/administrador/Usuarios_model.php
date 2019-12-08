<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function getUsuarios(){
		$this->db->select("u.*,r.nombre as rol");
		$this->db->from("usuarios u");
		$this->db->join("menu_roles r","u.id_estatus = r.id");
	//	$this->db->where("u.id_estatus","1");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getUsuario($id){
		$this->db->select("u.*,
											 r.nombre as rol,
											 s.nombre as status,
											 a.nombre as area,
											 c.nombres as nombres,
											 c.apellidos as apellidos
											 ");
		$this->db->from("usuarios u");
		$this->db->join("menu_roles r","u.id_rol = r.id");
		$this->db->join("menu_status s","u.id_estatus = s.id");
		$this->db->join("areas a","u.id_area = a.id");
		$this->db->join("contactos c","u.id_contacto = c.id");
		$this->db->where("u.id",$id);
		$resultado = $this->db->get();
		return $resultado->row();
	}
	public function getMenuAreas(){
		$this->db->cache_on();
		$this->db->select("u.*");
		$this->db->from("areas u");
		$this->db->where("u.id_estatus","1");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getMenuRoles(){
		$this->db->cache_on();
		$this->db->select("u.*");
		$this->db->from("menu_roles u");
		$this->db->where("u.id_estatus","1");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getMenuTelefonos(){
		$this->db->cache_on();
		$this->db->select("u.*");
		$this->db->from("menu_categoria_telefono u");
		$this->db->where("u.id_estatus","1");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getMenuEmails(){
		$this->db->cache_on();
		$this->db->select("u.*");
		$this->db->from("menu_categoria_email u");
		$this->db->where("u.id_estatus","1");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function save($data,$dataContanto){
		$var=$this->savePriv("usuarios",$data);
		$var=$this->savePriv("contactos",$dataContanto);
		return $var;
	}
	private function savePriv($tabla,$data){
		$this->db->cache_delete_all();
		return $this->db->insert($tabla,$data);
	}
}
