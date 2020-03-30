<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
	}

	function signin()
	{
		$this->load->view('signin');
		// $this->sessioon->set_userdata($arr_session());
	}

	function signup()
	{
		$this->load->view('signup');
	}

	function signout()
	{
		// $this->session->sess_destroy();
		redirect(base_url(''));
	}
}