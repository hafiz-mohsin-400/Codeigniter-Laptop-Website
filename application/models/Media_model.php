<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media_model extends CI_Model {

	public function create($options)
	{
		$this->db->insert('afa110_media',$options);
		return $this->db->insert_id();
	}

	public function get_all($limit = NULL, $offset = NULL)
	{
		$this->db->order_by('id', 'desc');
		$query = $this->db->get('afa110_media', $limit, $offset);
		return $query->result();
	}
	public function get_by($mediaId)
	{
		$this->db->where('id',$mediaId);
		$query = $this->db->get('afa110_media');
		return $query->row();
	}
	public function count_all()
	{
		$query = $this->db->get('afa110_media');
		return $query->num_rows();
	}
	public function update($mediaId, $option)
	{
		$this->db->where('id',$mediaId);
		$this->db->update('afa110_media', $option);
		return $this->db->affected_rows();
	}
	public function remove($mediaId)
	{
		$this->db->where('id',$mediaId);
		$this->db->delete('afa110_media');
		return $this->db->affected_rows();
	}

/**** Fronted DEVELOPMENT ****/
	
	public function show_media_by($mediaType)
	{
		$this->db->where('media_type', $mediaType);
		$this->db->where('status', 'ACTIVE');
		$query = $this->db->get('afa110_media');
		return $query->result();
	}

	public function getByGallery($mediaType)
    {
        $this->db->where('media_type', $mediaType);
		$this->db->where('status', 'ACTIVE');
		$query = $this->db->get('afa110_media');
		return $query->result();
    }

}

/* End of file Brand_model.php */
/* Location: ./application/models/Brand_model.php */