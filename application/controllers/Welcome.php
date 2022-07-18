<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
public function __construct() {
		parent:: __construct();
		$this->load->library('form_validation');
		$this->load->model('M_master');
		
		
	}
	
	public function index()
	{
		$this->load->view('welcome_message');
	}


	public function daftar()
	{
		$this->load->view('daftar');
	}

	public function aksi_daftar()
	{
		if($this->session->userdata('username'))
		{
			redirect('/welcome');
		}

		$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[pengunjung.username]', [
				'is_unique' => 'Username Sudah Terdaftar !'
		]);
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|matches[password2]', [
				'min_length' => 'Password terlalu pendek minimal 5 karakter',
				'matches'	=> 'Password tidak sesuai'
		]);
		$this->form_validation->set_rules('password2', 'Konformasi Password', 'trim|required|matches[password]', [
			'matches' => 'Password tidak sesuai'
		]);
		

		if($this->form_validation->run() == false) {
			$data['title'] = 'Daftar';
			$this->load->view('daftar', $data);
		}else{
			$data = [
				'username' => htmlspecialchars($this->input->post('username', true)),
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			];
			$this->db->insert('pengunjung', $data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Daftar Berhasil, Silahkan login !</div>');
			base_url(redirect('/welcome'));
		}
	}

	public function login()
	{
		$data['judul'] = 'Halaman Login';

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if($this->form_validation->run() == FALSE) 
		{
			$this->load->view('welcome_message', $data );
		}else{
			$this->_masuk();
		}

	}

	private function _masuk()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('pengunjung', ['username' => $username])->row_array();

		if($user) {
			if(password_verify($password, $user['password'])) {
				$data = [
					'username' => $user['username'],
					'nama' => $user['nama'],
					'id_pengunjung' => $user['id_pengunjung'],
					'akses' => $user['akses'],
				];
				$this->session->set_userdata($data);
				if($user['akses'] == 'Pengunjung') {
					redirect(base_url('Master'));
				}elseif($user['akses'] == 'Pengunjung') {
					redirect(base_url('Master'));
				
				}
			}else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password Salah !</div>');
        		redirect(base_url('/welcome'));
			}
		}else{
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Username Salah !</div>');
        	redirect(base_url('/welcome'));
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		

		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Logout Berhasil !</div>');
        	redirect(base_url('/welcome'));
	} 




}
