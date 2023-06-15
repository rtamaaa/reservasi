<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FasilitasHotel_model extends CI_Model {

	public function read()
	{
		$query = $this->db->get('fasilitas_hotel');
		return $query->result();
	}
	
	public function read_by($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('fasilitas_hotel');
		return $query->row() ;
	}

	
}

