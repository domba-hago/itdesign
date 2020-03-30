<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Itdesign extends CI_Model
{
	
	function renderView($page, $data)
	{
		$this->load->view('pages/header', $data);
		$this->load->view($page, $data);
		$this->load->view('pages/footer', $data);
	}

	function renderAdminView($page, $data)
	{
		$this->load->view('admin/pages/header', $data);
		$this->load->view('admin/' . $page, $data);
		$this->load->view('admin/pages/footer', $data);
	}

	function seoUrl($string)
	{
	    $string = strtolower($string);
	    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
	    $string = preg_replace("/[\s-]+/", " ", $string);
	    $string = preg_replace("/[\s_]/", "-", $string);
	    
	    return $string;
	}

	function unSeoUrl($string)
	{
		$string = str_replace("-", " ", $string);
		$string = ucwords($string);

		return $string;
	}

	function UploadImage($filename)
	{
		$config['upload_path'] 		= 'assets/design/';
		$config['allowed_types'] 	= 'jpg|jpeg|png|gif';
		$config['file_name'] 		= $filename;

		//Load upload library and initialize configuration
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if($this->upload->do_upload('picture'))
		{
			$uploadData = $this->upload->data();
			$picture = $uploadData['file_name'];
		} else
		{
			$picture = '';
		}

		return $picture;
	}

	function formatNumber($value)
	{
		return "IDR " . number_format($value);
	}

	function getDesignCount()
	{
		$query = $this->db->select('*')->from('design')->join('kategori', 'design.id_kategori=kategori.id')->order_by('id_design', 'ASC')->get();
		return $query;
	}

	function getUserCount()
	{
		$query = $this->db->select('*')->from('users')->where_not_in('level', 1)->get();
		return $query->num_rows();
	}

	function getKategori($nama_kat)
	{
		$query = '';

		if ($nama_kat)
			$query = $this->db->select('*')->from('kategori')->where(array('kategori' => $nama_kat))->get();
		else
			$query = $this->db->select('*')->from('kategori')->get();

		return $query->result();
	}

	function getDesignNew()
	{
		$query = $this->db->select('*')->from('design')->order_by('tanggal', 'DESC')->limit(4)->get();
		return $query->result();
	}

	function getDesignPromo()
	{
		
	}

	function getDesign($id_kat)
	{
		$query = $this->db->select('*')->from('design')->where(array('id_kategori' => $id_kat))->get();
		return $query->result();
	}

	function getDesignDetails($id_design)
	{
		$query = $this->db->select('*')->from('design')->where(array('id_design' => $id_design))->join('kategori', 'design.id_kategori=kategori.id')->get();
		return $query->result();
	}

	function getTransaksi()
	{
		$query = $this->db->select('*')->from('transaksi')->join('design', 'transaksi.id_design=design.id_design')->get();
		return $query->result();
	}

	function getTransaksiOnly()
	{
		$query = $this->db->select('*')->from('transaksi')->get();
		return $query->result();
	}
}