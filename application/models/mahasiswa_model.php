<?php 
 class mahasiswa_model extends CI_model{
    public function getALLmahasiswa(){
        return $this->db->get('idmahasiswa')->result_array();
    }
    public function tambahdatamahasiswa(){
      $data = [
        "nama" =>$this->input->post('nama',true),
        "nrp" =>$this->input->post('nrp',true),
        "email" =>$this->input->post('email',true),
        "jurusan" =>$this->input->post('jurusan',true)
      ]; 
      $this->db->insert('idmahasiswa',$data);
    }

    public function hapusdatamahasiswa($id){
        $this->db->where('id',$id);
        $this->db->delete('idmahasiswa');
    }
    
    public function getmahasiswaid($id){
      return $this->db->get_where('idmahasiswa',['id'=> $id])->row_array();
    }

    public function ubahdatamahasiswa(){
      $data = [
        "nama" =>$this->input->post('nama',true),
        "nrp" =>$this->input->post('nrp',true),
        "email" =>$this->input->post('email',true),
        "jurusan" =>$this->input->post('jurusan',true)
      ]; 
      $this->db->where('id',$this->input->post('id'));
      $this->db->update('idmahasiswa',$data);
    }

    public function caridata(){
      $keyword = $this->input->post('keyword',true);
      $this->db->like('nama',$keyword);
      $this->db->or_like('nrp',$keyword);
      $this->db->or_like('email',$keyword);
      $this->db->or_like('jurusan',$keyword);
      return $this->db->get('idmahasiswa')->result_array();
    }
 }