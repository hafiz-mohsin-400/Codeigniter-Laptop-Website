<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand_model extends CI_Model {

	public function create($options)
	{
		$this->db->insert('afa110_brand', $options);
		return $this->db->insert_id();
	}

	public function get_all($limit = NULL, $offset = NULL)
	{
		$this->db->order_by('id', 'desc');
		$query = $this->db->get('afa110_brand', $limit, $offset);
		return $query->result();
	}
	public function get_by($brandId)
	{
		$this->db->where('id',$brandId);
		$query = $this->db->get('afa110_brand');
		return $query->row();
	}
	public function count_all()
	{
		$query = $this->db->get('afa110_brand');
		return $query->num_rows();
	}
	public function update($brandId, $option)
	{
		$this->db->where('id',$brandId);
		$this->db->update('afa110_brand', $option);
		return $this->db->affected_rows();
	}
	public function remove($brandId)
	{
		$this->db->where('id',$brandId);
		$this->db->delete('afa110_brand');
		return $this->db->affected_rows();
	}
	public function brand_array()
	{
		$brands = [];
		foreach ($this->get_all() as $key => $brand) {
			$brands[$brand->id] = $brand->title;
		}
		return $brands;
	}
/**** FRONTED DEVELOPMENT ****/
	
	public function show_all()
	{
		$this->db->where('status', 'ACTIVE');
		$this->db->limit(10);
		$query = $this->db->get('afa110_brand');
		return $query->result();
	}
	public function show_by($slug)
	{
		$this->db->where('slug', $slug);
		$query = $this->db->get('afa110_brand');
		return $query->row();
	}
}

/* End of file Brand_model.php */
/* Location: ./application/models/Brand_model.php */