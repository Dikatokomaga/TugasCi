<?php 

class Mahasiswa extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('mahasiswa_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['judul'] = 'Daftar mahasiswa';
        $data['idmahasiswa']= $this->mahasiswa_model->getALLmahasiswa();
        if($this->input->post('keyword')){
            $data['idmahasiswa'] = $this->mahasiswa_model->caridata();
        }
       
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data );
        $this->load->view('templates/footer');
    }

    public function tambah(){
        $data['judul'] = 'Form tambah data mahasiswa';

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('nrp','nrp|numeric','required');
        $this->form_validation->set_rules('email','email','required|valid_email');

        if( $this->form_validation->run()== FALSE){
            $this->load->view('templates/header',$data);
            $this->load->view('mahasiswa/tambah' );
            $this->load->view('templates/footer');
        }else{
            $this->mahasiswa_model->tambahdatamahasiswa();
            $this->session->set_flashdata('flash','ditambahkan');
            redirect('Mahasiswa');

        }
 
    }
    public function hapus($id){
        $this->mahasiswa_model->hapusdatamahasiswa($id);
        $this->session->set_flashdata('flash','dihapus');
        redirect('mahasiswa');
    } 
    public function detail($id){
        $data['judul'] = 'Detail data mahasiswa';
        $data['idmahasiswa'] = $this->mahasiswa_model->getmahasiswaid($id);
        $this->load->view('templates/header',$data);
        $this->load->view('mahasiswa/detail',$data );
        $this->load->view('templates/footer');

    }

    
    public function ubah($id){
        $data['judul']= 'Form ubah data mahasiswa ';
        $data['idmahasiswa'] = $this->mahasiswa_model->getmahasiswaid($id);
        $data['jurusan'] = ['Teknik Bangunan','Informatika','Arsitektur','Kehewanan'];

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('nrp','nrp|numeric','required');
        $this->form_validation->set_rules('email','email','required|valid_email');

        if( $this->form_validation->run()== FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/ubah',$data );
            $this->load->view('templates/footer');
        }else{
            $this->mahasiswa_model->ubahdatamahasiswa();
            $this->session->set_flashdata('flash','diubah');
            redirect('Mahasiswa');

        }
 
    }
}