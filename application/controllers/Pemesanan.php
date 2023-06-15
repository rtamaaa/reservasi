<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		
		$this->load->model('Kamar_model');
		$this->load->model('Transaksi_model');
	} 
	public function read()
	{
		
			$data['trans']=$this->Transaksi_model->read();
			$data['error'] = '';
	        $data['result'] = $this->db->where('status','Pending')
	                                    ->get('transaksi')
	                                    ->result();
			$this->load->view('user/', $data);
		
	}
	public function data()
	{
		
			$data['trans']=$this->Transaksi_model->read();
			$data['error'] = '';
	        $data['trans'] = $this->db->where('status','Confirm')
	                                    ->get('transaksi')
	                                    ->result();
			$this->load->view('user/print', $data);
	}
}
