<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function getUsuarios(){
		$this->db->cache_on();
		$this->db->select("u.*,r.nombre as rol,a.nombre as area");
		$this->db->from("usuarios u");
		$this->db->join("menu_roles r","u.id_rol = r.id");
		$this->db->join("areas a","u.id_area = a.id");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getUsuario($id){
		$this->db->cache_on();
		$this->db->select("u.*,
											 r.nombre as rol,
											 s.nombre as status,
											 a.nombre as area,
											 c.nombres as nombres,
											 c.apellidos as apellidos,
											 c.id as id_contacto
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
	public function save2($tabla,$data){
		$this->db->cache_delete_all();
		$resultados = $this->db->insert($tabla,$data);
		$id=$this->db->insert_id();
		if ($id>0) {
			return $id;
		}
		return $resultados;
	}
	private function save1($tabla,$data){
		$this->db->cache_delete_all();
		return $this->db->insert($tabla,$data);
	}
	public function login($username){
		$this->db->select("u.*,c.nombres as nombres,");
		$this->db->from("usuarios u");
	//	$this->db->join("menu_roles r","u.id_rol = r.id");
		//$this->db->join("menu_status s","u.id_estatus = s.id");
		//$this->db->join("areas a","u.id_area = a.id");
		$this->db->join("contactos c","u.id_contacto = c.id");
		//$this->db->where("username", $username);
		$resultados = $this->db->get("usuarios");
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		}
		else{
			return false;
		}
	}
	public function update($id,$data){
		$this->db->cache_delete_all();
		$this->db->where("id",$id);
		return $this->db->update("usuarios",$data);
	}
}
