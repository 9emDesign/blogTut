<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function register($encrypt)
	{
		$data=array(
			'name'=>$this->input->post('name'),
			'address'=>$this->input->post('address'),
			'zipcode'=>$this->input->post('zip'),
			'email'=>$this->input->post('email'),
			'password'=>$encrypt
		);

		$this->db->insert('users',$data);
	}

	public function newPassword($encrypt)
	{
		$data=array(
			'password' => $encrypt
		);

		$this->db->update('users',$data);
	}

	public function login($email, $password)
	{
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$result=$this->db->get('users');
		if ($result->num_rows() == 1) {
			return $result->row(0)->id;
		}else{
			return false;
		}
	}


}

/* End of file User_model.php */
