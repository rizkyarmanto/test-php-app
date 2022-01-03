<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_pekerjaan extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!$this->session->has_userdata('uname')){
			redirect(site_url('auth'));
		}
		$this->load->model('M_pekerjaan_model');
	}
	function index(){
		$data['title'] = 'Daftar Pekerjaan';
     	$data['main'] = 'm_pekerjaan_list';
     	$data['list'] = $this->M_pekerjaan_model->daftar();
		$data['arrLink']=array(
				array("Pekerjaan",site_url('m_pekerjaan'))
				);
		$data['tambah'] = 'href="'.site_url('m_pekerjaan/add').'"';
		$this->load->view('layout',$data);
	}
	function daftar(){
		$data=$this->M_pekerjaan_model->daftar();
		echo json_encode($data);
	}
	function add($id = NULL){
		$data['operation'] = is_null($id) ? 'Tambah' : 'Ubah';
		$data['title'] = $data['operation'].' Pekerjaan';
     	$data['main'] = 'm_pekerjaan_add';
		$data['arrLink']=array(
				array("Pekerjaan",site_url('m_pekerjaan'))
				);
		$params['id'] =$id;
		if(isset($id)){
	     	$data['data'] = $this->M_pekerjaan_model->daftar($params);
		}
		$this->load->view('layout',$data);
	}
	function save(){
		$id = $this->input->post('id');
		$params['id'] = $id;
		$params['nama'] = $this->input->post('nama');
		$dt['operation'] = isset($id) ? 'Tambah' : 'Ubah';
		$data=$this->M_pekerjaan_model->add($params);
		if($data){
			$this->session->set_flashdata('success', $dt['operation'] . ' Pekerjaan Berhasil');
			redirect('m_pekerjaan');
		}
		else{
			$this->session->set_flashdata('danger', $dt['operation'] . ' Pekerjaan Berhasil');
			redirect('m_pekerjaan/add/'.$id);
		}
	}
	function del($id = NULL){
		$data=$this->M_pekerjaan_model->del($id);
		redirect('m_pekerjaan');
	}
}