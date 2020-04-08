<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function create() {
        if(!$this->session->userdata('user_id')) {
            redirect(base_url('welcome/login'));
        }

        $user_id = $this->session->userdata('user_id');

        if($this->input->post('text')) {
            $data = array();
            $data['text'] = $this->input->post('text');
            $data['title'] = $this->input->post('title');
            $data['video'] = $this->input->post('video');
            $file = "";

            if($_FILES['file']['name']) {

                $image_exts = array("tif", "jpg", "gif", "png", "pdf");
      
                //Get Extension of file
                $path_parts = pathinfo($_FILES["file"]["name"]);
                $ext = $path_parts['extension'];
      
                if(in_array($ext, $image_exts)) {
                    $config['upload_path'] = './uploads/';
                    $config['allowed_types'] = 'gif|jpeg|jpg|png|pdf';
                    $config['file_name'] = uniqid();
                    $config['overwrite'] = TRUE;
                    $config['max_size'] = '5000000';
                    $config['max_width'] = '4000000';
                    $config['max_height'] = '4000000';
      
                    //Load Upload Library
                    $this->load->library('upload', $config);
      
                    if (!$this->upload->do_upload('file')) {
                        $error = array('error' => $this->upload->display_errors('<div class="alert alert-danger">', '</div>'));
                        $this->session->set_flashdata('message',$error['error']);
      
                          print_r($error['error']);
                    }
                    else {
                        $upload_data = $this->upload->data();
      
                        $file = $upload_data['file_name'];
      
                    }
                }
      
            }
            $data['user_id'] = $user_id;
            $data['date'] = time();
            $data['files'] = $file;

            if($this->db->insert('posts', $data)) {
                echo 'success';
            } else {
                echo 'error';
            }

        }
    }

    public function test() {
        echo 'test';
    }

    public function comment() {
        if(!$this->session->userdata('user_id')) {
            redirect(base_url());
        }

        if(!$this->input->post('user_id') || !$this->input->post('post_id')) {
            redirect(base_url());
        }

        $data = array();
        $data['text'] = $this->input->post('text');
        $data['post_id'] = $this->input->post('post_id');
        $data['user_id'] = $this->input->post('user_id');
        $data['date'] = time();

        if($this->db->insert('comments', $data)) {
            $post = $this->db->get_where('posts', array('id' => $data['post_id']), 1)->row();
            $this->db->where('id', $data['post_id']);
            $this->db->update('posts', array('comments' => $post->comments+1));
            echo 'success';
            
        } else {
            echo 'error in commenting';
        }
    }

    public function like($id) {
        if(!$this->session->userdata('user_id')) {
            redirect(base_url());
        }

        $user_id = $this->session->userdata('user_id');

        $post = $this->db->get_where('posts', array('id' => $id), 1)->row();
        $likes = explode('::::', $post->likes);
        array_push($likes, $user_id);
        $this->db->where('id', $id);
        if($this->db->update('posts', array('likes' => implode('::::', $likes)))) {
            echo 'success';
        } else {
            echo 'like error';
        }
    }

}

?>