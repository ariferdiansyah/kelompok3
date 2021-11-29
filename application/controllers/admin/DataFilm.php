<?php

class DataFilm extends CI_Controller{
    public function index()
    {
        $data['title'] = "Data Film";
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/film');
        $this->load->view('templates_admin/footer');
    }
}

?>
