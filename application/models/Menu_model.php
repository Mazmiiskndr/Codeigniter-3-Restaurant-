<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model {
	public function get_jumlah_menu()
	{
		$sql = "SELECT count(id_menu) as id_menu FROM menu";
		$result = $this->db->query($sql);
		return $result->row()->id_menu;
	}


	public function tampil_data($table)
	{
		return $this->db->get($table);
	}

	public function insert_menu($data,$table)
	{
		$this->db->insert($table,$data);
	}

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	} 

	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}



	public function ambil_id_menu($id)
	{
		$result = $this->db->where('id_menu',$id)->get('menu');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	} 



}

/* End of file Kategori_model.ph */
/* Location: ./application/models/Kategori_model.ph */