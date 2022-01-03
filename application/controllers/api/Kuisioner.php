<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Kuisioner extends REST_Controller {

	function __construct($config = 'rest') {
		parent::__construct($config);
        $this->load->database();
    }
    function index_post() {
        $data = array(
                    'id_mkuesioner'     => $this->post('id_mkuesioner'),
                    'id_layanan'   => $this->post('id_layanan'),
                    'tgl_isi'  => InggrisTgl($this->post('tgl_isi')),
                    'no'  => $this->post('no'),
                    'usia'  => $this->post('usia'),
                    'id_jeniskelamin'  => $this->post('id_jeniskelamin'),
                    'id_pendidikan'  => $this->post('id_pendidikan'),
                    'id_pekerjaan'  => $this->post('id_pekerjaan'),
                    'nilai'  => $this->post('nilai'),
                    'tahun'  => $this->post('tahun'),
                    'bulan'  => $this->post('bulan')
					);
        $insert = $this->db->insert('t_kuesioner', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
	function index_delete() {
        $id_layanan = $this->delete('tgl_isi');
		$id_layanan=$this->delete('id_layanan');
		$tgl_isi=$this->delete('tgl_isi');
		if (isset($id_layanan)) {
            $this->db->where('id_layanan', $id_layanan);
        }
		if (isset($tgl_isi)) {
            $this->db->where('tgl_isi', InggrisTgl($tgl_isi));
        }
        $delete = $this->db->delete('t_kuesioner');
		echo $this->db->last_query();
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}