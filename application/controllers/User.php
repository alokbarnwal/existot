<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function profile($id) {
        if(!$this->session->userdata('user_id')) {
            redirect(base_url());
        }

        $data = array();
        $data['title'] = "Profile";
        $data['user'] = $this->db->get_where('users', array('id' => $id), 1)->row();
        $data['content'] = $this->load->view('profile', $data, TRUE);
        $this->load->view('layout', $data);
    }

    public function edit_profile() {
        if(!$this->session->userdata('user_id')) {
            redirect(base_url());
        }

        $user_id = $this->session->userdata('user_id');

        $user = $this->db->get_where('users', array('id' => $user_id), 1)->row();

        if($this->input->post('name')) {
            $data = array();
            $data['name'] = $this->input->post('name');
            $data['description'] = $this->input->post('description');

            //print_r($_FILES['profile_image']);

            if($_FILES['profile_image']['name']) {

                $file_name = $_FILES['profile_image']['name'];

                $image_exts = array("tif", "jpg", "gif", "png", "pdf");
      
                //Get Extension of file
                $path_parts = pathinfo($_FILES["profile_image"]["name"]);
                $ext = $path_parts['extension'];
      
                if(in_array($ext, $image_exts)) {
                    $config['upload_path'] = './uploads/';
                    $config['allowed_types'] = 'gif|jpeg|jpg|png|pdf';
                    $config['file_name'] = time().'_'.$file_name;
                    $config['overwrite'] = TRUE;
                    $config['max_size'] = '5000000';
                    $config['max_width'] = '4000000';
                    $config['max_height'] = '4000000';
      
                    //Load Upload Library
                    $this->load->library('upload');
                    $this->upload->initialize($config);
      
                    if (!$this->upload->do_upload('profile_image')) {
                        $error = array('error' => $this->upload->display_errors('<div class="alert alert-danger">', '</div>'));
                        $this->session->set_flashdata('message',$error['error']);
      
                          print_r($error['error']);
                    }
                    else {
                        $upload_data = $this->upload->data();
      
                        $data['profile_image'] = $upload_data['file_name'];
      
                    }
                }
      
            }
            
            if($_FILES['cover']['name']) {

                $file_name = $_FILES['cover']['name'];

                $image_exts = array("tif", "jpg", "gif", "png", "pdf");
      
                //Get Extension of file
                $path_parts = pathinfo($_FILES["cover"]["name"]);
                $ext = $path_parts['extension'];
      
                if(in_array($ext, $image_exts)) {
                    $config['upload_path'] = './uploads/';
                    $config['allowed_types'] = 'gif|jpeg|jpg|png|pdf';
                    $config['file_name'] = time().'_'.$file_name;
                    $config['overwrite'] = TRUE;
                    $config['max_size'] = '5000000';
                    $config['max_width'] = '4000000';
                    $config['max_height'] = '4000000';
      
                    //Load Upload Library
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
      
                    if (!$this->upload->do_upload('cover')) {
                        $error = array('error' => $this->upload->display_errors('<div class="alert alert-danger">', '</div>'));
                        $this->session->set_flashdata('message',$error['error']);
      
                          print_r($error['error']);
                    }
                    else {
                        $upload_data = $this->upload->data();
      
                        $data['cover'] = $upload_data['file_name'];
      
                    }
                }
      
            }

            $this->db->where('id', $user_id);
            if($this->db->update('users', $data)) {
                echo 'success';
            } else {
                echo 'profile update error';
            }

        } else {
            $data = array();
            $data['title'] = "Edit Profile";
            $data['user'] = $user;
            $data['content'] = $this->load->view('edit_profile', $data, TRUE);
            $this->load->view('layout', $data);
        }

        
    }

    public function search() {
        if(!$this->session->userdata('user_id')) {
            redirect(base_url());
        }

        $query = $this->input->post('query');

        $this->db->like('name', $query,);
        $result = $this->db->get('users')->result();
        

        $data = array();
        $data['title'] = "Search Results";
        $data['users'] = $result;
        $data['content'] = $this->load->view('search', $data, TRUE);
        $this->load->view('layout', $data);
    }

    public function search_posts() {
        if(!$this->session->userdata('user_id')) {
            redirect(base_url());
        }

        $query = $this->input->post('query');

        $this->db->like('text', $query,);
        $result = $this->db->get('posts')->result();
        

        $data = array();
        $data['title'] = "Search Results";
        $data['posts'] = $result;
        $data['content'] = $this->load->view('search_posts', $data, TRUE);
        $this->load->view('layout', $data); 
    }
}


?>