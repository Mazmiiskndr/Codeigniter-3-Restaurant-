<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model {
	public function get_jumlah_contact()
	{
		$sql = "SELECT count(id_contact) as id_contact FROM contact";
		$result = $this->db->query($sql);
		return $result->row()->id_contact;
	}


	public function tampil_data($table)
	{
		return $this->db->get($table);
	}

	public function insert_contact($data,$table)
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

	public function ambil_id_contact($id)
	{
		$result = $this->db->where('id_contact',$id)->get('contact');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	} 



}

/* End of file contact_model.ph */
/* Location: ./application/models/booking_model.ph */