<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_pendidikan extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!$this->session->has_userdata('uname')){
			redirect(site_url('auth'));
		}
		$this->load->model('M_pendidikan_model');
	}
	function index(){
		$data['title'] = 'Daftar Pendidikan';
     	$data['main'] = 'm_pendidikan_list';
     	$data['list'] = $this->M_pendidikan_model->daftar();
		$data['arrLink']=array(
				array("Pendidikan",site_url('m_pendidikan'))
				);
		$data['tambah'] = 'href="'.site_url('m_pendidikan/add').'"';
		$this->load->view('layout',$data);
	}
	function daftar(){
		$data=$this->M_pendidikan_model->daftar();
		echo json_encode($data);
	}
	function add($id = NULL){
		$data['operation'] = is_null($id) ? 'Tambah' : 'Ubah';
		$data['title'] = $data['operation'].' Pendidikan';
     	$data['main'] = 'm_pendidikan_add';
		$data['arrLink']=array(
				array("Pendidikan",site_url('m_pendidikan'))
				);
		$params['id'] =$id;
		if(isset($id)){
	     	$data['data'] = $this->M_pendidikan_model->daftar($params);
		}
		$this->load->view('layout',$data);
	}
	function save(){
		$id = $this->input->post('id');
		$params['id'] = $id;
		$params['nama'] = $this->input->post('nama');
		$dt['operation'] = isset($id) ? 'Tambah' : 'Ubah';
		$data=$this->M_pendidikan_model->add($params);
		if($data){
			$this->session->set_flashdata('success', $dt['operation'] . ' Pendidikan Berhasil');
			redirect('m_pendidikan');
		}
		else{
			$this->session->set_flashdata('danger', $dt['operation'] . ' Pendidikan Berhasil');
			redirect('m_pendidikan/add/'.$id);
		}
	}
	function del($id = NULL){
		$data=$this->M_pendidikan_model->del($id);
		redirect('m_pendidikan');
	}
}