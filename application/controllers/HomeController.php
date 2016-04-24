<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('home_view');
		$this->load->view('footer');
	}
	public function registration()
	{
		$this->load->view('reg_view');
	}
}

?>