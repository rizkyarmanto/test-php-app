<?php
class M_umum_model extends CI_Model{
	function daftar_jeniskelamin(){
		$this->db->select("id,nama");
		$this->db->from('m_jeniskelamin');
		$hasil=$this->db->get();
		return $hasil->result_array();
	}
	function daftar_pendidikan(){
		$this->db->select("id,nama");
		$this->db->from('m_pendidikan');
		$hasil=$this->db->get();
		return $hasil->result_array();
	}
	function daftar_pekerjaan(){
		$this->db->select("id,nama");
		$this->db->from('m_pekerjaan');
		$hasil=$this->db->get();
		return $hasil->result_array();
	}
}