<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {
	public function __construct() {
		parent:: __construct();
		$this->load->library('form_validation');
		$this->load->model('M_master');
		if($this->session->userdata('akses')!= "Pengunjung" ) {
			redirect(base_url('Welcome'));
		}
		
		
	}
	
	public function index()
	{
		$data['title'] = 'Selamat Datang';
		$data['master'] = $this->M_master->getAk();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/topbar', $data);
		
		$this->load->view('master/index', $data);
		$this->load->view('templates/footer', $data);
	}

	public function Add()
	{
		$data['title'] = 'Tambah Data';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('master/add', $data);
		$this->load->view('templates/footer', $data);
	}

	public function aksi_add()
	{
		$data['title'] = "Tambah Data";

		$this->form_validation->set_rules('aktivitas', 'Aktivitas', 'trim|required');
		$this->form_validation->set_rules('jam', 'Jam', 'trim|required');
		$this->form_validation->set_rules('kegiatan', 'Kegiatan', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
		
		if($this->form_validation->run() == FALSE) 
		{
			$this->load->view('templates/header', $data);
			$this->load->view('templates/navbar', $data);
			$this->load->view('master/add', $data);
			$this->load->view('templates/footer', $data);
		}else{
			$this->M_master->add();
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Tambah Data Berhasil !</div>');
            redirect(base_url('Master/'));
		}
	}

	public function Update($id)
	{
		$data['title'] = 'Update Data';
		$data['view'] = $this->M_master->idAk($id);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('master/update', $data);
		$this->load->view('templates/footer');
	}

	public function aksi_update($id)
	{
		$data['judul'] = 'Update Data';
		$data['view'] = $this->M_master->idAk($id);

		$this->form_validation->set_rules('aktivitas', 'Aktivitas', 'trim|required');
		$this->form_validation->set_rules('jam', 'Jam', 'trim|required');
		$this->form_validation->set_rules('kegiatan', 'Kegiatan', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('master/update', $data);
		$this->load->view('templates/footer');
		}else{
			$this->M_master->updateAk();
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Update Data Berhasil !</div>');
            redirect(base_url('master/'));
		}
	}

	public function remove($id)
	{
		$this->M_master->hapusAk($id);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Delete Data Berhasil !</div>');
        redirect(base_url('master/'));

	}

	public function Read($id)
	{
		$data['title'] = 'Read Data';
		$data['read'] = $this->M_master->idAk($id);

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('master/read', $data);
		$this->load->view('templates/footer');
	}





}
