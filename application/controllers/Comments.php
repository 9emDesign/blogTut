<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Comments extends CI_Controller {

	public function create($post_id)
	{
		$slug=$this->input->post('slug');
		$data['post']=$this->Post_model->get_posts($slug);
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','email','required|valid_email');
		$this->form_validation->set_rules('body','Body','required');
		$this->form_validation->set_error_delimiters('<div class="callout alert">','<div>');
		if ($this->form_validation->run() === false) {
			$this->load->view('templates/header');
			$this->load->view('posts/view',$data);
			$this->load->view('templates/footer');
	    }else{
		$this->Comment_model->get_comments($post_id);
		redirect('posts/'.$slug);
		}
	
	}
}
