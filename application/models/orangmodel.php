<?php 

class orangmodel extends CI_Model{
    public function getorang(){
        return $this->db->get('orang')->result_array();
    }

    public function getorpos($limit,$start,$keyword = null){
        if($keyword){
            $this->db->like('nama',$keyword);
            $this->db->or_like('Email',$keyword);
        }
        return $this->db->get('orang',$limit,$start,$keyword = null)->result_array();

    }

    public function ambilorang(){
        return $this->db->get('orang')->num_rows();
    }
}