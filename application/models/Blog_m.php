<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_m extends CI_Model{

	public function getBlog(){
		//$this->db->order_by('created_at', 'desc');
		$query = $this->db->get('tbl_clientes');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function submit(){
		$field = array(
			'cedula'=>$this->input->post('txt_cedula'),
			'nombre'=>$this->input->post('txt_nombre'),
			'apellido'=>$this->input->post('txt_apellido'),
			'telefono'=>$this->input->post('txt_telefono')
			);
		$this->db->insert('tbl_clientes', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function getBlogById($id){
		$this->db->where('id', $id);
		$query = $this->db->get('tbl_clientes');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function update(){
		$id = $this->input->post('txt_hidden');
		$field = array(
			'cedula'=>$this->input->post('txt_cedula'),
			'nombre'=>$this->input->post('txt_nombre'),
			'apellido'=>$this->input->post('txt_apellido'),
			'telefono'=>$this->input->post('txt_telefono')
			);
		$this->db->where('id', $id);
		$this->db->update('tbl_clientes', $field);
		echo $this->db->last_query();extit;
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('tbl_clientes');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

}