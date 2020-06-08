<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function validate_credentials($where)
	{
		$this->db->where($where);
		$query = $this->db->get('afa110_user');

		if ($query->num_rows() > 0) {
			return $query->row();
		}
		return FALSE;
	}
	public function create($options)
	{
		$this->db->insert('afa110_user', $options);
		return $this->db->insert_id();
	}
	public function verify_password($old_password)
	{
		$where = array(
			'password' => $old_password,
			'id' => $this->session->userdata('id') 
		);
		$this->db->where($where);
		$query = $this->db->get('afa110_user');

		if ($query->num_rows() > 0) {
			$this->db->where($where);
			$affected = $this->db->update('afa110_user', ['password' => $this->input->post('retype_password')]);
			if ($affected) {
				return TRUE;
			}
		}
		return FALSE;
	}


}

/* End of file Brand_model.php */
/* Location: ./application/models/Brand_model.php */