<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_gallery extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('product_gallery_model','gallery');
		if ( ! $this->session->userdata('is_logged_in')) {
			redirect('/admin', 'refresh');
		}
	}

	public function add($product_id) 
		{
			if ($this->input->server('REQUEST_METHOD') == 'POST')
			{
				$fileUpload = [];
                $hasFileUploaded = FALSE;
 
                $userFile = [
                    'upload_path' => './uploads/',
                    'allowed_types' => 'gif|jpg|jpeg|png',
                    'encrypt_name' => TRUE
                ];  
 
                $this->upload->initialize($userFile);
                 
                if ($this->upload->do_upload('file')) {

                $file = $this->upload->data();
				$options = array(
					'product_id' => $product_id,
					'gallery_img' => $file['file_name']
				);
				$this->gallery->create($options);
				redirect('/admin/product','refresh');
                }
			}
		$data['title'] = "Add Product Gallery";
		$data['mainContent'] = '/admin/product_gallery/add';
		$this->load->view('/admin/layout/master', $data);
	}
	public function product_gallery_seed()
	{
		$faker = Faker\Factory::create();
		for ($i=0; $i < 50; $i++) { 
			$title = $faker->name;
			$options = array(
					'product_id' => $faker->numberBetween(1, 50),
					'gallery_img' => 'image not found',
				);
			$this->gallery->create($options);
		}
		redirect('/admin/product','refresh');
	}

}
