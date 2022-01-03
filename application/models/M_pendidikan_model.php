<?php
class M_pendidikan_model extends CI_Model{
	function daftar($params = array()) {
		$this->db->select("id,nama");
		if (isset($params['id'])) {
            $this->db->where('id', $params['id']);
        }
		$res=$this->db->get('m_pendidikan');
		if (isset($params['id'])) {
            return $res->row_array();
        } else {
            return $res->result_array();
        }
	}
	function add($data = array()) {
		if (isset($data['nama'])) {
            $this->db->set('nama', $data['nama']);
        }
		if (isset($data['id'])) {
			if ($data['id']!="") {
	            $this->db->where('id', $data['id']);
	            $this->db->update('m_pendidikan');
	            $id = $data['id'];
	        } else {
	            $this->db->insert('m_pendidikan');
	            $id = $this->db->insert_id();
	        }
        } else {
            $this->db->insert('m_pendidikan');
            $id = $this->db->insert_id();
        }
        $status = $this->db->affected_rows();
        return ($status == 0) ? FALSE : $id;
	}
	function del($id) {
        $this->db->where('id', $id);
        $this->db->delete('m_pendidikan');
    }
}