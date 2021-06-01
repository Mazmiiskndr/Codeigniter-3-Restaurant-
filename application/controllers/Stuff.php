<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stuff extends CI_Controller {

	public function index()
	{
		$data['team'] = $this->team_model->tampil_data('team')->result();
		$data['testimoni'] = $this->kategori_model->tampil_data('testimoni')->result();
		$data['title'] = "Stuff | Restoran";
		$this->load->view('templates_restoran/header',$data);
		
		$this->load->view('restoran/stuff');
		$this->load->view('templates_restoran/footer');	
	}

}

/* End of file Stuff.php */
/* Location: ./application/controllers/Stuff.php */