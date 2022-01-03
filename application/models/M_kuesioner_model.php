<?php
class M_kuesioner_model extends CI_Model{

	function daftar($params = array()) {
		$this->db->select("id_mkuesioner,kd_kuesioner,kuesioner,nilai_min,nilai_max,aktif,(case when aktif=1 then 'Aktif' else 'Tidak Aktif' end) nm_aktif");
		if (isset($params['id'])) {
            $this->db->where('id_mkuesioner', $params['id']);
        }
		$res=$this->db->get('m_kuesioner');
		//echo $this->db->last_query();
		//die();
		if (isset($params['id'])) {
            return $res->row_array();
        } else {
            return $res->result_array();
        }
	}

	function add($data = array()) {
		if (isset($data['kd_kuesioner'])) {
            $this->db->set('kd_kuesioner', $data['kd_kuesioner']);
        }
		if (isset($data['kuesioner'])) {
            $this->db->set('kuesioner', $data['kuesioner']);
        }
		if (isset($data['nilai_min'])) {
            $this->db->set('nilai_min', $data['nilai_min']);
        }
		if (isset($data['nilai_max'])) {
            $this->db->set('nilai_max', $data['nilai_max']);
        }
		if (isset($data['aktif'])) {
            $this->db->set('aktif', $data['aktif']);
        }
		if (isset($data['id'])) {
			if ($data['id']!="") {
	            $this->db->where('id_mkuesioner', $data['id']);
	            $this->db->update('m_kuesioner');
	            $id = $data['id'];
	        } else {
	            $this->db->insert('m_kuesioner');
	            $id = $this->db->insert_id();
	        }
        } else {
            $this->db->insert('m_kuesioner');
            $id = $this->db->insert_id();
        }
		//echo $this->db->last_query();
        $status = $this->db->affected_rows();
        return ($status == 0) ? FALSE : $id;
	}
	function del($id) {
        $this->db->where('id_mkuesioner', $id);
        $this->db->delete('m_kuesioner');
    }
}