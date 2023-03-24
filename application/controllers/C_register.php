<?php

class C_register extends CI_Controller
{
    public function index()
    {
        $this->load->view('hefo_admin/header');
        $this->load->view('user/V_register');
        $this->load->view('hefo_admin/footer');
    }
}