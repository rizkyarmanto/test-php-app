<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_layanan extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!$this->session->has_userdata('uname')){
			redirect(site_url('auth'));
		}
		$this->load->model('M_layanan_model');
	}
	function index(){
		$data['title'] = 'Daftar Izin';
     	$data['main'] = 'm_layanan_list';
     	$data['list'] = $this->M_layanan_model->daftar();
		$data['arrLink']=array(
				array("Izin",site_url('m_layanan'))
				);
		$data['tambah'] = 'href="'.site_url('m_layanan/add').'"';
		$this->load->view('layout',$data);
	}
	function daftar(){
		$data=$this->M_layanan_model->daftar();
		echo json_encode($data);
	}
	function add($id = NULL){
		$data['operation'] = is_null($id) ? 'Tambah' : 'Ubah';
		$data['title'] = $data['operation'].' Izin';
     	$data['main'] = 'm_layanan_add';
		$data['arrLink']=array(
				array("Izin",site_url('m_layanan'))
				);
		$params['id'] =$id;
		if(isset($id)){
	     	$data['data'] = $this->M_layanan_model->daftar($params);
		}
		$this->load->view('layout',$data);
	}
	function save(){
		$id = $this->input->post('id');
		$params['id'] = $id;
		$params['kd_layanan'] = $this->input->post('kd_layanan');
		$params['nm_layanan'] = $this->input->post('nm_layanan');
		$params['bidang'] = $this->input->post('bidang');
		$dt['operation'] = isset($id) ? 'Tambah' : 'Ubah';
		$data=$this->M_layanan_model->add($params);
		if($data){
			$this->session->set_flashdata('success', $dt['operation'] . ' Petugas Berhasil');
			redirect('m_layanan');
		}
		else{
			$this->session->set_flashdata('danger', $dt['operation'] . ' Petugas Berhasil');
			redirect('m_layanan/add/'.$id);
		}
	}
	function del($id = NULL){
		$data=$this->M_layanan_model->del($id);
		redirect('m_layanan');
	}
}