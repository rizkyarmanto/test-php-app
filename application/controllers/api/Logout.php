<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Logout extends REST_Controller {

	function __construct($config = 'rest') {
		parent::__construct($config);
        $this->load->database();
    }
    function index_get() {
		session_unset();
		session_destroy();
		session_write_close();
		setcookie(session_name(),'',0,'/');
		//session_regenerate_id(true);
        $this->response(array('status' => 'success'), 200);
    }
}