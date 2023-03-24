<?php

class C_registrasi extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/V_register');
        } else {
            $data = array(
                'id'        => '',
                'email'      => $this->input->post('email'),
                'password'  => $this->input->post('password_1'),
                'role_id'   => 2,
            );

            $this->db->insert('tb_user', $data);
            redirect('auth/login');
        }
        if (!$this->db->insert('tb_user', $data)) {
            echo $this->db->error(); // Display the error message
        }
    }
}
