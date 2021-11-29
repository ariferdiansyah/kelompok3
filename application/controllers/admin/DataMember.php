<?php

class DataMember extends CI_Controller{
    public function index()
    {
        $data['title'] = "Data Member";
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/member');
        $this->load->view('templates_admin/footer');
    }
}

?>
