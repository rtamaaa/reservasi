<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Kamar_model');
		$this->load->model('Pengguna_model');
		$this->load->model('Transaksi_model');
		$this->load->model('FasilitasHotel_model');
	} 
	public function index()
	{
		if (! $this->session->userdata('email')) redirect('Auth/login');
		if ($this->session->userdata('akses')=='Admin') {
			$this->load->view('admin/header');
			$this->load->view('admin/index');
		}else if ($this->session->userdata('akses')=='Resepsionis') {

			$this->load->view('resepsionis/index');
		}else{
			$data['kamar']=$this->Kamar_model->read();
			$data['error'] = '';
	        $data['result'] = $this->db->order_by('id','DESC')
	                                    ->get('kamar')
	                                    ->result();
	        $data['fasilitas']=$this->FasilitasHotel_model->read();
			$data['error'] = '';
        	$data['result'] = $this->db->order_by('id','DESC')
                                    ->get('fasilitas_hotel')
                                    ->result();
	        
	        $data['trans']=$this->Transaksi_model->read();
			$data['error'] = '';
	        $data['trans'] = $this->db->order_by('id','DESC')
	                                    ->get('transaksi')
	                                    ->result();
			$this->load->view('user/index', $data);
			$this->load->view('user/flshtl', $data);

		}
	}
		public function print($id)
	{
		if (! $this->session->userdata('email')) redirect('Auth/login');
		$data['trans'] = $this->db->get_where('transaksi',['no' => $this->session->userdata('no')])->row();
		$data['trans'] = $this->db->get_where('transaksi',['id' => $id])->row();
		$this->load->view('user/print', $data);
	}

		public function printout(){
		if (! $this->session->userdata('email')) redirect('Auth/login');
		$data['trans'] = $this->db->get_where('transaksi',['no' => $this->session->userdata('no')])->row();
		$data['kamar'] = $this->Transaksi_model->getAllTrans();
		$this->load->view('user/print', $data);
		}
		
}
