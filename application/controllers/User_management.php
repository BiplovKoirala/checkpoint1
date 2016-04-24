<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_management extends CI_Controller
{

	public function index()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];

			//if session is on, than the below steps will be loaded

			$data['add']= true;
			$this->load->view('adminheader');
			$this->load->view("user_index",$data);
		}
		else
		{
     //If no session, redirect to login page
			redirect('login', 'refresh');
		}
	}


	public function insertdata()
	{

		$data= array(
			'fname' => $this->input->post('fname'),
			'lname' => $this->input->post('lname'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),

			);

		$this->db->insert('user', $data);
		redirect("User_management");
	}
	public function edit($id)
	{
		$row=$this->User_model->getonerow($id);
		$data['r']=$row;
		$data['add']= false;
		$this->load->view('adminheader');
		$this->load->view('edit_user',$data);
		
	}
	public function update($id)
	{
		$id=$this->input->post('id');
		$data= array(
			'fname' => $this->input->post('fname'),
			'lname' => $this->input->post('lname'),
			'email' => $this->input->post('email'));
		$this->db->where('id',$id);
		$this->db->update('user',$data);
		redirect("User_management");
		
	}
	public function delete($id)
	{
		$id=$this->db->where('id',$id);
		$this->db->delete('user',$id);
		redirect("User_management");
	}
	
}
