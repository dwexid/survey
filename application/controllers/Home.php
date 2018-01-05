<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('mdl_soal');
	}

	public function index()
	{
		$data['soal'] = $this->mdl_soal->getAll();
		$this->load->view('header');
		$this->load->view('soal', $data);
		$this->load->view('footer');
	}

	public function add_soal(){
		$this->load->view('header');
		$this->load->view('add_soal');
		$this->load->view('footer');
	}

	public function add_soal_proc(){
		
		for($i=1;$i<6;$i++){
			$soal[$i]=$this->input->post('soal-'.$i);
		}

		for($i=1;$i<6;$i++){
			if($soal[$i]!=""){
				$data['uraian'] = $soal[$i];
				$this->mdl_soal->add($data);
			}
		}

		redirect(base_url('index.php/home'));
	}

	public function delete($id){
		$this->mdl_soal->delete($id);
		redirect(base_url('index.php/home'));
	}
}
