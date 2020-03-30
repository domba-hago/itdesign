<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('itdesign');

		if ($this->session->userdata('login') != 1) redirect(base_url('signin'));
		if ($this->session->userdata('level') != 1) redirect(base_url(''));
	}

	function index()
	{
		$data['title']	= 'Admin Dashboard';
		$data['active']	= 'index';
		$data['nlogo']	= $this->itdesign->getDesignCount()->num_rows();
		$data['nuser']	= $this->itdesign->getUserCount();

		$this->itdesign->renderAdminView('index', $data);
	}

	function design()
	{
		$data['title']	= 'Daftar Desain';
		$data['active']	= 'design';
		$data['design']	= $this->itdesign->getDesignCount()->result();

		$this->itdesign->renderAdminView('design', $data);
	}

	function design_tambah()
	{
		$data['title']		= 'Tambah Desain';
		$data['active']		= 'design';
		$data['kategori']	= $this->itdesign->getKategori('');

		$this->itdesign->renderAdminView('design.tambah.php', $data);
	}

	function order()
	{
		$data['title']		= 'Permintaan Desain';
		$data['active']		= 'order';
		$data['data']		= $this->itdesign->getTransaksi();

		$this->itdesign->renderAdminView('order', $data);
	}
}