<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('itdesign');
	}

	function index()
	{
		$data['judul']		= 'Solusi untuk segala desain Anda';
		$data['active']		= 'index';
		$data['kategori'] 	= $this->itdesign->getKategori('');
		
		$this->itdesign->renderView('index', $data);
	}

	function tentang()
	{
		$data['judul']	= 'Tentang Kami';
		$data['active']	= 'tentang';

		$this->itdesign->renderView('tentang', $data);
	}

	function design()
	{
		$args = func_get_args();
		if (count($args) > 0)
		{
			if ($args[0] == 'details' && count($args) > 1)
			{
				$data['judul'] 	= 'Detail Desain';
				$data['active']	= 'desain';
				$data['detail'] = $this->itdesign->getDesignDetails($args[1]);

				$this->itdesign->renderView('details', $data);

			}
			else if ($args[0] == 'promo')
			{
				$data['judul'] 	= 'Desain Promo';
				$data['active']	= 'promo';
				$data['data']	= $this->itdesign->getDesignPromo();

				$this->itdesign->renderView('pilihan', $data);
			}
			else if ($args[0] == 'terbaru')
			{
				$data['judul'] 	= 'Desain Terbaru';
				$data['active']	= 'terbaru';
				$data['data']	= $this->itdesign->getDesignNew();

				$this->itdesign->renderView('pilihan', $data);
			}
			else
				redirect(base_url(''));
		}
		else
			redirect(base_url(''));
	}

	function kategori($nama_kat)
	{
		$data = $this->itdesign->getKategori($this->itdesign->unSeoUrl($nama_kat));
		foreach ($data as $row)
		{
			$data['judul']		= $this->itdesign->unSeoUrl($nama_kat);
			$data['active']		= 'kategori';
			$data['kategori']	= $this->itdesign->getKategori($this->itdesign->unSeoUrl($nama_kat));
			$data['detail']		= $this->itdesign->getDesign($row->id);

			$this->itdesign->renderView('kategori', $data);
		}
	}

	function signin()
	{
		$data['judul'] 	= 'Masuk ke akun';
		$data['active']	= 'login';

		$this->itdesign->renderView('login', $data);
	}

	function pesan($id)
	{
		$data['judul']	= 'Pesan Desain';
		$data['active']	= 'null';
		$data['detail']	= $this->itdesign->getDesignDetails($id);

		$this->itdesign->renderView('pesan', $data);
	}

	function sukses()
	{
		$data['judul']	= 'Pesan Desain';
		$data['active']	= 'null';

		$this->itdesign->renderView('pesan.sukses.php', $data);
	}
}