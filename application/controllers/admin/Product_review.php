<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_review extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('review_model','review');
		if ( ! $this->session->userdata('is_logged_in')) {
			redirect('/admin', 'refresh');
		}
		
	}
	public function index()
	{
		if ($this->input->get('q')) 
    	{
    		$this->db->like('name',$this->input->get('q'), 'BOTH');
    	}
		$config['base_url'] = base_url() . '/admin/product_review/index/';
		$config['total_rows'] = $this->review->count_all();
		$config['per_page'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 15;
		$config['uri_segment'] = 4;
		
		$this->pagination->initialize($config);

		if ($this->input->get('q')) 
    	{
    		$this->db->like('name',$this->input->get('q'), 'BOTH');
    	}

		$data['title'] = "Manage Product Reviews";
        $data['reviews'] = $this->review->get_all($config['per_page'], $this->uri->segment(4));	
		$data['mainContent'] = '/admin/product_review/index';
		$this->load->view('/admin/layout/master', $data);
	}

	public function add()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') 
		{
			$options = array(
				'create_date' => $this->input->post('create_date'),
				'product_id' => $this->input->post('review_id'),
				'name' => $this->input->post('name'),
				'comment' => $this->input->post('comment'),
				'status' => 'DEACTIVE',
			);
			$this->review->create_review($options);
			redirect('/admin/product_review','refresh');
		}
		$data['title'] = "Add Product Reviews";
		$data['mainContent'] = '/admin/product_review/add';
		$this->load->view('/admin/layout/master', $data);
	}

	public function edit($review_id)
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') 
		{
			$options = array(
				'create_date' => $this->input->post('create_date'),
				'product_id' => $this->input->post('review_id'),
				'name' => $this->input->post('name'),
				'comment' => $this->input->post('comment'),
				'status' => 'DEACTIVE',
			);
			$this->review->update($review_id, $options);
			redirect('/admin/product_review','refresh');
		}
		$data['title'] = "Edit Product Reviews";
		$data['review'] = $this->review->get_by($review_id);
		$data['mainContent'] = '/admin/product_review/edit';
		$this->load->view('/admin/layout/master', $data);
	}
	public function delete($review_id)
	{
		$this->review->remove($review_id);
		// redirect('/admin/product_review','refresh');
		echo true;
	}
	public function status($review_id)
	{
		sleep(1);
		$row = $this->review->get_by($review_id);
		$newStatus = ($row->status == 'DEACTIVE') ? 'ACTIVE' : 'DEACTIVE';
		$option = array(
			'status' => $newStatus, 
		);
		$this->review->update($review_id, $option);
		// redirect('/admin/product_review','refresh');

		echo $newStatus;
	}
	public function product_review_seed()
	{
		$faker = Faker\Factory::create();
		for ($i=0; $i < 50; $i++) { 
			$title = $faker->name;
			$options = array(
				'create_date' => $faker->date($format = 'Y-m-d',$max = 'now'),
				'product_id' => $faker->numberBetween(1, 10),
				'name' => $title,
				'comment' => $faker->paragraph,
				'status' => $faker->randomElement(array('DEACTIVE','ACTIVE')),
			);
			$this->review->create($options);
		}
		redirect('/admin/product_review','refresh');
	}
}
