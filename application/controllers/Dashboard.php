<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		
		$data['gallery'] = $this->gallery_model->tampil_data('gallery')->result();
		$data['menu'] = $this->menu_model->tampil_data('menu')->result();
		$data['kategori'] = $this->kategori_model->tampil_data('kategori')->result();
		$data['testimoni'] = $this->kategori_model->tampil_data('testimoni')->result();
		$data['title'] = "Restoran";
		$this->load->view('templates_restoran/header',$data);
		
		$this->load->view('restoran/dashboard');
		$this->load->view('templates_restoran/footer');		
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */