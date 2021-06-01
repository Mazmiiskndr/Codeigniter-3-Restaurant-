<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function index()
	{
		$data['gallery'] = $this->gallery_model->tampil_data('gallery')->result();
		$data['testimoni'] = $this->kategori_model->tampil_data('testimoni')->result();
		$data['title'] = "Gallery | Restoran";
		$this->load->view('templates_restoran/header',$data);
		
		$this->load->view('restoran/gallery');
		$this->load->view('templates_restoran/footer');
	}

}

/* End of file Gallery.php */
/* Location: ./application/controllers/Gallery.php */