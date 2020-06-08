<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_specification_model extends CI_Model {

	public function create($options)
	{
		$this->db->insert('afa110_product_specification',$options);
		return $this->db->insert_id();
	}
	public function get_by($product_specificationId)
	{
		$this->db->where('id', $product_specificationId);
		$query = $this->db->get('afa110_product_specification');
		return $query->row();
	}
	public function update($product_specificationId, $options)
	{
		$this->db->where('id', $product_specificationId);
		$this->db->update('afa110_product_specification', $options);
		return $this->db->affected_rows();
	}
	public function spec_all($productID)
	{
		$this->db->where('product_id', $productID);
		$query = $this->db->get('afa110_product_specification');
		if ($query->num_rows() > 0 )
			return $query->row();

		return FALSE;
	}
	public function get_all()
    {
        $query = $this->db->get('afa110_product_specification'); 
        return  $query->result(); 
    }

}

/* End of file Brand_model.php */
/* Location: ./application/models/Brand_model.php */