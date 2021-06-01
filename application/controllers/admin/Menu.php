<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct()
    {
        parent::__construct();  
        cek_login();
        cek_user();
    }

	public function index()
	{
		$data['menu'] = $this->menu_model->tampil_data('menu')->result();
		$data['kategori'] = $this->kategori_model->tampil_data('kategori')->result();
		$data['title'] = "Menu | Restoran";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/menu');
		$this->load->view('templates_admin/footer');	
	}

	public function tambah_data_menu()
	{
		$this->_rulesMenu();
		if($this->form_validation->run() == false){
			$this->index();
		}else{

		$nama_kategori 			= htmlspecialchars($this->input->post('nama_kategori'));
	
		$kode 				= htmlspecialchars($this->input->post('kode'));
		$nama 				= htmlspecialchars($this->input->post('nama'));
		$harga 				= htmlspecialchars($this->input->post('harga'));
		$deskripsi 				= htmlspecialchars($this->input->post('deskripsi'));
		$date 				= date('Y-m-d');
	


		$gambar 				= $_FILES['gambar']['name'];

			if($gambar){
				$config ['upload_path'] = './assets/uploads/menu';
				$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);
				
				if( $this->upload->do_upload('gambar') ){
					$gambar = $this->upload->data('file_name');
					$this->db->set('gambar',$gambar);
				}else{
					echo "Photo Menu Gagal Diupload!";

				}
			}
		
 

			$data = array(
				'nama_kategori' 		=> $nama_kategori,
				'kode' 				=> $kode,
				'nama' 				=> $nama,
				'harga' 			=> $harga,
				'deskripsi' 		=> $deskripsi,
				'date' 				=> $date,
				'gambar' 			=> $gambar


			);

			$this->menu_model->insert_menu($data,'menu');
			$this->session->set_flashdata('pesan','
				<div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
  					Data Menu Berhasil di <strong>Tambahkan!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/menu');
		}

	}


	public function edit_menu($id)
	{
		$data['detail'] = $this->menu_model->ambil_id_menu($id);
		$data['kategori'] = $this->kategori_model->tampil_data('kategori')->result();

		$data['title'] = "Edit Menu | Restoran";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/edit_menu');
		$this->load->view('templates_admin/footer');	
	}

	public function update_menu_aksi()
	{
		
			$id_menu 			= $this->input->post('id_menu');
		
			$nama_kategori 			= htmlspecialchars($this->input->post('nama_kategori'));
			$nama 			= htmlspecialchars($this->input->post('nama'));
			$kode 				= htmlspecialchars($this->input->post('kode'));
			$deskripsi 				= htmlspecialchars($this->input->post('deskripsi'));
			$harga 				= htmlspecialchars($this->input->post('harga'));
			
			$gambar 				= $_FILES['gambar']['name'];

			if($gambar){
				$config ['upload_path'] = './assets/uploads/menu';
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
		
				'nama_kategori' 	=> $nama_kategori,
				'nama' 				=> $nama,
				'kode' 				=> $kode,
				'deskripsi' 		=> $deskripsi,
				'harga' 			=> $harga

			);

			$where = array('id_menu' => $id_menu);

			$this->menu_model->update_data($where,$data,'menu');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Menu Berhasil di <strong>Update!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/menu');



		
	}

	public function delete_menu($id)
	{
		$where = array('id_menu' => $id);
		$this->menu_model->hapus_data($where,'menu');
		$this->session->set_flashdata('pesan','
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Data Menu Berhasil di <strong>Hapus!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
		redirect('admin/menu');
	}

	public function _rulesMenu()
	{
		$this->form_validation->set_rules('kode','Kode Menu','required',
			[
				'required' => "Kode Menu tidak boleh kosong",
			]
		);
		$this->form_validation->set_rules('nama','Nama Menu','required',
			[
				'required' => "Nama Menu tidak boleh kosong",
			]
		);
		$this->form_validation->set_rules('harga','Harga Menu','required',
			[
				'required' => "Harga Menu tidak boleh kosong",
			]
		);
		$this->form_validation->set_rules('deskripsi','Deskripsi Menu','required',
			[
				'required' => "Deskripsi Menu tidak boleh kosong",
			]
		);

	}
}


/* End of file Menu.php */
/* Location: ./application/controllers/admin/Menu.php */