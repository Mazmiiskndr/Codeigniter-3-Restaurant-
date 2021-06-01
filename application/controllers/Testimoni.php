<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends CI_Controller {

	public function index()
	{
		$data['testimoni'] = $this->kategori_model->tampil_data('testimoni')->result();
		$data['title'] = "Testimoni | Restoran";
		$this->load->view('templates_restoran/header',$data);
		$this->load->view('restoran/testimoni');
		$this->load->view('templates_restoran/footer');
	}


	public function tambah_testimoni_aksi()
	{
		$this->_rulesTestimoni();
		if($this->form_validation->run() == false){
			$this->index();
		}else{

			$nama 				= htmlspecialchars($this->input->post('nama'));
			$email 				= htmlspecialchars($this->input->post('email'));
			$deskripsi 				= htmlspecialchars($this->input->post('deskripsi'));

		
 

			$data = array(

				'nama' 			=> $nama,
				'email' 		=> $email,
				'deskripsi' 		=> $deskripsi,

			);

			$this->booking_model->insert_booking($data,'testimoni');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Testimoni berhasil. Terima kasih telah memberikan <strong>Testimoni!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('testimoni');
		}

	}


	public function _rulesTestimoni()
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
		$this->form_validation->set_rules('deskripsi','Deskripsi','required',
			[
				'required' => "Deskripsi tidak boleh kosong",
			]
		);

	}

}

/* End of file Gallery.php */
/* Location: ./application/controllers/Gallery.php */