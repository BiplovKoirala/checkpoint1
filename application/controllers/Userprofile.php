<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userprofile extends CI_Controller {

	public function index()
	{

		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];

			//if session is on, than the below steps will be loaded

			$this->load->view('adminheader');
			$this->load->view('user_profile');

		}

		else
		{
     //If no session, redirect to login page
			redirect('login', 'refresh');
		}

	}
}
