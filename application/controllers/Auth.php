<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!$this->session->has_userdata('uname')){
			$this->load->view('login');
		}
		$this->load->model('M_user_model');
        $this->load->library('form_validation');
        $this->load->helper('string');
	}
	function index(){
		$this->load->view('login');
	}
	function login() {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($_POST AND $this->form_validation->run() == TRUE) {
                $username = $this->input->post('username', TRUE);
                $password = $this->input->post('password', TRUE);
                $user=$this->M_user_model->cekuser(array('nm_user' => $username, 'sandi' => sha1($password)));
                if($user){
                    $this->session->set_userdata('logged', TRUE);
                    $this->session->set_userdata('uid', $user['id_user']);
                    $this->session->set_userdata('uname', $user['nama']);
                    $this->session->set_userdata('urole', $user['id_role']);
					if($user['foto']!=NULL){
                    	$this->session->set_userdata('foto', media_url().'uploads/foto/'.$user['foto']);
					}
					else{
						$this->session->set_userdata('foto', media_url().'uploads/foto/profil.jpg');
					}
					redirect(site_url('dashboard'));
                } 
				else{
                    $this->session->set_flashdata('failed', 'Maaf, User Login dan Kata Sandi tidak valid');
                    $this->load->view('login');
                }
        } 
		else {
            $this->load->view('login');
        }
    }
    // Logout Processing
    function logout() {
		session_unset();
		session_destroy();
		session_write_close();
		setcookie(session_name(),'',0,'/');
		//session_regenerate_id(true);
        $this->load->view('login');
    }
}