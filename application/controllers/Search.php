<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Search extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Transaksi_model');
        $this->load->model('Search_model');
        $this->load->library('pagination');
    }
    public function search(){
        if (!isset($_GET['query'])) {
            redirect('Transaksi/read');
        }else{
            $query = $this->input->get('query');
            $page = ($this->uri->segment(3) > 0)?$this->uri->segment(3):0;
           
            $config['total_rows']           = $this->Search_model->searchCount($query);
            $config['per_page']             = 8;
            $config['uri_segment']          = 3;
            $config['num_links']            = 2;      
            $config['use_page_numbers']     = TRUE;
            $config['reuse_query_string']   = true;

            //Konfigurasi pagination bootstrap.css
            $config['full_tag_open']    = '<ul class="pagination">';
            $config['full_tag_close']   = '</ul>';
            $config['first_link']       = false;
            $config['last_link']        = false;
            $config['first_tag_open']   = '<li>';
            $config['first_tag_close']  = '</li>';
            $config['prev_link']        = '&laquo';
            $config['prev_tag_open']    = '<li class="prev">';
            $config['prev_tag_close']   = '</li>';
            $config['next_link']        = '&raquo';
            $config['next_tag_open']    = '<li>';
            $config['next_tag_close']   = '</li>';
            $config['last_tag_open']    = '<li>';
            $config['last_tag_close']   = '</li>';
            $config['cur_tag_open']     = '<li class="active"><a href="#">';
            $config['cur_tag_close']    = '</a></li>';
            $config['num_tag_open']     = '<li>';
            $config['num_tag_close']    = '</li>';

            $this->pagination->initialize($config);

            $offset = ($page == 0)?$offset = 0 : $offset = ($page-1)*$config['per_page'];

            $data['result'] = $this->Search_model->search($query,$config['per_page'], $offset);
            $data['links'] = $this->pagination->create_links();
            $this->load->view('resepsionis/transaksi/data2',$data);
        }
    }

    public function searchD(){
        if (!isset($_GET['query'])) {
            redirect('Transaksi/read');
        }else{
            $query = $this->input->get('query');
            $page = ($this->uri->segment(3) > 0)?$this->uri->segment(3):0;
           
            $config['total_rows']           = $this->Search_model->searchCount($query);
            $config['per_page']             = 8;
            $config['uri_segment']          = 3;
            $config['num_links']            = 2;      
            $config['use_page_numbers']     = TRUE;
            $config['reuse_query_string']   = true;

            //Konfigurasi pagination bootstrap.css
            $config['full_tag_open']    = '<ul class="pagination">';
            $config['full_tag_close']   = '</ul>';
            $config['first_link']       = false;
            $config['last_link']        = false;
            $config['first_tag_open']   = '<li>';
            $config['first_tag_close']  = '</li>';
            $config['prev_link']        = '&laquo';
            $config['prev_tag_open']    = '<li class="prev">';
            $config['prev_tag_close']   = '</li>';
            $config['next_link']        = '&raquo';
            $config['next_tag_open']    = '<li>';
            $config['next_tag_close']   = '</li>';
            $config['last_tag_open']    = '<li>';
            $config['last_tag_close']   = '</li>';
            $config['cur_tag_open']     = '<li class="active"><a href="#">';
            $config['cur_tag_close']    = '</a></li>';
            $config['num_tag_open']     = '<li>';
            $config['num_tag_close']    = '</li>';

            $this->pagination->initialize($config);

            $offset = ($page == 0)?$offset = 0 : $offset = ($page-1)*$config['per_page'];

            $data['result'] = $this->Search_model->search($query,$config['per_page'], $offset);
            $data['links'] = $this->pagination->create_links();
            $this->load->view('resepsionis/transaksi/data1',$data);
        }
    }
}