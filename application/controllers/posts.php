<?php

class posts extends CI_Controller {
		public function __construct()
	{
		parent::__construct();
		$this->load->model('post_model');
	}
	public function clist()
	{	
		$data['title']= "Posts";
		$data['user'] = $this->session->userdata('user');
		if ($this->session->userdata('user')) {
			$data['posts'] = $this->post_model->clist($this->session->userdata('user')->id);
		}
		

		$this->load->view('templates/header');
		$this->load->view('posts/clist',$data);
		$this->load->view('templates/footer');
	}
	public function create()
	{
		$this->form_validation->set_rules('post[text]', 'Content of tweet', 'required');
		if ($this->form_validation->run() !== FALSE) {
			$this->post_model->create($this->input->post('post'),$this->session->userdata('user')->id);
			redirect('');
		}
	}
}