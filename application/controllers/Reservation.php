<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller {

	public function index()
	{
		$data['testimoni'] = $this->kategori_model->tampil_data('testimoni')->result();
	
		$data['title'] = "Reservation | Restoran";
		$this->load->view('templates_restoran/header',$data);
		
		$this->load->view('restoran/reservation');
		$this->load->view('templates_restoran/footer');		
	} 


	public function tambah_booking_aksi()
	{
		$this->_rulesReservasi();
		if($this->form_validation->run() == false){
			$this->index();
		}else{

		$nama 				= htmlspecialchars($this->input->post('nama'));
			$email 				= htmlspecialchars($this->input->post('email'));
			$no_hp 				= htmlspecialchars($this->input->post('no_hp'));
			$no_meja 			= htmlspecialchars($this->input->post('no_meja'));
			$select_person 		= htmlspecialchars($this->input->post('select_person'));
			$status 		= htmlspecialchars($this->input->post('status'));
			$time 				= htmlspecialchars($this->input->post('time'));
			$date 				= htmlspecialchars($this->input->post('date'));
			$status 			= "Pending";
		
 

			$data = array(

				'nama' 			=> $nama,
				'email' 		=> $email,
				'no_hp' 		=> $no_hp,
				'no_meja' 		=> $no_meja,
				'select_person' => $select_person,
				'status' 		=> $status,
				'time' 			=> $time,
				'status' 		=> $status,
				'date' 			=> $date

			);

			$this->booking_model->insert_booking($data,'booking');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Booking berhasil. Silahkan datang ke <strong>Restoran!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('reservation');
		}

	}


	public function _rulesReservasi()
	{
		$this->form_validation->set_rules('nama','Nama','required',
			[
				'required' => "Nama tidak boleh kosong",
			]
		);
		$this->form_validation->set_rules('email','Nama Menu','required|valid_email',
			[
				'required' => "Email tidak boleh kosong",
			]
		);
		$this->form_validation->set_rules('no_hp','No. HP','required',
			[
				'required' => "No. HP tidak boleh kosong",
			]
		);
		$this->form_validation->set_rules('no_meja','No. Meja','required',
			[
				'required' => "No. Meja tidak boleh kosong",
			]
		);

	}

}

/* End of file Reservation.php */
/* Location: ./application/controllers/Reservation.php */