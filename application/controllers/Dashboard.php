<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!$this->session->has_userdata('uname')){
			redirect(site_url('auth'));
		}
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_dashboard_model');
	}
	function index(){
		$arrLink=array(
		array("Dashboard",site_url('dashboard'))
		);
		$data['title'] = 'Dashboard';
     	$data['main'] = 'dashboard';
     	$data['arrLink'] = $arrLink;
		$data['g1_tahun'] = $this->input->post('g1_tahun');
		$data['g2_tahun'] = $this->input->post('g2_tahun');
		$data['g3_tahun_mulai'] = $this->input->post('g3_tahun_mulai');
		$data['g3_tahun_akhir'] = $this->input->post('g3_tahun_akhir');
		$data['g4_tahun_mulai'] = $this->input->post('g4_tahun_mulai');
		$data['g4_tahun_akhir'] = $this->input->post('g4_tahun_akhir');
		
		$data['g3_tahun']="";
		$data['g4_tahun']="";
		if($data['g1_tahun']==""){$data['g1_tahun']=date("Y");}
		if($data['g2_tahun']==""){$data['g2_tahun']=date("Y");}
		
		if($data['g3_tahun_mulai']!=""){
			$data['g3_tahun'].=" Mulai Tahun ".$data['g3_tahun_mulai'];
		}
		if($data['g3_tahun_akhir']!=""){
			$data['g3_tahun'].=" Sampai Tahun ".$data['g3_tahun_akhir'];
		}
		if($data['g4_tahun_mulai']!=""){
			$data['g4_tahun'].=" Mulai Tahun ".$data['g4_tahun_mulai'];
		}
		if($data['g4_tahun_akhir']!=""){
			$data['g4_tahun'].=" Sampai Tahun ".$data['g4_tahun_akhir'];
		}
		
		$params1['tahun'] = $data['g1_tahun'];
		$params2['tahun'] = $data['g2_tahun'];
		$params3['tahun_mulai'] = $data['g3_tahun_mulai'];
		$params3['tahun_akhir'] = $data['g3_tahun_akhir'];
		$params4['tahun_mulai'] = $data['g4_tahun_mulai'];
		$params4['tahun_akhir'] = $data['g4_tahun_akhir'];
     	$data['data1'] = $this->M_dashboard_model->grafik1($params1);
     	$data['data2'] = $this->M_dashboard_model->grafik2($params2);
     	$data['data3'] = $this->M_dashboard_model->grafik3($params3);
     	$data['data4'] = $this->M_dashboard_model->grafik4($params4);
		$this->load->view('layout',$data);
	}
}