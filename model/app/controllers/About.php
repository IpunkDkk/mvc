<?php
class About extends Controller {
    public function index(){
        $data['judul'] = 'About Me';
        $this->tampil('templetes/header' , $data);
        $this->tampil('about/index' ,$data);
        $this->tampil('templetes/footer');
    }
    public function page(){
        $data['judul'] = 'About Page';
        $this->tampil('templetes/header' , $data);
        $this->tampil('about/page' ,$data);
        $this->tampil('templetes/footer');
    }
}