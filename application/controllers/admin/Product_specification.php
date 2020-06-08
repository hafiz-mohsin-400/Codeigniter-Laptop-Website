<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_specification extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('product_specification_model','specification');
		if ( ! $this->session->userdata('is_logged_in')) {
			redirect('/admin', 'refresh');
		}
	}
	public function add($product_id)
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
		$options = array(
					'product_id' => $product_id,
					'processor_type' => $this->input->post('processor_type'),
					'processor_speed' => $this->input->post('processor_speed'),
					'hard_drive_size' => $this->input->post('hard_drive_size'),
					'installed_ram' => $this->input->post('installed_ram'),
					'screen_size' => $this->input->post('screen_size'),
					'camera' => $this->input->post('camera'),
					'color' => $this->input->post('color'),
					'operating_system' => $this->input->post('operating_system'),
					'bluetooth' => $this->input->post('bluetooth'),
					'wifi' => $this->input->post('wifi'),
					'lan' => $this->input->post('lan'),
					'modem' => $this->input->post('modem'),
				);
		$this->specification->create($options);
		redirect('/admin/product');	
		}
		$data['title'] = "Add Product Specification";
		$data['mainContent'] = '/admin/product_specification/add';
		$this->load->view('/admin/layout/master', $data);
	}

	public function edit($specificationId)
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
		$options = array(
					'processor_type' => $this->input->post('processor_type'),
					'processor_speed' => $this->input->post('processor_speed'),
					'hard_drive_size' => $this->input->post('hard_drive_size'),
					'installed_ram' => $this->input->post('installed_ram'),
					'screen_size' => $this->input->post('screen_size'),
					'camera' => $this->input->post('camera'),
					'color' => $this->input->post('color'),
					'operating_system' => $this->input->post('operating_system'),
					'bluetooth' => $this->input->post('bluetooth'),
					'wifi' => $this->input->post('wifi'),
					'lan' => $this->input->post('lan'),
					'modem' => $this->input->post('modem'),
				);
		$this->specification->update($specificationId, $options);
        redirect('/admin/product','refresh');	
		}	
		$data['title'] = "Edit Product Specification";
		$data['product_specification'] = $this->specification->get_by($specificationId);
		$data['mainContent'] = '/admin/product_specification/edit';
		$this->load->view('/admin/layout/master', $data);
	}
	public function product_specification_seed()
	{
		$faker = Faker\Factory::create();
		for ($i=0; $i < 50; $i++) { 
			$title = $faker->name;
			$options = array(
					'product_id' => $faker->numberBetween(1, 50),
					'processor_type' => $faker->randomElement(['Intel Pentium Dual Core Processors','Intel i3 Processors (Ivy Bridge)', 'Intel i5 Processors', 'Intel i7 Processors']),
                    'processor_speed' => $faker-> numberBetween($min = 1, $max =50 ),
                    'hard_drive_size' => $faker-> numberBetween($min =1000, $max = 9000),
                    'installed_ram' => $faker-> numberBetween($min =1, $max = 10),
                    'screen_size' => $faker-> numberBetween($min =15, $max = 30),
                    'color' => $faker->randomElement(['gold','red','blue']),
                    'operating_system' => $faker->randomElement(['yes','no']),
                    'bluetooth' => $faker->randomElement(['yes','no']),
                    'wifi' => $faker->randomElement(['yes','no']),
                    'lan' => $faker->randomElement(['yes','no']),
                    'modem' => $faker->randomElement(['yes','no']),
                    'camera' => $faker->randomElement(['yes','no']),
				);
			$this->specification->create($options);
		}
		redirect('/admin/product','refresh');
	}
}
