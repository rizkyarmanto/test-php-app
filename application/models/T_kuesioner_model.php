<?php
class T_kuesioner_model extends CI_Model{

	function daftar($params = array()) {
		$this->db->distinct();
		$this->db->select(" a.id_layanan,b.nm_layanan,a.tgl_isi");
		if (isset($params['id_layanan'])) {
            $this->db->where('a.id_layanan', $params['id_layanan']);
        }
		$this->db->join('m_layanan b','a.id_layanan=b.id_layanan','left');
		$res=$this->db->get('t_kuesioner a');
		if (isset($params['id'])) {
            return $res->row_array();
        } else {
            return $res->result_array();
        }
	}
	function daftar_kuisbulan($params = array()) {
		$this->db->select("a.id_kunci,a.tahun,a.bulan,a.id_layanan,b.nm_layanan,coalesce(a.kunci,0)kunci");
		if (isset($params['id_layanan'])) {
            $this->db->where('a.id_layanan', $params['id_layanan']);
        }
		$this->db->join('m_layanan b','a.id_layanan=b.id_layanan','left');
		$res=$this->db->get('t_kunci a');
		if (isset($params['id'])) {
            return $res->row_array();
        } else {
            return $res->result_array();
        }
	}
	function daftar_mkuis($params = array()){
		$this->db->select("a.*");
		if (isset($params['id'])) {
            $this->db->where('a.id_mkuesioner', $params['id']);
        }
        $this->db->where('a.aktif', 1);
		$res=$this->db->get('m_kuesioner a');
		//echo $this->db->last_query();
		//die();
		if (isset($params['id'])) {
            return $res->row_array();
        } else {
            return $res->result_array();
        }
	}
	function daftar_kuis($params = array()) {
		$this->db->select("a.id_mkuesioner,a.id_layanan,a.tgl_isi,a.no,a.usia,a.id_jeniskelamin,a.id_pendidikan,a.id_pekerjaan,a.nilai,a.tahun,a.bulan");
		if (isset($params['id_layanan'])) {
            $this->db->where('a.id_layanan', $params['id_layanan']);
        }
		if (isset($params['tahun'])) {
            $this->db->where('a.tahun', $params['tahun']);
        }
		if (isset($params['bulan'])) {
            $this->db->where('a.bulan', $params['bulan']);
        }
		if (isset($params['nama'])) {
            $this->db->where('a.nama', $params['nama']);
        }
		if (isset($params['alamat'])) {
            $this->db->where('a.alamat', $params['alamat']);
        }
		$res=$this->db->get('t_kuesioner a');
		if (isset($params['id'])) {
            return $res->row_array();
        } else {
            return $res->result_array();
        }
	}
	function daftar_kuispivot($str=NULL){
		$res=$this->db->query($str);
		return $res->result_array();
	}
	function add($params = array(),$data){
		$this->db->trans_start();
		$adakunci=$this->daftar_kunci($params);
		if(empty($adakunci)){
			$this->add_kunci($params);
		}
		$this->del($params);
		$res=$this->db->insert_batch('t_kuesioner', $data);
		//echo $this->db->last_query();
		//die();
		$this->db->trans_complete();
		return $res;
	}
	function del($params = array()){
		if (isset($params['tgl_isi'])) {
            $this->db->where('tgl_isi', $params['tgl_isi']);
        }
		if (isset($params['id_layanan'])) {
            $this->db->where('id_layanan', $params['id_layanan']);
        }
        $this->db->delete('t_kuesioner');
    }
	function add_kunci($data = array()) {
		if (isset($data['tahun'])) {
            $this->db->set('tahun', $data['tahun']);
        }
		if (isset($data['bulan'])) {
            $this->db->set('bulan', $data['bulan']);
        }
		if (isset($data['id_layanan'])) {
            $this->db->set('id_layanan', $data['id_layanan']);
        }
		if (isset($data['sts'])) {
            $this->db->set('kunci', $data['sts']);
        }
		if (isset($data['id'])) {
			if ($data['id']!="") {
	            $this->db->where('id_kunci', $data['id']);
	            $this->db->update('t_kunci');
	            $id = $data['id'];
	        } else {
	            $this->db->insert('t_kunci');
	            $id = $this->db->insert_id();
	        }
        } else {
            $this->db->insert('t_kunci');
            $id = $this->db->insert_id();
        }
        $status = $this->db->affected_rows();
        return ($status == 0) ? FALSE : $id;
	}
	function daftar_kunci($params = array()){
		$this->db->select("id_kunci,bulan,tahun,id_layanan,coalesce(kunci,0)kunci ");
		if (isset($params['bulan'])) {
            $this->db->where('bulan', $params['bulan']);
        }
		if (isset($params['tahun'])) {
            $this->db->where('tahun', $params['tahun']);
        }
		if (isset($params['id_layanan'])) {
            $this->db->where('id_layanan', $params['id_layanan']);
        }
		$res=$this->db->get('t_kunci');
		if (isset($params['id'])) {
            return $res->row_array();
        } else {
            return $res->result_array();
        }
	}
}