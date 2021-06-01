<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();  
        cek_login();
        cek_user();
    }

	public function index()
	{
		$data['jumlah_menu'] 		= $this->menu_model->get_jumlah_menu();
		$data['jumlah_gallery'] 	= $this->gallery_model->get_jumlah_gallery();
		$data['jumlah_booking'] 	= $this->booking_model->get_jumlah_booking();
		$data['jumlah_testimoni'] 	= $this->testimoni_model->get_jumlah_testimoni();
		$data['menu'] 				= $this->menu_model->tampil_data('menu')->result();
		$data['team'] 				= $this->team_model->tampil_data('team')->result();
		$data['title']				= "Dashboard Admin | Restoran";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/dashboard');
		$this->load->view('templates_admin/footer');		
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */