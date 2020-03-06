<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function index()
    {
        $data['title'] = 'Home ~ Halaman Utama';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->view('templates/tmp_header', $data);
        $this->load->view('templates/tmp_content');
        $this->load->view('templates/tmp_footer');
    }

}