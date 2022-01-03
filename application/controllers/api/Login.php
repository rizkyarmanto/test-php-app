<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Login extends REST_Controller {

	function __construct($config = 'rest') {
		parent::__construct($config);
		$this->load->model('M_user_model');
        $this->load->database();
    }
    function index_post() {
		$username=$this->post('username');
		$password=$this->post('password');
		$user=$this->M_user_model->cekuser(array('nm_user' => $username, 'sandi' => sha1($password)));
        if ($user) {
			$this->session->set_userdata('logged', TRUE);
            $this->session->set_userdata('uid', $user['id_user']);
            $this->session->set_userdata('uname', $user['nama']);
            $this->session->set_userdata('urole', $user['id_role']);
            $this->response($user, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}