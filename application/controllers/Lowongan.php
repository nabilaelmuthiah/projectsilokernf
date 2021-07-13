<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lowongan extends CI_Controller {


	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('login');
		}
	}

	public function index()
	{
		$this->load->model('lowongan_model');
        $data['lowongan'] = $this->lowongan_model->getAll();
        $this->load->view('lowongan',$data);
	}

    public function view($id){
        $this->load->model('lowongan_model');
        $data['lowongan'] = $this->lowongan_model->findById($id);
        $this->load->view('viewlowongan',$data);
    }

    public function delete($id){
        
		//untuk menghapus data
        $this->load->model('lowongan_model');//load model
		$where = array('id' => $id);
		$this->lowongan_model->delete($where,'lowongan');// query delete(delete from lowongan where id = $id)
		redirect('lowongan/index');
	}

    public function add(){
		$this->load->library('form_validation');
		$this->load->view('tambah_lowongan');
	}

	public function save(){
	
		$this->load->model('lowongan_model');

		$data['deskripsi_pekerjaan'] = $this->input->post('deskripsi_pekerjaan');
		$data['tanggal_akhir'] =$this->input->post('tanggal_akhir');
		$data['mitra_id'] =$this->input->post('mitra_id');
		$data['email'] =$this->input->post('email');
		$data['foto'] = $this->lowongan_model->upload_foto();//ambil fungsi upload foto dari model
		$this->lowongan_model->save($data);
		redirect('lowongan/index');
	}

	public function edit($id){
		$this->load->model('lowongan_model');
		$data['lowongan'] = $this->lowongan_model->findById($id);
		$this->load->view('editlowongan',$data);
	}

	public function update(){
	
		
		$this->load->model('lowongan_model');
		$id = $this->input->post('id');
		$data['deskripsi_pekerjaan'] =$this->input->post('deskripsi_pekerjaan');
		$data['tanggal_akhir'] =$this->input->post('tanggal_akhir');
		$data['mitra_id'] =$this->input->post('mitra_id');
		$data['email'] =$this->input->post('email');
		
		//upload file
		if (!empty($_FILES["foto"]["name"])) {//array foto diambil dari name inputan
			$data['foto'] = $this->lowongan_model->upload_foto(); //array foto dari nama column di db
		} else {
			$data['foto'] = $post["old_image"];
		}
		$this->lowongan_model->update($data,$id);
		redirect('lowongan/index');
	}
}