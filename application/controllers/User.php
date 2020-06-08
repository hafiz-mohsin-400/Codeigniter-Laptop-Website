<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model', 'user');
		
	}
	
	public function register()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			
			$this->form_validation->set_rules('first_name', 'First Name', 'required');
			$this->form_validation->set_rules('last_name', 'Last Name', 'required');
			$this->form_validation->set_rules('email', 'E-Mail', 'required');
        	$this->form_validation->set_rules('password', 'Password', 'required');
        	if ($this->form_validation->run() == TRUE)
			{
				$options = array(
					'create_date' => date('Y-m-d'),
					'first_name' => $this->input->post('first_name'), 
					'last_name' => $this->input->post('last_name'), 
					'email' => $this->input->post('email'), 
					'telephone' => $this->input->post('telephone'), 
					'fax' => $this->input->post('fax'), 
					'company' => $this->input->post('company'), 
					'address' => $this->input->post('address'), 
					'city' => $this->input->post('city'), 
					'post_code' => $this->input->post('post_code'), 
					'country' => $this->input->post('country'), 
					'region' => $this->input->post('region'), 
					'password' => $this->input->post('password'),
					'status' => 'DEACTIVE'
				);
			$this->user->create($options);
			redirect('/user/login', 'refresh');
			}
		}
		$data['title'] = "Register";
        $this->load->view('user/register', $data);
	}
	public function login()
	{
		$data['title'] = "Sign In";
        $this->load->view('user/login', $data);
	}
	public function validate()
	{
		$where = array(
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password') 
		);
		$query = $this->user->validate_credentials($where);
		if ($query) {
			$userInfo = array(
				'is_logged_in' => TRUE, 
				'fullname' => $query->email, 
				'email' => $query->email, 
				'id' => $query->id 
			);
			$this->session->set_userdata( $userInfo );
			redirect('/', 'refresh');
		}
		else
		{
			$this->session->set_flashdata('message', 'Oppss! Something went wrong!');
            redirect('/user/login','refresh'); 
		}
	}
	public function change_password()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {

			$old_password = $this->input->post('old_password');
			if ($this->user->verify_password($old_password))
				$data['message'] = "Your Password Has Been Changed";
			else
				$data['message'] = "Oppsss! Something Went Wrong";
		}
		$data['title'] = "Change Password";
        $this->load->view('user/change_password', $data);
	}
	public function logout()
	{
      	$this->session->sess_destroy();
      	redirect('user/login', 'refresh');
	}
	public function forgot_password()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {

			$email = $this->input->post('email');
			$row = $this->user->validate_credentials(['email'=> $email]);
			if ($row) {
				$hashKey = random_string('alnum', 50);
				$data['token'] = $hashKey;
				$html = $this->load->view('/user/email_template', $data, TRUE);

				$emailPreferences = Array(
				   'protocol' => 'smtp',
				   'smtp_host' => 'smtp.mailtrap.io',
				   'smtp_port' => 465,
				   'smtp_user' => '139a31b659b21b',
				   'smtp_pass' => '8738ac0d27d77c',
				   'mailtype'  => 'html', 
				   'crlf' => "\r\n",
                  'newline' => "\r\n"
				);     
		      	$this->load->library('email', $emailPreferences);
		        $this->email->from('info@alfateemacademy.com', 'American Laptop');
		        $this->email->to($email); 
		        $this->email->message($html);  
		        $this->email->send();
		        $this->user->update(['hash_key' => $hashKey], ['email' => $email]);
		        $data['message'] = "Your request has been sent";
			}
			else
			{
				$data['message'] = "You don't have any account yet";
			}
		}
		$data['title'] = "Forgot Password";
        $this->load->view('user/forgot_password', $data);
	}



}
 ?>