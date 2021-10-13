<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	

	public function get_posts($slug = false)
	{
		if ($slug === false) {
			$this->db->order_by('posts.id','DESC');
			$this->db->join('categories','categories.id = posts.category_id');
			$query=$this->db->get('posts');
			return $query->result_array();
		}

		$query=$this->db->get_where('posts',array('slug' => $slug));
			return $query->row_array();
	}

	public function create_post()
	{
		$slug=url_title($this->input->post('sub_title'));
		$data=array(
			'title'=>$this->input->post('title'),
			'sub_title'=>$this->input->post('sub_title'),
			'slug'=>$slug,
			'body'=>$this->input->post('body'),
			'category_id'=>$this->input->post('categories'),
			'user_id' => $this->session->userdata('user_id')
		);

		$this->db->insert('posts',$data);
	}

	public function delete_post($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('posts');
		return true;
	}

	public function update_posts()
	{
		$slug=url_title($this->input->post('sub_title'));
		$data=array(
			'title'=>$this->input->post('title'),
			'sub_title'=>$this->input->post('sub_title'),
			'slug'=>$slug,
			'body'=>$this->input->post('body'),
			'category_id'=>$this->input->post('categories')
		);
		$this->db->where('id',$this->input->post('id'));
		return $this->db->update('posts',$data);
		
	}

	public function get_categories()
	{
		$this->db->order_by('name');
		$query=$this->db->get('categories');
		return $query->result_array();
	}
}

/* End of file Post_model.php */
