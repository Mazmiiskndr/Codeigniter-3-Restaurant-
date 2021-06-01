<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
    {
        parent::__construct();  
        cek_login();
        cek_user();
    }

	public function index()
	{
		$data['contact'] = $this->contact_model->tampil_data('contact')->result();
		$data['title'] = "Contact | Restoran";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/contact');
		$this->load->view('templates_admin/footer');	
	}

 


	public function delete_contact($id)
	{
		$where = array('id_contact' => $id);
		$this->contact_model->hapus_data($where,'contact');
		$this->session->set_flashdata('pesan','
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Data Contact Berhasil di <strong>Hapus!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
		redirect('admin/contact');
	}


}

/* End of file Kategori_menu.php */
/* Location: ./application/controllers/admin/Kategori_menu.php */