<?php

class users extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	public function login() {
		$this->form_validation->set_rules('user[name]', 'name', 'required');
		$this->form_validation->set_rules('user[password]', 'password', 'required');
		if ($this->form_validation->run() !== FALSE) {
		 	$user = $this->user_model->find($this->input->post('user'));
		 	if ($user) {
		 		$newdata = array('user' => $user);
				$this->session->set_userdata($newdata);
		 	}
		 	redirect('');
		 }
	}
	public function signup()
	{	
		$this->form_validation->set_rules('user[name]', 'name', 'required');
		$this->form_validation->set_rules('user[password]', 'password', 'required');
		if ($this->form_validation->run() !== FALSE) {
			$post_user = $this->input->post('user');
		 	$user = $this->user_model->create($post_user);
		 	
		 	if (!empty($user) && $user->name == $post_user['name']) {
		 		$newdata = array('user' => $user);
				$this->session->set_userdata($newdata);
		 	}
		 	redirect('');
		 }
		$data['title'] = "Sign Up";
		$this->load->view('templates/header');
		$this->load->view('users/signup',$data);
		$this->load->view('templates/footer');
	}
	public function logout() {
		$this->session->sess_destroy();
		redirect('');
	}
}