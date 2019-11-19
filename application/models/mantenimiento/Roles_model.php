<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles_model extends CI_Model {

	public function getRoles(){
		$this->db->select("u.*,r.nombre as estatus");
		$this->db->from("menu_roles u");
		$this->db->join("menu_status r","u.id_estatus = r.id");
	//	$this->db->where("u.id_estatus","1");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getAreas2(){
		$this->db->where("id_estatus","1");
		$resultados = $this->db->get("areas");
		return $resultados->result();
	}
}
