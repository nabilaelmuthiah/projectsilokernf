<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mitra extends CI_Controller {


	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('login/login');
		}
	}

	public function index()
	{
		$this->load->model('mitra_model');
        $data['mitra'] = $this->mitra_model->getAll();
        $this->load->view('mitra',$data);
	}

    public function view($id){
        $this->load->model('mitra_model');
        $data['mitra'] = $this->mitra_model->findById($id);
        $this->load->view('viewmitra',$data);
    }

    public function delete($id){
        
		//untuk menghapus data
        $this->load->model('mitra_model');//load model
		$where = array('id' => $id);
		$this->mitra_model->delete($where,'mitra');// query delete(delete from mitra where id = $id)
		redirect('mitra/index');
	}

    public function add(){
		$this->load->library('form_validation');
		$this->load->view('tambah_mitra');
	}

	public function save(){
	
		$this->load->model('mitra_model');
		$data['nama'] =$this->input->post('nama');
		$data['alamat'] =$this->input->post('alamat');
		$data['kontak'] =$this->input->post('kontak');
		$data['telpon'] =$this->input->post('telpon');
		$data['email'] =$this->input->post('email');
		$data['web'] =$this->input->post('web');
		$data['bidang_usaha_id'] =$this->input->post('web');
		$data['sektor_usaha_id'] =$this->input->post('sektor_usaha_id');
		$data['foto'] = $this->mitra_model->upload_foto();//ambil fungsi upload foto dari model
		$this->mitra_model->save($data);
		redirect('mitra');
	}

	public function edit($id){
		$this->load->model('mitra_model');
		$data['mitra'] = $this->mitra_model->findById($id);
		$this->load->view('editmitra',$data);
	}

	public function update(){
	
		
		$this->load->model('mitra_model');
		$data['id'] = $this->input->post('id');
		$data['nama'] =$this->input->post('nama');
		$data['alamat'] =$this->input->post('alamat');
		$data['kontak'] =$this->input->post('kontak');
		$data['telpon'] =$this->input->post('telpon');
		$data['email'] =$this->input->post('email');
		$data['web'] =$this->input->post('web');
		$data['bidang_usaha_id'] =$this->input->post('web');
		$data['sektor_usaha_id'] =$this->input->post('sektor_usaha_id');
		$data['foto'] = $this->mitra_model->upload_foto();
		
		if (!empty($_FILES["foto"]["name"])) {
			$data['foto'] = $this->mitra_model->upload_foto(); 
		} else {
			$data['foto'] = $post["old_image"];
		}
		$this->mitra_model->update($data,$id);
		redirect('mitra');
	}

}