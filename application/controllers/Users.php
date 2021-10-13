<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function register()
	{
		$data['title'] = 'Register new User';
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('address','Address','required');
		$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('conf_pass','Confirm Password','matches[password]');
		$this->form_validation->set_error_delimiters('<div class="callout alert">', '</div>');
		if ($this->form_validation->run() === false) {
		$this->load->view('templates/header');
		$this->load->view('users/register',$data);
		$this->load->view('templates/footer');	
		}else{
			$encrypt=md5($this->input->post('password'));
			$this->User_model->register($encrypt);
			$this->session->set_flashdata('success', '<div class="callout success"> Your new account has been created!</div>');
			$this->load->view('templates/header');
			$this->load->view('users/register',$data);
			$this->load->view('templates/footer');
			
		}

	}

	public function login()
	{
		
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_error_delimiters('<div class="callout alert">', '</div>');
		if ($this->form_validation->run() === false) {
			$data['title'] = 'Login';
			$this->load->view('templates/header');
			$this->load->view('users/login',$data);
			$this->load->view('templates/footer');	
		}else{
			$email=$this->input->post('email');
			$password=md5($this->input->post('password'));
			$user_id=$this->User_model->login($email,$password);
			if ($user_id) {
					$user_data = array(
				'user_id' => $user_id,
				'email' => $email,
				'Logged_in' => true  
			);	
			$this->session->set_userdata($user_data);
		
			$data['title']='Dashboard';
			$this->load->view('templates/header');
			$this->load->view('users/dashboard',$data);
			$this->load->view('templates/footer');
			$this->session->set_flashdata('success', '<div class="callout success"> You are logged in!</div>');

			}else{
				
				redirect('login');
				
			}
					
			
		}
	}

	public function logout()
	{
	$this->session->sess_destroy();
	redirect('login');
				
	}

	public function newPass()
	{
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('conf_pass','Confirm Password','matches[password]');
		$this->form_validation->set_error_delimiters('<div class="callout alert">', '</div>');
		if ($this->form_validation->run() === false) {
		$data['title'] = 'Dashboard';
		$this->load->view('templates/header');
		$this->load->view('users/dashboard',$data);
		$this->load->view('templates/footer');	
		}else{
			$encrypt=md5($this->input->post('password'));
			$this->User_model->newPassword($encrypt);
			redirect('pages/view');
			
		}

		}

		public function dashboard()
		{
			$data['title'] = 'Dashboard';
		$this->load->view('templates/header');
		$this->load->view('users/dashboard',$data);
		$this->load->view('templates/footer');	
		}

}
