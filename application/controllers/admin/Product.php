<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('product_model','product');
		$this->load->model('brand_model', 'brand');
		$this->load->model('product_specification_model', 'specification');
		if ( ! $this->session->userdata('is_logged_in')) {
			redirect('/admin', 'refresh');
		}
	}
	public function index()
	{
		$this->load->model('product_specification_model');
		if ($this->input->get('q')) 
    	{
    		$this->db->like('title',$this->input->get('q'), 'BOTH');
    	}
		$config['base_url'] = base_url() . '/admin/product/index/';
		$config['total_rows'] = $this->product->count_all();
		$config['per_page'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 15;
		$config['uri_segment'] = 4;

		$this->pagination->initialize($config);

		if ($this->input->get('q')) 
    	{
    		$this->db->like('title',$this->input->get('q'), 'BOTH');
    	}

		$data['title'] = "Manage Product";
        $data['products'] = $this->product->get_all($config['per_page'], $this->uri->segment(4));
		$data['mainContent'] = '/admin/product/index';
		$this->load->view('/admin/layout/master', $data);
	}

	public function add()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') 
		{
			$this->form_validation->set_rules('create_date', 'Date', 'required');
			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('price', 'Price', 'required');
			if ($this->form_validation->run() == TRUE) 
			{
				$fileUpload = FALSE;
                $hasFileUploaded = FALSE;
 
                $filePreferences = [
                    'upload_path' => './uploads/',
                    'allowed_types' => 'gif|jpg|jpeg|png',
                    'encrypt_name' => TRUE
                ];  
 
                $this->upload->initialize($filePreferences);
                 
                if ( ! $this->upload->do_upload('product_img')){
                    $data['error'] = $this->upload->display_errors();
                }
                else{
                 
                    $fileUpload = $this->upload->data();
                    $hasFileUploaded = TRUE;
                }
                if ($hasFileUploaded) 
                {
				$options = array(
					'brand_id' => $this->input->post('brand_id'),
					'create_date' => $this->input->post('create_date'),
					'title' => $this->input->post('title'),
					'slug' => $this->input->post('slug'),
					'code' => $this->input->post('code'),
					'product_condition' => $this->input->post('product_condition'),
					'price' => $this->input->post('price'),
					'description' => $this->input->post('description'),
					'product_img' => $fileUpload['file_name'],
					'views' => $this->input->post('views'),
					'status' => 'DEACTIVE',
					'meta_description' => $this->input->post('meta_description'),
					'meta_keyword' => $this->input->post('meta_keyword'),
				);
				$this->product->create($options);
				redirect('/admin/product','refresh');
                }
			}
		}
		$data['brands'] = $this->brand->get_all();
		$data['title'] = "Add Product";
		$data['mainContent'] = '/admin/product/add';
		$this->load->view('/admin/layout/master', $data);
	}

	public function edit($product_id)
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') 
		{
			$fileUpload = FALSE;
                $hasFileUploaded = FALSE;
 
                $filePreferences = [
                    'upload_path' => './uploads/',
                    'allowed_types' => 'gif|jpg|jpeg|png',
                    'encrypt_name' => TRUE
                ];  
 
                $this->upload->initialize($filePreferences);
                 
                if ( ! $this->upload->do_upload('product_img')){
                    $data['error'] = $this->upload->display_errors();
                }
                else{
                 
                    $fileUpload = $this->upload->data();
                    $hasFileUploaded = TRUE;
                }
				$options = array(
					'brand_id' => $this->input->post('brand_id'),
					'create_date' => $this->input->post('create_date'),
					'title' => $this->input->post('title'),
					'slug' => $this->input->post('slug'),
					'code' => $this->input->post('code'),
					'product_condition' => $this->input->post('product_condition'),
					'price' => $this->input->post('price'),
					'description' => $this->input->post('description'),
					'product_img' => ($hasFileUploaded) ? $fileUpload['file_name'] : $this->input->post('img_url'),
					'views' => $this->input->post('views'),
					'status' => 'DEACTIVE',
					'meta_description' => $this->input->post('meta_description'),
					'meta_keyword' => $this->input->post('meta_keyword')
				);
				$affected = $this->product->update($product_id, $options);
            if ($affected) 
            {
                if ($hasFileUploaded) 
                {
                    if (file_exists('./uploads/' . $this->input->post('img_url'))) 
                    {
                        unlink('./uploads/' . $this->input->post('img_url'));
                    }
                }
            redirect('/admin/product','refresh');
            }
		}
		$data['brands'] = $this->brand->get_all();
		$data['title'] = "Edit Product";
		$data['product'] = $this->product->get_by($product_id);
		$data['mainContent'] = '/admin/product/edit';
		$this->load->view('/admin/layout/master', $data);
	}
	public function delete($product_id)
	{
		$row = $this->product->get_by($product_id);
		$currentImage = $row->product_img;
		$affected = $this->product->remove($product_id);
		if ($affected) 
		// {
		// 	unlink('./uploads/' . $currentImage);
		// }
		echo true;
	}
	public function status($product_id)
	{
		sleep(1);
		$row = $this->product->get_by($product_id);
		$newStatus = ($row->status == 'DEACTIVE') ? 'ACTIVE' : 'DEACTIVE'; 
		$option = array(
			'status' => $newStatus,
		);
		$this->product->update($product_id, $option);
		// redirect('/admin/product','refresh');
		echo $newStatus;
	}
	public function product_seed()
	{
		$faker = Faker\Factory::create();
		for ($i=0; $i < 50; $i++) { 
			$title = $faker->name;
			$options = array(
				'brand_id' => $faker->numberBetween(1, 5),
				'create_date' => $faker->date($format = 'Y-m-d',$max = 'now'),
				'title' => $title,
				'slug' => url_title($title, '-' , true),
				'code' => 'SKU-' . $faker->randomDigit,
				'product_condition' => $faker->randomElement(['New', 'Used', 'Refubrished']),
				'price' => $faker->numberBetween($min = 1000, $max = 9000),
				'description' => $faker->paragraph,
				'product_img' => 'image not found',
				'views' => $faker->numberBetween(1, 500),
				'status' => $faker->randomElement(array('DEACTIVE','ACTIVE')),
				'meta_description' => $faker->text($maxNbChars = 100),
				'meta_keyword' => $faker->randomElement(array('Keyword-1', 'Keyword-2', 'Keyword-3', 'Keyword-4')),
			);
			$this->product->create($options);
		}
		redirect('/admin/product','refresh');
	}
}
