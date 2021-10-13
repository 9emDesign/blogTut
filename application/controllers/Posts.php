<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

	public function index()
	{
		$data['title']= 'Latest Posts';
		$data['posts']= $this->Post_model->get_posts();
		$this->load->view('templates/header');
		$this->load->view('posts/index',$data);
		$this->load->view('templates/footer');
	}
 
	public function view($slug = null)
	{
		$data['post'] = $this->Post_model->get_posts($slug);
		$post_id = $data['post']['id'];
		$data['comment'] = $this->Comment_model->get_comment($post_id);

		if (empty($data['post'])) {
			show_404();
		}

		$data['title'] = $data['post']['title'];
		$this->load->view('templates/header');
		$this->load->view('posts/view',$data);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		if (!$this->session->userdata('Logged_in')) {
			
			redirect('login');
			
		}
		$data['title'] = 'Create new post';
		$data['categories'] = $this->Post_model->get_categories();
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('sub_title','Sub Tile','required');
		$this->form_validation->set_rules('slug','Slug','required');
		$this->form_validation->set_rules('body','Body','required');
		$this->form_validation->set_error_delimiters('<div class="callout alert">', '</div>');
		if ($this->form_validation->run() === false) {
		$this->load->view('templates/header');
		$this->load->view('posts/create',$data);
		$this->load->view('templates/footer');	
		}else{
			$this->Post_model->create_post();
			$this->session->set_flashdata('success', '<div class="callout success"> Your post has been created!</div>');
			$this->load->view('templates/header');
			$this->load->view('posts/create',$data);
			$this->load->view('templates/footer');
			
		}
		
	}

	public function delete($id)
	{
			if (!$this->session->userdata('Logged_in')) {
			
			redirect('login');
			
		}

	if (!$this->session->userdata('Logged_in')) {
			
			redirect('login');
			
		}		$this->Post_model->delete_post($id);
		
		redirect('posts');
		
	}

	public function edit($slug)
	{
			if (!$this->session->userdata('Logged_in')) {
			
			redirect('login');
			
		}
		$data['post'] = $this->Post_model->get_posts($slug);
		if (empty($data['post'])) {
			show_404();
		}

		$data['title'] = 'Edit Posts';
		$data['categories'] = $this->Post_model->get_categories();
		$this->load->view('templates/header');
		$this->load->view('posts/edit',$data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
			if (!$this->session->userdata('Logged_in')) {
			
			redirect('login');
			
		}
		$this->Post_model->update_posts();
		
		redirect('posts');
		
	}
}

/* End of file Posts.php */
