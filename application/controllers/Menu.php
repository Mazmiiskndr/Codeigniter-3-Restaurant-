<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function index()
	{
		$data['testimoni'] = $this->kategori_model->tampil_data('testimoni')->result();
		$data['menu'] = $this->menu_model->tampil_data('menu')->result();
		$data['kategori'] = $this->kategori_model->tampil_data('kategori')->result();
		$data['title'] = "Menu | Restoran";
		$this->load->view('templates_restoran/header',$data);
		
		$this->load->view('restoran/menu');
		$this->load->view('templates_restoran/footer');	
	}

}

/* End of file Menu.php */
/* Location: ./application/controllers/Menu.php */