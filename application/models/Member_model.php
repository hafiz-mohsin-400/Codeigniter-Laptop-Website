<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model {

	public function validate_credentials($where)
    {
        $this->db->where($where);
        $query = $this->db->get('afa110_member');
 
        if ($query->num_rows() > 0 ) {
            return $query->row();
        }
         
        return FALSE;
    }
    public function verify_login($email)
    {
    	$where = [
    		'email' => $email
    	];
    	$this->db->where($where);
    	$query = $this->db->get('afa110_member');
    	if ($query) {
                return TRUE;   
        }
 
        return FALSE;
    }
    public function verify_password($oldPassword)
    {
        $where = [
            'password' => $oldPassword,
            'id' => $this->session->userdata('member_id')
        ];
 
        $this->db->where($where);
        $query = $this->db->get('afa110_member');
 
        if ($query->num_rows() > 0) {
            $this->db->where($where);
            $affected = $this->db->update('afa110_member', ['password' => $this->input->post('retype_password')]);
            if ($affected) {
                return TRUE;
            }
        }
 
        return FALSE;
    }
    public function update($option = [], $where)
    {
    	$this->db->where($where);
    	$this->db->update('afa110_member', $option);
    	return $this->db->affected_rows();
    }

    //** Front End Development //**

    

}

/* End of file Brand_model.php */
/* Location: ./application/models/Brand_model.php */