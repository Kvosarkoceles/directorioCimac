<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactos_model extends CI_Model {
	public function getMenuAreas(){
		$this->db->cache_on();
		$this->db->select("u.*");
		$this->db->from("areas u");
		$this->db->where("u.id_estatus","1");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getArea($id){
		$this->db->cache_on();
		$this->db->select("a.*,r.nombre as estatus");
		$this->db->from("areas a");
		$this->db->join("menu_status r","a.id_estatus = r.id");
		$this->db->where("a.id",$id);
		$resultados = $this->db->get();
		return $resultados->row();
	}
	public function getContactos($id){
		$this->db->cache_on();
		$this->db->select("c.id,
											 c.nombres,
											 c.apellidos,
											 c.institucion,
											 c.id_estatus,
											 a.nombre as area");
		$this->db->from("contactos c");
		$this->db->join("areas a","c.id_area = a.id");
		$this->db->where("c.id_area",$id);
		$this->db->where("c.id_estatus",1);
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getContacto($id){
		$this->db->select("c.*");
		$this->db->from("contactos c");
	//	$this->db->join("telefonos t","c.id_telefono = t.id");
		//$this->db->join("telefonos t2","c.id_telefono2 = t2.id");
		//$this->db->join("telefonos t3","c.id_telefono3 = t3.id");
		//$this->db->join("telefonos t4","c.id_telefono4 = t4.id");
		//$this->db->join("emails e","c.id_email = e.id");
		//$this->db->join("emails e2","c.id_email2 = e2.id");
		$this->db->where("c.id",$id);
		//$this->db->where("c.estado","1");
		$resultado = $this->db->get();
		return $resultado->row();
	}
	public function getTelefonos($id){
		$this->db->cache_on();
		$this->db->select("c.*,e.nombre as tipo");
		$this->db->from("telefonos c");
		$this->db->join("menu_categoria_telefono e","c.id_categoria = e.id");
		$this->db->where("c.id_contacto",$id);
		$this->db->where("c.id_estatus",1);
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getCorreos($id){
		$this->db->cache_on();
		$this->db->select("c.*,e.nombre as tipo");
		$this->db->from("correos c");
		$this->db->join("menu_categoria_email e","c.id_categoria = e.id");
		$this->db->where("c.id_contacto",$id);
		$this->db->where("c.id_estatus",1);
		$resultados = $this->db->get();
		return $resultados->result();
	}

}
