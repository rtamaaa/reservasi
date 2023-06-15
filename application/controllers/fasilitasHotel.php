<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fasilitasHotel extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('FasilitasHotel_model');
		if (! $this->session->userdata('email')) redirect('Auth/login');
		if ($this->session->userdata('akses')=='Admin') {
			
		}else{
			redirect('Welcome');
		}
		$this->load->database();
	}

	public function read()
	{

		$data['fasilitas_hotel']=$this->FasilitasHotel_model->read();
		$data['error'] = '';
        $data['result'] = $this->db->order_by('id','DESC')
                                    ->get('fasilitas_hotel')
                                    ->result();
		$this->load->view('admin/fasilitasHotel/data', $data);
	}

	public function edit($id)
	{

        $data['detail'] = $this->db->get_where('fasilitas_hotel',['id' => $id])->row();
		$this->load->view('admin/fasilitasHotel/ubah', $data);

	}
	
	public function do_upload()
    {
	    $config['upload_path']          = './images/fasilitas_hotel';
	    $config['allowed_types']        = 'jpg|png|jpeg';
	    $config['max_size']             = 0;
	    $config['max_width']            = 0;
	    $config['max_height']           = 0;
	    $this->load->library('upload', $config);
	    if (!$this->upload->do_upload('gambar')){
	            $error = array('error' => $this->upload->display_errors());
	            $this->load->view('admin/fasilitasHotel/data', $error);
	    }else{
	        $_data = array('upload_data' => $this->upload->data());
	         $data = array(
	            'nama'=> $this->input->post('nama'),
	            'keterangan'=> $this->input->post('keterangan'),
	            'gambar' => $_data['upload_data']['file_name']
	            );
	        $query = $this->db->insert('fasilitas_hotel',$data);
	        if($query){
	            $this->session->set_flashdata('msg', '<p style="color:green;">Berhasil menambahkan data!</p>');
	            redirect('FasilitasHotel/read');
	        }else{
	            $this->session->set_flashdata('msg', '<p style="color:red;">Gagal menambahkan data!</p>');
	        }
	    }
	}

	public function delete($id){
	    $_id = $this->db->get_where('fasilitas_hotel',['id' => $id])->row();
	    $query = $this->db->delete('fasilitas_hotel',['id'=>$id]);
	    if($query){
	        unlink("images/fasilitas_hotel/".$_id->gambar);
	    }
	    redirect('FasilitasHotel/read');
	}

	public function update()
	{
	    $id = $this->input->post('id');
        $_image = $this->db->get_where('fasilitas_hotel',['id' => $id])->row();
        $config['upload_path']          = './images/FasilitasHotel/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')){
            $data = array(
            'nama'=> $this->input->post('nama'),
            'keterangan'=> $this->input->post('keterangan'),
            );
            $query = $this->db->update('fasilitas_hotel', $data, array('id' => $id));
        }
        else{
            $_data = array('upload_data' => $this->upload->data());
             $data = array(
                'nama'=> $this->input->post('nama'),
	            'keterangan'=> $this->input->post('keterangan'),
                'gambar' => $_data['upload_data']['file_name']
                );
            $query = $this->db->update('fasilitas_hotel', $data, array('id' => $id));
            if($query){
                unlink("images/fasilitas_hotel/".$_image->gambar);
            }
        } redirect('FasilitasHotel/read');
	         
	}
	
}
