<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Layanan extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->model('M_layanan_model');
        
    }
    function index_get()
    {
        $layanan = $this->M_layanan_model->daftar(['order_by'=>'id_layanan']);
        if ($layanan) {
            $this->response($layanan, 200);
        }
    }
}
