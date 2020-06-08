<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review_model extends CI_Model {

	// public function create($options)
	// {
	// 	$this->db->insert('afa110_review',$options);
	// 	return $this->db->insert_id();
	// }	
	public function get_all($limit = NULL, $offset = NULL)
	{
		$this->db->order_by('id', 'desc');
		$query = $this->db->get('afa110_review', $limit, $offset);
		return $query->result();
	}
	
	public function get_by($reviewId)
	{
		$this->db->where('id', $reviewId);
		$query = $this->db->get('afa110_review');
		return $query->row();
	}
	public function count_all()
	{
		$query = $this->db->get('afa110_review');
		return $query->num_rows();
	}
	public function update($reviewId, $option)
	{
		$this->db->where('id',$reviewId);
		$this->db->update('afa110_review', $option);
		return $this->db->affected_rows();
	}
	public function remove($reviewId)
	{
		$this->db->where('id',$reviewId);
		$this->db->delete('afa110_review');
		return $this->db->affected_rows();
	}
/**** FRONTED DEVELOPMENT ****/
	
	public function create_review($options)
	{
		$this->db->insert('afa110_review', $options);
		return $this->db->insert_id();
	}
	public function get_reviews($productID)
    {
     $this->db->where('product_id', $productID);
     $this->db->where('status', 'ACTIVE');
     $query = $this->db->get('afa110_review');
     return $query->result();
    }

}

/* End of file Brand_model.php */
/* Location: ./application/models/Brand_model.php */