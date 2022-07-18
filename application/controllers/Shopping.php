<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping extends CI_Controller {
public function __construct() {
		parent:: __construct();
		$this->load->library('form_validation');
		$this->load->model('M_master');	
	}
	
	public function index()
	{
		$data['title'] = 'Selamat Shopping';
		$data['master'] = $this->M_master->getAk();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/topbar', $data);
		
		$this->load->view('shopping/index', $data);
		$this->load->view('templates/footer', $data);
	}

	public function data_barang()
	{
		$data['title'] = 'Data Barang';
		$data['master'] = $this->M_master->getAk();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/topbar', $data);
		
		$this->load->view('shopping/data_barang', $data);
		$this->load->view('templates/footer', $data);
	}


}