<?php
class Home extends Controller{
    public function index(){
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->tampil('templetes/header' , $data);
        $this->tampil('home/index' ,$data);
        $this->tampil('templetes/footer');
    }
}