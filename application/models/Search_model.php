<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_model extends CI_Model {

	
	public function fetchdata($limit, $start){
		$this->db->limit($limit,$start);
		return $this->db->get('transaksi')->result();
	}

	public function searchCount($query){
		$this->db->like('nama', $query);
		return count($this->db->get('transaksi')->result());
	}
	
	public function search($query, $limit, $offset){
		$this->db->like('nama', $query);
		$this->db->limit($limit, $offset);
		return $this->db->get('transaksi')->result();
	}

	
	
}
