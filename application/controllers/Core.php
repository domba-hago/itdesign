<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Core extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('itdesign');
	}

	function signin()
	{
		$username	= $this->input->post('username');
		$password	= md5($this->input->post('password'));

		$ret = $this->db->select('*')->from('users')->where(array('username' => $username, 'password' => $password))->get();
		if ($ret->num_rows() > 0)
		{
			$this->session->set_flashdata('status', "<p class='status alert alert-success'>Akun Anda teah terdaftar di sistem</p>");
			foreach ($ret->result() as $row)
			{
				$sess_data = array('login' => 1, 'username' => $username, 'level' => $row->level);
				$this->session->set_userdata($sess_data);
				redirect(base_url('admin'));
			}
		}
		else
		{
			$this->session->set_flashdata('status', "<p class='status alert alert-danger'>Username atau password yang Anda masukan salah</p>");
			redirect(base_url('signin'));
		}
	}

	function signout()
	{
		$this->session->sess_destroy();
		redirect(base_url(''));
	}

	function design_tambah()
	{
		$ret = $this->itdesign->UploadImage('design-' . ($this->itdesign->getDesignCount()->num_rows() + 1));

		$data['nama']			= $this->input->post('nama');
		$data['id_kategori']	= $this->input->post('kategori');
		$data['pembuat']		= $this->input->post('pembuat');
		$data['tanggal']		= $this->input->post('tanggal');
		$data['mobile']			= $this->input->post('mobile');
		$data['email']			= $this->input->post('email');
		$data['harga']			= $this->input->post('harga');
		$data['deskripsi']		= $this->input->post('deskripsi');
		$data['gambar']			= $ret;
		$data['status']			= 1;

		$this->db->insert('design', $data);
		$this->session->set_flashdata('status', "<p class='status alert alert-success'>Desain sudah ditambahkan kedalam database</p>");

		redirect(base_url('admin/design'));
	}

	function design_konfirmasi($id)
	{
		$idnya = 0;

		$this->db->update('transaksi', array('konfirmasi' => 1), array('id' => $id));
		foreach ($this->itdesign->getTransaksiOnly() as $row) $idnya = $row->id_design;
		$this->db->update('design', array('status' => 0), array('id_design' => $idnya));

		redirect(base_url('admin/order'));
	}

	function pesan()
	{
		$data['pembeli']		= $this->input->post('nama');
		$data['id_design']		= $this->input->post('id_design');
		$data['bayar']			= 0;
		$data['konfirmasi']	= 0;

		$this->db->insert('transaksi', $data);
		$this->session->set_flashdata('status', "<p class='status alert alert-success'>Terima kasih sudah menggunakan layanan kami. Anda akan segera dihubungi oleh pihak penyedia desain tersebut untuk informasi lebih lanjut</p>");

		redirect(base_url('pesan/sukses'));
	}
}