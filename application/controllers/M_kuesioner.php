<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_kuesioner extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!$this->session->has_userdata('uname')){
			redirect(site_url('auth'));
		}
		$this->load->model('M_kuesioner_model');
	}
	function index(){
		$data['title'] = 'Daftar Kuesioner';
     	$data['main'] = 'm_kuesioner_list';
     	$data['list'] = $this->M_kuesioner_model->daftar();
		$data['arrLink']=array(
				array("Kuesioner",site_url('m_kuesioner'))
				);
		$data['tambah'] = 'href="'.site_url('m_kuesioner/add').'"';
		$this->load->view('layout',$data);
	}
	function daftar(){
		$data=$this->M_kuesioner_model->daftar();
		echo json_encode($data);
	}
	function add($id = NULL){
		$data['operation'] = is_null($id) ? 'Tambah' : 'Ubah';
		$data['title'] = $data['operation'].' kuesioner';
     	$data['main'] = 'm_kuesioner_add';
		$data['arrLink']=array(
				array("Kuesioner",site_url('m_kuesioner'))
				);
		$params['id'] =$id;
		if(isset($id)){
	     	$data['data'] = $this->M_kuesioner_model->daftar($params);
		}
		$this->load->view('layout',$data);
	}
	function save(){
		$id = $this->input->post('id');
		$params['id'] = $id;
		$params['kd_kuesioner'] = $this->input->post('kd_kuesioner');
		$params['kuesioner'] = $this->input->post('kuesioner');
		$params['nilai_min'] = $this->input->post('nilai_min');
		$params['nilai_max'] = $this->input->post('nilai_max');
		$params['aktif'] = $this->input->post('aktif');
		$dt['operation'] = isset($id) ? 'Tambah' : 'Ubah';
		$data=$this->M_kuesioner_model->add($params);
		if($data){
			$this->session->set_flashdata('success', $dt['operation'] . ' Data Berhasil');
			redirect('m_kuesioner');
		}
		else{
			$this->session->set_flashdata('danger', $dt['operation'] . ' Data Berhasil');
			redirect('m_kuesioner/add/'.$id);
		}
	}
	function del($id = NULL){
		$data=$this->M_kuesioner_model->del($id);
		redirect('m_kuesioner');
	}
}