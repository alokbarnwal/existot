<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function dashboard() {
        if(!$this->session->userdata('user_id')) {
            $this->load->view('admin/login');
        }
        
        $data = array();
        $data['content'] = $this->load->view('admin/dashboard', $data, TRUE);
        $this->load->view('admin/layout', $data);
        
    }

    public function login() {
        if($this->input->post('username')) {
            $data = array();
            $data['username'] = $this->input->post('username');
            $data['password'] = $this->input->post('password');

            $check = $this->db->get_where('admin', array('username' => $data['username'], 'password' => md5($data['password'])), 1)->row();

            if($check) {
                $this->session->set_userdata('user_id', $check->id);
                redirect(base_url('admin/dashboard'));
            } else {
                $this->session->set_flashdata('error', "invalid credentials");
                redirect(base_url('admin/login'));
            }

        } else {
            $this->load->view('admin/login');
        }
    }

    public function logout() {
        session_destroy();
        redirect(base_url('admin/login'));
    }

    public function posts() {
        if(!$this->session->userdata('user_id')) {
            $this->load->view('admin/login');
        }

        $data = array();
        $data['posts'] = $this->db->select('posts.*, users.name')->from('posts')->join('users', 'users.id=posts.user_id')->get()->result();
        $data['content'] = $this->load->view('admin/posts', $data, TRUE);
        $this->load->view('admin/layout', $data);
    }

    public function users() {
        if(!$this->session->userdata('user_id')) {
            $this->load->view('admin/login');
        }

        $data = array();
        $data['posts'] = $this->db->get('users')->result();
        $data['content'] = $this->load->view('admin/users', $data, TRUE);
        $this->load->view('admin/layout', $data);
    }
}

?>