<?php

class mdl_soal extends CI_Model{


	public function __construct(){
		parent::__construct();
	}

	public function getAll(){
		$data = $this->db->get('soal')->result();
		return $data;
	}
	
	public function add($data){
		$this->db->insert('soal', $data);
	}

	public function getById($id){
		$this->db->select('*')
				 ->from('soal')
				 ->where('id', $id);

		return $this->db->get();
	}

	public function update($id, $data){
		$this->db->where('id', $id)
				 ->update('soal', $data);
	}

	public function delete($id){
		$this->db->where('id', $id)
				 ->delete('soal');
	}

	public function get_jml(){
		return $this->db->query('select * from soal')->num_rows();
	}
}