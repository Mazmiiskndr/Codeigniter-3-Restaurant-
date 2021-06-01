<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	public function __construct()
    {
        parent::__construct();  
        cek_login();
        cek_user();
    }

	public function index()
	{
		$data['booking'] = $this->booking_model->tampil_data('booking')->result();
		$data['title'] = "Booking | Restoran";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/booking');
		$this->load->view('templates_admin/footer');	
	}

 
	public function edit_booking($id)
	{
		$data['detail'] = $this->booking_model->ambil_id_booking($id);

		$data['title'] = "Edit Kategori | Restoran";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/edit_booking');
		$this->load->view('templates_admin/footer');
	}

 
	public function update_booking_aksi()
	{
		
		$this->_rulesBooking();
		if($this->form_validation->run() == false){
			$this->edit_booking();
		}else{
			$id_booking 		= htmlspecialchars($this->input->post('id_booking'));
			$nama 				= htmlspecialchars($this->input->post('nama'));
			$email 				= htmlspecialchars($this->input->post('email'));
			$no_hp 				= htmlspecialchars($this->input->post('no_hp'));
			$no_meja 			= htmlspecialchars($this->input->post('no_meja'));
			$select_person 		= htmlspecialchars($this->input->post('select_person'));
			$status 		= htmlspecialchars($this->input->post('status'));
			$time 				= htmlspecialchars($this->input->post('time'));
			$date 				= htmlspecialchars($this->input->post('date'));
		
 

			$data = array(

				'nama' 			=> $nama,
				'email' 		=> $email,
				'no_hp' 		=> $no_hp,
				'no_meja' 		=> $no_meja,
				'select_person' => $select_person,
				'status' 		=> $status,
				'time' 			=> $time,
				'date' 			=> $date

			);

			$where = array('id_booking' => $id_booking);

			$this->booking_model->update_data($where,$data,'booking');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Booking Berhasil di <strong>Update!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/booking');



		} 
	}

	public function delete_booking($id)
	{
		$where = array('id_booking' => $id);
		$this->booking_model->hapus_data($where,'booking');
		$this->session->set_flashdata('pesan','
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Data Kategori Berhasil di <strong>Hapus!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
		redirect('admin/booking');
	}

	public function _rulesBooking()
	{
		$this->form_validation->set_rules('nama','Nama','required',
			[
				'required' => "Nama tidak boleh kosong",
			]
		);
		$this->form_validation->set_rules('email','Email','required',
			[
				'required' => "Email tidak boleh kosong",
			]
		);
		$this->form_validation->set_rules('no_hp','No. HP','required',
			[
				'required' => "No. HP tidak boleh kosong",
			]
		);

	}

}

/* End of file Kategori_menu.php */
/* Location: ./application/controllers/admin/Kategori_menu.php */