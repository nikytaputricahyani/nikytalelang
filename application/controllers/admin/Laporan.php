<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

		
	public function index()
	{
		$args = [
			'judul' => 'Laporan'
		];
		
		$this->load->view('templates_admin/header', $args);
		$this->load->view('templates_admin/sidebar', $args);
		$this->load->view('admin/laporan/v_laporan', $args);
		$this->load->view('templates_admin/footer');
	}
	
	public  function laporan_lelang()
	{
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/laporan/v_laporan_lelang');
		$this->load->view('templates_admin/footer');
	}

	public function cetak_laporan_lelang()
	{
		//load library
		$this->load->model('Lelang_model');
		$this->load->library('pdf');

		$tgl_lelang_awal = $this->input->post('tgl_lelang_awal');
		$tgl_lelang_akhir = $this->input->post('tgl_lelang_akhir');
	
		// load model dashboard
		$data['laporan'] = $this->Lelang_model->filter_laporan($tgl_lelang_awal, $tgl_lelang_akhir, 'dibuka');

		$this->session->set_userdata('tgl_lelang_awal', $tgl_lelang_awal);
		$this->session->set_userdata('tgl_lelang_akhir', $tgl_lelang_akhir);

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-lelang.pdf";

		// run dompdf
		$this->pdf->load_view('admin/laporan/cetak_laporan_lelang', $data);
	}
	

	public function cetak_laporan() {
		//load library
		$this->load->model('Lelang_model');
		$this->load->library('pdf');

		$tgl_lelang_awal = $this->input->post('tgl_lelang_awal');
		$tgl_lelang_akhir = $this->input->post('tgl_lelang_akhir');
	
		// load model dashboard
		$data['laporan'] = $this->Lelang_model->filter_laporan($tgl_lelang_awal, $tgl_lelang_akhir, 'ditutup');

		$this->session->set_userdata('tgl_lelang_awal', $tgl_lelang_awal);
		$this->session->set_userdata('tgl_lelang_akhir', $tgl_lelang_akhir);

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-lelang.pdf";

		// run dompdf
		$this->pdf->load_view('admin/laporan/cetak_laporan', $data);
	}

	public function cetak_laporan_masyarakat() {
		//load library
		$this->load->model('Lelang_model');
		$this->load->library('pdf');

		// load model dashboard
		$data['laporan'] = $this->Lelang_model->laporan_masyarakat();

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-lelang.pdf";

		// run dompdf
		$this->pdf->load_view('admin/laporan_masyarakat/cetak_laporan_masyarakat', $data);
	}

	public function laporan_barang()
	{
		$args = [
			'judul' => 'Laporan Barang'
		];
		
		$this->load->view('templates_admin/header', $args);
		$this->load->view('templates_admin/sidebar', $args);
		$this->load->view('admin/laporan_barang/v_laporan_barang', $args);
		$this->load->view('templates_admin/footer');
	}
		
	public function cetak_laporan_barang() {
		//load library
		$this->load->model('Lelang_model');
		$this->load->library('pdf');

		// load model dashboard
		$data['laporan'] = $this->Lelang_model->laporan_barang();

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-lelang.pdf";

		// run dompdf
		$this->pdf->load_view('admin/laporan_barang/cetak_laporan_barang', $data);
	}

}

	
	