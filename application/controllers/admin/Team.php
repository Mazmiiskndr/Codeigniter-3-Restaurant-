<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

	public function __construct()
    {
        parent::__construct();  
        cek_login();
        cek_user();
    }

	public function index()
	{
		$data['team'] = $this->team_model->tampil_data('team')->result();
		$data['title'] = "Team | Restoran";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/team');
		$this->load->view('templates_admin/footer');	
	}

	public function tambah_data_team()
	{
		$this->_rulesTeam();
		if($this->form_validation->run() == false){
			$this->index();
		}else{

		$nama 			= htmlspecialchars($this->input->post('nama'));
		$deskripsi 		= htmlspecialchars($this->input->post('deskripsi'));
		$pekerjaan 		= htmlspecialchars($this->input->post('pekerjaan'));
		$no_hp 			= htmlspecialchars($this->input->post('no_hp'));
		$link_fb 		= htmlspecialchars($this->input->post('link_fb'));
		$gambar 		= $_FILES['gambar']['name'];

			if($gambar){
				$config ['upload_path'] = './assets/uploads/team';
				$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);
				
				if( $this->upload->do_upload('gambar') ){
					$gambar = $this->upload->data('file_name');
					$this->db->set('gambar',$gambar);
				}else{
					echo "Photo Team Gagal Diupload!";

				}
			}
			$data = array(
				'nama' 			=> $nama,
				'deskripsi' 	=> $deskripsi,
				'pekerjaan' 	=> $pekerjaan,
				'no_hp' 		=> $no_hp,
				'link_fb' 		=> $link_fb,
				'gambar' 		=> $gambar


			);

			$this->team_model->insert_team($data,'team');
			$this->session->set_flashdata('pesan','
				<div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
  					Data Team Berhasil di <strong>Tambahkan!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/team');
		}

	}


	public function edit_team($id)
	{
		$data['detail'] = $this->team_model->ambil_id_team($id);

		$data['title'] = "Edit Team | Restoran";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/edit_team');
		$this->load->view('templates_admin/footer');	
	}

	public function update_team_aksi()
	{
		
			$id_team 		= $this->input->post('id_team');
			$nama 			= htmlspecialchars($this->input->post('nama'));
			$deskripsi 		= htmlspecialchars($this->input->post('deskripsi'));
			$pekerjaan 		= htmlspecialchars($this->input->post('pekerjaan'));
			$no_hp 			= htmlspecialchars($this->input->post('no_hp'));
			$link_fb 		= htmlspecialchars($this->input->post('link_fb'));
			$gambar 		= $_FILES['gambar']['name'];

			if($gambar){
				$config ['upload_path'] = './assets/uploads/team';
				$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);
				
				if( $this->upload->do_upload('gambar') ){
					$gambar = $this->upload->data('file_name');
					$this->db->set('gambar',$gambar);
				}else{
					echo "Photo Team Gagal Diupload!";

				}
			}
			$data = array(
				'nama' 			=> $nama,
				'deskripsi' 	=> $deskripsi,
				'pekerjaan' 	=> $pekerjaan,
				'no_hp' 		=> $no_hp,
				'link_fb' 		=> $link_fb


			);

			$where = array('id_team' => $id_team);

			$this->team_model->update_data($where,$data,'team');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Team Berhasil di <strong>Update!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/team');



		
	}

	public function delete_team($id)
	{
		$where = array('id_team' => $id);
		$this->team_model->hapus_data($where,'team');
		$this->session->set_flashdata('pesan','
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Data Team Berhasil di <strong>Hapus!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
		redirect('admin/team');
	}

	public function _rulesTeam()
	{

		$this->form_validation->set_rules('nama','Nama Team','required',
			[
				'required' => "Nama Team tidak boleh kosong",
			]
		);
		$this->form_validation->set_rules('pekerjaan','Pekerjaan','required',
			[
				'required' => "Pekerjaan tidak boleh kosong",
			]
		);
		$this->form_validation->set_rules('deskripsi','Deskripsi Menu','required',
			[
				'required' => "Deskripsi Team tidak boleh kosong",
			]
		);

	}
}


/* End of file Menu.php */
/* Location: ./application/controllers/admin/Menu.php */