<?php
class Product_model extends CI_Model{

	function product_list(){
		$hasil=$this->db->get('product');
		return $hasil->result();
	}

	function add($data = array()) {
		if (isset($data['product_code'])) {
            $this->db->set('product_code', $data['product_code']);
        }
		if (isset($data['product_name'])) {
            $this->db->set('product_name', $data['product_name']);
        }
		if (isset($data['product_price'])) {
            $this->db->set('product_price', $data['product_price']);
        }
		if (isset($data['file'])) {
            $this->db->set('file', $data['file']);
        }
		if (isset($data['id'])) {
            $this->db->where('id', $data['id']);
            $this->db->update('product');
            $id = $data['id'];
        } else {
            $this->db->insert('product');
            $id = $this->db->insert_id();
        }

        $status = $this->db->affected_rows();
        return ($status == 0) ? FALSE : $id;
	}
	function del($id) {
        $this->db->where('id', $id);
        $this->db->delete('product');
    }
}