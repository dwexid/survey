<?php

class mdl_survey extends CI_Model{


	public function __construct(){
		parent::__construct();
	}

	public function add($data){
		$this->db->insert('hasil', $data);
	}

	public function hasil(){
		return $this->db->query("select count(distinct nim) as partisipan, sum(jawaban) as total_bobot from hasil")->row();
	}

	public function getById($id){
		$this->db->select('*')
				 ->from('hasil')
				 ->where('nim', $id);

		return $this->db->get();
	}

	public function update($id, $data){
		$this->db->where('nim', $id)
				 ->update('hasil', $data);
	}

	public function delete($id){
		$this->db->where('nim', $id)
				 ->delete('hasil');
	}
}