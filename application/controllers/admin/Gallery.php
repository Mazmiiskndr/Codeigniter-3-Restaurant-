<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function __construct()
    {
        parent::__construct();  
        cek_login();
        cek_user();
    }

	public function index()
	{
		$data['gallery'] = $this->gallery_model->tampil_data('gallery')->result();
	
		$data['title'] = "Gallery | Restoran";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/gallery');
		$this->load->view('templates_admin/footer');	
	}

	public function tambah_data_gallery()
	{
		$nama 				= htmlspecialchars($this->input->post('nama'));

		$gambar 				= $_FILES['gambar']['name'];

			if($gambar){
				$config ['upload_path'] = './assets/uploads/gallery';
				$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);
				
				if( $this->upload->do_upload('gambar') ){
					$gambar = $this->upload->data('file_name');
					$this->db->set('gambar',$gambar);
				}else{
					echo "Photo Gallery Gagal Diupload!";

				}
			}
		
 

			$data = array(

				'gambar' 			=> $gambar,
				'nama' 			=> $nama


			);

			$this->gallery_model->insert_gallery($data,'gallery');
			$this->session->set_flashdata('pesan','
				<div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
  					Data Gallery Berhasil di <strong>Tambahkan!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/gallery');


	}


	public function edit_gallery($id)
	{
		$data['detail'] = $this->gallery_model->ambil_id_gallery($id);
		

		$data['title'] = "Edit Menu | Restoran";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/edit_gallery');
		$this->load->view('templates_admin/footer');	
	}

	public function update_gallery_aksi()
	{
		
			$id_gallery 			= $this->input->post('id_gallery');
			$nama 					= htmlspecialchars($this->input->post('nama'));

			
			$gambar 				= $_FILES['gambar']['name'];

			if($gambar){
				$config ['upload_path'] = './assets/uploads/gallery';
				$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);
				
				if( $this->upload->do_upload('gambar') ){
					$gambar = $this->upload->data('file_name');
					$this->db->set('gambar',$gambar);
				}else{
					echo "Photo Gambar Gagal Diupload!";

				}
			}

			$data = array(
		
				'nama' 				=> $nama,
		

			);

			$where = array('id_gallery' => $id_gallery);

			$this->gallery_model->update_data($where,$data,'gallery');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Gallery Berhasil di <strong>Update!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/gallery');



		
	}

	public function delete_gallery($id)
	{
		$where = array('id_gallery' => $id);
		$this->gallery_model->hapus_data($where,'gallery');
		$this->session->set_flashdata('pesan','
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Data Gallery Berhasil di <strong>Hapus!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
		redirect('admin/gallery');
	}

}


/* End of file Menu.php */
/* Location: ./application/controllers/admin/Menu.php */