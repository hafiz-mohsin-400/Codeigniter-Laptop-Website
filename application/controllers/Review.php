<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('product_model', 'product');
		$this->load->model('review_model', 'review');
	}

	
	
	
	


}
 ?>