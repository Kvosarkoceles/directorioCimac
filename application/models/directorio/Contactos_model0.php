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
	public function getContactosAll(){
		$this->db->select("c.*, a.nombre as areas");
		$this->db->from("contactos c");
		$this->db->join("areas a","c.id_area = a.id");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getContactos($id){

		$this->db->select("c.*,e.nombre as emails, t.nombre as telefonos, a.nombre as areas");
		$this->db->from("contactos c");
		$this->db->join("telefonos t","c.id_telefono = t.id");
		$this->db->join("emails e","c.id_email = e.id");
		$this->db->join("areas a","c.id_area = a.id");



		$this->db->where("c.id_area",$id);
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getContacto($id){
		$this->db->select("c.*,t.nombre as id_telefono,
							   t2.nombre as id_telefono2,
							   t3.nombre as id_telefono3,
							   t4.nombre as id_telefono4,
							   e.nombre as 	id_email,
							   e2.nombre as id_email2

							   ");
		$this->db->from("contactos c");
		$this->db->join("telefonos t","c.id_telefono = t.id");
		$this->db->join("telefonos t2","c.id_telefono2 = t2.id");
		$this->db->join("telefonos t3","c.id_telefono3 = t3.id");
		$this->db->join("telefonos t4","c.id_telefono4 = t4.id");
		$this->db->join("emails e","c.id_email = e.id");
		$this->db->join("emails e2","c.id_email2 = e2.id");
		$this->db->where("c.id",$id);
		$this->db->where("c.estado","1");
		$resultado = $this->db->get();
		return $resultado->row();
	}

	public function getEditarContacto($id){
		$this->db->select("c.*");
		$this->db->from("contactos c");
		$this->db->where("c.id",$id);
		$resultado = $this->db->get();
		return $resultado->row();
	}

	public function getTelefonos(){
		$resultados = $this->db->get("telefonos");
		return $resultados ->result();
	}

	public function getEmails(){
		$resultados = $this->db->get("emails");
		return $resultados ->result();
	}

	public function save($data){
		return $this->db->insert("contactos",$data);
	}

	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("contactos",$data);
	}

}
