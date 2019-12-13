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
	public function getContactos($id){
		$this->db->cache_on();
		$this->db->select("c.*");
		$this->db->from("contactos c");
		$this->db->where("c.id_area",$id);
		$resultados = $this->db->get();
		return $resultados->result();
	}




}
