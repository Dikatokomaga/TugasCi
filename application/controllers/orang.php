<?php 

class orang extends CI_Controller{

    public function index(){
        $data['judul'] = 'List orang';
        
    $this->load->model('orangmodel','orang');

    // Pagination
    $this->load->library('pagination');

    //ambil data keyword
    if($this->input->post('submit')){
        $data['keyword'] = $this->input->post('keyword');
        $this->session->set_userdata('keyword',$data['keyword']);
    }else{
        $data['keyword'] =$this->session->userdata('keyword');
    }



    // config
    $this->db->like('nama',$data['keyword']);
    $this->db->or_like('Email',$data['keyword']);
    $this->db->from('orang');
    $config['total_rows'] = $this->db->count_all_results();
    $data['total_rows'] = $config['total_rows'];
    $config['per_page'] = 6;


    // initialize
    $this->pagination->initialize($config);

    $data['start'] = $this->uri->segment(3);

    $data['orang'] = $this->orang->getorpos($config['per_page'], $data['start'], $data['keyword']); 


    $this->load->view('templates/header', $data);
    $this->load->view('orang/index', $data );
    $this->load->view('templates/footer');
    }
}