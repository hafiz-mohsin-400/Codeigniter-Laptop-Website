<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('brand_model', 'brand');
		$this->load->model('product_model', 'product');
		$this->load->model('media_model', 'media');
		$this->load->model('review_model', 'review');
		$this->load->model('product_gallery_model', 'gallery');
	}
	public function index()
	{
		if ($this->input->get('price')) 
		{
			$prices = explode('-', $this->input->get('price'));
			$this->db->where('price >=', $prices[0]);
			$this->db->where('price <=', $prices[1]);
		}
		if ($this->input->get('item')) 
		{
			$this->db->like('title', $this->input->get('item'), 'BOTH');
		}
		if ($this->input->get('s')) 
		{
			$this->db->like('title', $this->input->get('s'), 'BOTH');
		}
	$data['products'] = $this->product->show_all();
    $data['title'] = "Search Results";
    $this->load->view('product/index', $data);

	}
	
	public function detail($slug)
	{
		$row = $this->product->show_by($slug); 
		// var_dump($row); 
		// die();
		$this->product->update_views($row->id); 
        $this->db->where('id !=', $row->id);
        $this->db->where('brand_id', $row->brand_id);
        $this->db->limit(6);
        $this->db->order_by('id', 'RANDOM');

        $data['title'] = $row->title;
 		$data['related_products'] = $this->product->show_all();
        $data['product'] = $row;
        $data['brand_array'] = $this->brand->brand_array();
        $this->load->view('product/detail', $data);
	}
	public function review()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') 
        {
            $options = [
                'create_date' => date('F d Y'),
                'product_id' => $this->input->post('productID'),
                'name' => $this->input->post('name'),
                'comment' => $this->input->post('review'),
                'status' => 'ACTIVE'
            ];
 
            $this->review->create_review($options);
            redirect($this->input->post('redirectTo'), 'refresh');
        }
    }
	
	
	
	


}
 ?>