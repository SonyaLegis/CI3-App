<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_master extends CI_Model {

	public function getAk()
	{
		return $this->db->get('tbl_master')->result_array();
	}

	public function idAk($id)
	{
		return $this->db->get_where('tbl_master', ['id' => $id])->row_array();
	}

	public function add()
	{
		$data = [
				'aktivitas' => htmlspecialchars($this->input->post('aktivitas', true)),
				'tgl' => date('d-m-Y'),
				'jam' => htmlspecialchars($this->input->post('jam', true)),
				'kegiatan' => htmlspecialchars($this->input->post('kegiatan', true)),
				'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
			];
		$this->db->insert('tbl_master', $data);
	}

	public function updateAk()
	{
		$data = [
				'aktivitas' => htmlspecialchars($this->input->post('aktivitas', true)),
				'tgl' => date('d-m-Y'),
				'jam' => htmlspecialchars($this->input->post('jam', true)),
				'kegiatan' => htmlspecialchars($this->input->post('kegiatan', true)),
				'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
			];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('tbl_master', $data);
	}

	public function hapusAk($id)
	{
		$this->db->delete('tbl_master', ['id' => $id] );

	}







}