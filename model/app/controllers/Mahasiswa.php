<?php

class Mahasiswa extends Controller{
    
    public function index(){
        $data['judul'] = 'Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->tampil('templetes/header' , $data);
        $this->tampil('mahasiswa/index' , $data);
        $this->tampil('templetes/footer');
    }
    public function detail($id){
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->tampil('templetes/header' , $data);
        $this->tampil('mahasiswa/detail' , $data);
        $this->tampil('templetes/footer');
    }
}