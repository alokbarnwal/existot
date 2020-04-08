<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore w
	 * Maps to the following URLill
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	

	public function index() {
		// if(!$this->session->userdata('user_id')) {
		// 	redirect(base_url('welcome/login'));
		// }

		$data = array();
		$data['title'] = "Homepage";
		$data['content'] = $this->load->view('home', $data, TRUE); 
		$this->load->view('layout', $data);
	}

	public function login() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() == TRUE) {
			$data = array();
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));

			$user = $this->db->get_where('users', array('email' => $email, 'password' => $password))->row();

			if($user) {
				$this->session->set_userdata('user_id', $user->id);
				$this->session->set_userdata('user_name', $user->name);
				$this->session->set_userdata('user_email', $user->email);
				$this->session->set_userdata('user_image', $user->profile_image);
				$this->session->set_userdata('user_cover', $user->cover);

				redirect(base_url());

			} else {
				$this->session->set_flashdata('error', 'Invalid Credentials');
				redirect(base_url('welcome/login'));
			}

		} else {
			$this->load->view('login');
		}

		
	}

	public function logout() {
		session_destroy();
		redirect(base_url());
	}

	public function register() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Full Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() == TRUE) {
			$data = array();
			$data['name'] = $this->input->post('name');
			$data['email'] = $this->input->post('email');
			$data['password'] = md5($this->input->post('password'));
			$data['date'] = time();

			$email_check = $this->db->get_where('users', array('email' => $data['email']))->num_rows();
			if($email_check > 0) {
				$this->session->set_flashdata('error', 'Email already exists');
				redirect(base_url('welcome/register'));
			}

			if($this->db->insert('users', $data)) {
				$this->session->set_flashdata('success', 'You have registered successfully!');
				redirect(base_url('welcome/register'));
			} else {
				$this->session->set_flashdata('error', 'Error In Registration');
				redirect(base_url('welcome/register'));
			}
		} else {
			$this->load->view('register');
		}

		
	}
}
