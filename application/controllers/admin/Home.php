<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('member_model', 'member');
    }
	public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == TRUE) 
            {
                return TRUE;
                $data['message'] = "Oppsss! Something went wrong";
            }
       $data['title'] = "Sign in";
       $this->load->view('/admin/auth/login', $data);
    }
     public function validate()
    {
        $where = [
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
        ];
 
        $query = $this->member->validate_credentials($where);
        if ($query) {
             
            $memberInfo = [
                'is_logged_in' => TRUE,
                'fullname' => $query->fullname,
                'email' => $query->email,
                'member_id' => $query->id
            ];
             
            $this->session->set_userdata( $memberInfo );
            redirect('/admin/brand','refresh');
        }
        else
        {
            $this->session->set_flashdata('message', 'Oppss! Something went wrong!');
            redirect('/admin','refresh');
        }
    }
    public function reset($token)
    {
        $this->form_validation->set_rules('new_password', 'New Password', 'required');
        $this->form_validation->set_rules('retype_password', 'Retype Password', 'required');

        if ($this->form_validation->run() == TRUE)
            {
                $where = ['hash_key' => $token];
                $row = $this->member->validate_credentials($where);

                if (! $row ) show_error("Token has been expired!");
                
                if ($this->input->server('REQUEST_METHOD') == 'POST') {
                    $affected = $this->member->update([
                        'password' => $this->input->post('retype_password'),
                        'hash_key' => NULL
                    ], [
                        'id' => $row->id
                    ]);
                    if ($affected) {
                        redirect('/admin', 'refresh');
                    }
                }
            }
        $data['title'] = "New Password";
        $this->load->view('/admin/auth/reset', $data);
    }
    public function forgot_password()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') 
        {
            $email = $this->input->post('email');
            $row = $this->member->validate_credentials(['email' => $email]);
            if ($row) {
                $hashKey = random_string('alnum', 50);
                $data['token'] = $hashKey;
                $html = $this->load->view('admin/auth/email_template', $data, TRUE);

                $emailPreferences = Array(
                  'protocol' => 'smtp',
                  'smtp_host' => 'smtp.mailtrap.io',
                  'smtp_port' => 2525,
                  'smtp_user' => '139a31b659b21b',
                  'mailtype' => 'html',
                  'smtp_pass' => '8738ac0d27d77c',
                  'crlf' => "\r\n",
                  'newline' => "\r\n"
                );
                $this->load->library('email',$emailPreferences);
                $this->email->from('info@alfateemacademy.com', 'American Laptop');
                $this->email->to($email);
                $this->email->message($html);
                $this->email->send();
                $this->member->update(['hash_key' => $hashKey], ['email' => $email]);
                $data['message'] = "Your request has been sent";
            }
            else
            {
                $data['message'] = "You don't have any account yet";
            }
        }
    	$data['title'] = "Forgot Password";
    	$this->load->view('/admin/auth/forgot_password', $data);
    }
     public function change_password()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST')
        {
            $this->form_validation->set_rules('old_password', 'Old Password', 'required');
            $this->form_validation->set_rules('new_password', 'New Password', 'required');
            $this->form_validation->set_rules('retype_password', 'Retype Password', 'required|matches[new_password]');
 
            if ($this->form_validation->run() == TRUE) 
            {
                $old_password = $this->input->post('old_password');
                if ($this->member->verify_password($old_password)) 
                    $data['message'] = "Your Password has been changed";
                else
                    $data['message'] = "Oppsss! Something went wrong";
            } 
        }
 
        $data['title'] = "Change Password";
        $data['mainContent'] = '/admin/auth/change_password';
        $this->load->view('/admin/layout/master', $data);
    }

    public function logout()
    {
    	$this->session->sess_destroy();
        redirect('/admin', 'refresh');
    }
}	
