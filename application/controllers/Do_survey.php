<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Do_survey extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('mdl_survey');
		$this->load->model('mdl_soal');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['soal'] = $this->mdl_soal->getAll();
		$this->load->view('header');
		$this->load->view('survey/index.php', $data);
		$this->load->view('footer');
	}

	public function result(){
		$data['result'] = $this->mdl_survey->hasil();
		$data['jml_soal'] = $this->mdl_soal->get_jml();
		$this->load->view('header');
		$this->load->view('survey/hasil', $data);
		$this->load->view('footer');
	}

	public function get_result(){
		$this->load->model('mdl_soal');
		$jml = $this->mdl_soal->get_jml();


		for($i=0;$i<$jml;$i++){
			$this->form_validation->set_rules('jwb-'.$i,'jwb-'.$i, 'required');
		}

		if($this->form_validation->run() != false){

			for($i=0;$i<$jml;$i++){
				$survey[$i]=$this->input->post('survey-'.$i);
				$jwb[$i] = $this->input->post('jwb-'.$i);
			}
			$nim = $this->input->post('nim');
			for($i=0;$i<$jml;$i++){
				$data['id_soal'] = $survey[$i];
				$data['jawaban'] = $jwb[$i];
				$data['nim'] = $nim;
				$this->mdl_survey->add($data);
			}
			redirect(base_url());
		}else{
			$this->session->set_userdata('error', 'Mohon isi semua pertanyaan');
			redirect(base_url('index.php/do_survey'));
		}
	}

	public function add_soal(){
		$this->load->view('header');
		$this->load->view('add_soal');
		$this->load->view('footer');
	}

	public function add_soal_proc(){

		for($i=1;$i<6;$i++){
			if($soal[$i]!=""){
				$data['uraian'] = $soal[$i];
				$this->mdl_survey->add($data);
			}
		}

		redirect(base_url('index.php/home'));
	}

	public function delete($id){
		$this->mdl_survey->delete($id);
		redirect(base_url('index.php/home'));
	}
}
