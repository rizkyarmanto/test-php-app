<?php
class M_layanan_model extends CI_Model{

	function daftar($params = array()) {
		$orderBy = $params['order_by'] ?? 'kd_layanan';
		$this->db->select("id_layanan,kd_layanan,nm_layanan,bidang");
		if (isset($params['id'])) {
            $this->db->where('id_layanan', $params['id']);
        }
		$this->db->order_by($orderBy, "asc");
		$res=$this->db->get('m_layanan');
		if (isset($params['id'])) {
            return $res->row_array();
        } else {
            return $res->result_array();
        }
	}

	function add($data = array()) {
		if (isset($data['kd_layanan'])) {
            $this->db->set('kd_layanan', $data['kd_layanan']);
        }
		if (isset($data['nm_layanan'])) {
            $this->db->set('nm_layanan', $data['nm_layanan']);
        }
		if (isset($data['bidang'])) {
            $this->db->set('bidang', $data['bidang']);
        }
		if (isset($data['id'])) {
			if ($data['id']!="") {
	            $this->db->where('id_layanan', $data['id']);
	            $this->db->update('m_layanan');
	            $id = $data['id'];
	        } else {
	            $this->db->insert('m_layanan');
	            $id = $this->db->insert_id();
	        }
        } else {
            $this->db->insert('m_layanan');
            $id = $this->db->insert_id();
        }
		//echo $this->db->last_query();
        $status = $this->db->affected_rows();
        return ($status == 0) ? FALSE : $id;
	}
	function del($id) {
        $this->db->where('id_layanan', $id);
        $this->db->delete('m_layanan');
    }
}