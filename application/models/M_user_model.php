<?php
class M_user_model extends CI_Model{

	function daftar($params = array()) {
		$this->db->select("a.jabatan,a.aktif,a.id_user,a.nama,a.nm_user,a.sandi,a.id_role,b.nama nama_role,coalesce(a.foto,'profil.jpg') foto,(case when aktif=1 then 'Aktif' else 'Tidak Aktif' end) nm_aktif");
		if (isset($params['id'])) {
            $this->db->where('id_user', $params['id']);
        }
		$this->db->from('m_user a');
		$this->db->join('m_role b','a.id_role=b.id_role','left');
		$res=$this->db->get();
		if (isset($params['id'])) {
            return $res->row_array();
        } else {
            return $res->result_array();
        }
	}
	function daftar_role(){
		$this->db->select("id_role,nama,deskripsi");
		$this->db->from('m_role');
		$hasil=$this->db->get();
		return $hasil->result_array();
	}
	function cekuser($data = array()){
		$this->db->select("id_user,nama,nm_user,id_role,foto");
		if (isset($data['nm_user'])) {
            $this->db->where('nm_user', $data['nm_user']);
        }
		if (isset($data['sandi'])) {
            $this->db->where('sandi', $data['sandi']);
        }
		$hasil=$this->db->get('m_user');
		//echo $this->db->last_query();
		return $hasil->row_array();
	}
	function getrole(){
		$hasil=$this->db->get('m_role_tbl');
		return $hasil->result_array();
	}
	function add($data = array()) {
		if (isset($data['nama'])) {
            $this->db->set('nama', $data['nama']);
        }
		if (isset($data['nm_user'])) {
            $this->db->set('nm_user', $data['nm_user']);
        }
		if (isset($data['sandi'])) {
            $this->db->set('sandi', sha1($data['sandi']));
        }
		if (isset($data['id_role'])) {
            $this->db->set('id_role', $data['id_role']);
        }
		if (isset($data['foto'])) {
            $this->db->set('foto', $data['foto']);
        }
		if (isset($data['jabatan'])) {
            $this->db->set('jabatan', $data['jabatan']);
        }
		if (isset($data['aktif'])) {
            $this->db->set('aktif', $data['aktif']);
        }
		if (isset($data['id'])) {
			if ($data['id']!="") {
	            $this->db->where('id_user', $data['id']);
	            $this->db->update('m_user');
	            $id = $data['id'];
	        } else {
	            $this->db->insert('m_user');
	            $id = $this->db->insert_id();
	        }
        } else {
            $this->db->insert('m_user');
            $id = $this->db->insert_id();
        }
        $status = $this->db->affected_rows();
        return ($status == 0) ? FALSE : $id;
	}
	function del($id) {
        $this->db->where('id_user', $id);
        $this->db->delete('m_user');
    }
}