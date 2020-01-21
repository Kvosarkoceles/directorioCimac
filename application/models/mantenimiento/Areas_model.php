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
	public function update($id,$data){
		$this->db->cache_delete_all();
		$this->db->where("id",$id);
		return $this->db->update("areas",$data);
	}
	public function getMenuStatus(){
		$resultados = $this->db->get("menu_status");
		return $resultados->result();
	}
	public function save($data){
		$this->db->cache_delete_all();
		return $this->db->insert("areas",$data);
	}
	public function getMenuAreas(){
		$this->db->cache_on();
		$this->db->select("u.*");
		$this->db->from("areas u");
		$this->db->where("u.id_estatus","1");
		$resultados = $this->db->get();
		return $resultados->result();
	}
}
