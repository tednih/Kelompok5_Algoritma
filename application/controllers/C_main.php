<?php

class C_main extends CI_Controller
{
    public function index()
    {
        $this->load->view('hefo_user/header');
        $this->load->view('hefo_user/sidebar');
        $this->load->view('hefo_user/footer');
    }
}