<?php
class Student_model extends CI_Model{
    function __construct(){
        $this->load->database();
    }

    public function createStudent($dataInsert){
        return $this->db->insert('siswa',$dataInsert);
    }
    public function getStudents(){
        $query = $this->db->get('siswa');
        return $query->result_array();
    }
    public function getstudentDetail($id){
        $this->db->where('ID',$id);
        $query = $this->db->get('siswa');
        return $query->row_array();
    }
    public function updateStudent($id,$dataUpdate){
        $this->db->where('ID',$id);
        $this->db->update('siswa',$dataUpdate);
        if($this->db->affected_rows()>0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function deleteStudent($id){
        $this->db->where('ID',$id);
        $this->db->delete('siswa');
        if ($this->db->affected_rows()>0){
            return TRUE;
    }else{
        return FALSE;
    }
}
}
?>