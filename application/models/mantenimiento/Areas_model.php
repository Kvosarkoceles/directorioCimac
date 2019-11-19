<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Areas_model extends CI_Model {

	public function getAreas(){
		$this->db->cache_on();
		$this->db->select("u.*,r.nombre as estatus");
		$this->db->from("areas u");
		$this->db->join("menu_status r","u.id_estatus = r.id");
	//	$this->db->where("u.id_estatus","1");
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
}
