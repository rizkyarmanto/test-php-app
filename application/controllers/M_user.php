<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_user extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!$this->session->has_userdata('uname')){
			redirect(site_url('auth'));
		}
		$this->load->model('M_user_model');
	}
	function index(){
		$data['title'] = 'Daftar User';
     	$data['main'] = 'm_user_list';
     	$data['list'] = $this->M_user_model->daftar();
		$data['arrLink']=array(
				array("User",site_url('m_user'))
				);
		$data['tambah'] = 'href="'.site_url('m_user/add').'"';
		$this->load->view('layout',$data);
	}
	function daftar(){
		$data=$this->M_user_model->daftar();
		echo json_encode($data);
	}
	function add($id = NULL){
		$data['operation'] = is_null($id) ? 'Tambah' : 'Ubah';
		$data['title'] = $data['operation'].' user';
     	$data['main'] = 'm_user_add';
		$data['arrLink']=array(
				array("User",site_url('m_user'))
				);
		$params['id'] =$id;
     	$data['role'] = $this->M_user_model->daftar_role();
		if(isset($id)){
	     	$data['data'] = $this->M_user_model->daftar($params);
		}
		$this->load->view('layout',$data);
	}
	function save(){
		$id = $this->input->post('id');
		$params['id'] = $id;
		$params['id_role'] = $this->input->post('id_role');
		$params['nama'] = $this->input->post('nama');
		$params['jabatan'] = $this->input->post('jabatan');
		$params['nm_user'] = $this->input->post('nm_user');
		$sandi = $this->input->post('sandi');
		if($sandi!=""){
			$params['sandi'] = $sandi;
		}
		$params['aktif'] = $this->input->post('aktif');
		$dt['operation'] = (!isset($id)) ? 'Tambah' : 'Ubah';
		$data=$this->M_user_model->add($params);
		if($dt['operation']=='Tambah'){
			$id=$data;
		}
		if (!empty($_FILES['foto']['name'])){
			$date=new DateTime();
			$namafile=$this->aksi_upload('foto',$date->format('Y-m-d-H-i-s').'-'.$_FILES['foto']['name']);
			$paramsupd['foto'] = $namafile;
			$paramsupd['id']=$id;
			$data=$this->M_user_model->add($paramsupd);
		}
		if($data){
			$this->session->set_flashdata('success', $dt['operation'] . ' Data Berhasil');
			redirect('m_user');
		}
		else{
			$this->session->set_flashdata('danger', $dt['operation'] . ' Data Berhasil');
			redirect('m_user/add/'.$id);
		}
	}
	function del($id = NULL){
		$data=$this->M_user_model->del($id);
		redirect('m_user');
	}
	public function aksi_upload($fld=NULL,$name=NULL){
		$config['upload_path']          = './media/uploads/foto/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		$config['file_name']            = $name;
		$this->load->library('upload', $config);
		$this->upload->do_upload($fld);
		$upload_data = $this->upload->data();
		$namafileupload=$upload_data['file_name'];
		return $namafileupload;
	}
}