<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mitra_model extends CI_Model {


    public $id;
    public $nama;
    public $alamat;
    public $kontak;
    public $telpon;
    public $email;
    public $web;
    public $bidang_usaha_id;
    public $sektor_usaha_id;
    
	public function getAll()
	{
		$query = $this->db->get('mitra');
        return $query;
	}

    public function findById($id){
        $query = $this->db->get_where('mitra',['id'=>$id]);
        return $query->row();
    }

    public function delete($where,$table){

        $this->db->where($where);
        $this->db->delete($table);
    }
    
    public function save($data){
        $this->db->insert('mitra',$data);
    }

   
    public function update($data,$id){

        $this->db->update('mitra',$data,array('id'=>$id));
    }
    
    public function upload_foto(){
        
		$config['upload_path']         = 'image/';  
		$config['allowed_types']        = 'gif|jpg|png|jpeg'; 
		$config['max_size']             = 3000; 
		$config['max_width']            = 1024; 
		$config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }
        
        return "default.png";

    }
}