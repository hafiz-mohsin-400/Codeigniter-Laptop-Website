<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping extends CI_Controller {
	
	public function checkout()
	{
		$this->load->view('/checkout');
	}
	public function wishlist()
	{
		$this->load->view('/wishlist');
	}
	public function cart()
	{
		$this->load->view('/cart');
	}
}
 ?>