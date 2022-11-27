<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Student extends CI_Controller {
public function __construct(){
parent::__construct();
$this->load->model('Student_model');//untuk memanggil model
$this->load->helper('url');
}
public function index (){
    $data['students']=$this->Student_model->getStudents();
    $this->load->view('student/list_student',$data);
}
public function create(){
    if($this->input->post()){
        $dataInsert = array ("nama_lengkap" => $this->input->post('nama_lengkap'),"kelas"=> $this->input->post('kelas'),"jurusan"=>$this->input->post('jurusan'),"nama_orang_tua"=>$this->input->post('nama_orang_tua'),);
        if($this->Student_model->createStudent($dataInsert)){
            echo"Sukses Menambah Data Siswa";
        }else{
            echo"Gagal Menambah Data siswa <a href='".site_url('student')."'>kembali</a>";
        }
    }else{
        $this->load->view("student/create_student");
    }
}
public function update($id){
    if($this->input->post()){
        $dataUpdate = array("nama_lengkap" => $this->input->post
        ('nama_lengkap'),"kelas"=> $this->input->post('kelas'),
        "jurusan"=>$this->input->post('jurusan'),
        "nama_orang_tua"=>$this->input->post
        ('nama_orang_tua'));if($this->Student_model->updateStudent
        ($id,$dataUpdate)){
            echo"Sukses Mengupdate Data Siswa";
        }else{
            echo"Gagal Mengupdate Data siswa <a href='".site_url
            ('student')."'>kembali</a>";
        }
    }else{
       $data['student']= $this->Student_model->getStudentDetail($id);
       $this->load->view("student/update_student",$data);
    }
}
public function delete($id){
    if($this->Student_model->deleteStudent($id)){
        echo"sukses";
    }else{
        echo"gagal";
    }
}
}
?>