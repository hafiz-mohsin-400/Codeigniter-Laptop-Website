<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('brand_model', 'brand');
		$this->load->model('product_model', 'product');
		$this->load->model('media_model', 'media');
	}
	public function index()
	{
        $data['title'] = "Home";
		$this->load->view('index', $data);
	}
	public function about()
	{
        $data['title'] = "About Us";
		$this->load->view('static_pages/about', $data);
	}
	public function vision()
	{
        $data['title'] = "Our Vision";
		$this->load->view('static_pages/vision', $data);
	}
	public function gallery()
	{
		$data['title'] = "Gallery";
		$this->load->view('static_pages/gallery', $data);
	}
	public function contact()
	{
		$data = $formData = array();
        
        // If contact request is submitted
        if($this->input->post('formContact')){
            
            // Get the form data
            $formData = $this->input->post();
            
            // Form field validation rules
            $this->form_validation->set_rules('fullname', 'Fullname', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('enquiry', 'required');
            
            // Validate submitted form data
            if($this->form_validation->run() == true){
                
                // Define email data
                $mailData = array(
                    'fullname' => $formData['fullname'],
                    'email' => $formData['email'],
                    'enquiry' => $formData['enquiry'],
                );
                
                // Send an email to the site admin
                $send = $this->sendEmail($mailData);
                
                // Check email sending status
                if($send){
                    // Unset form data
                    $formData = array();
                    
                    $data['status'] = array(
                        'type' => 'success',
                        'msg' => 'Your contact request has been submitted successfully.'
                    );
                }else{
                    $data['status'] = array(
                        'type' => 'error',
                        'msg' => 'Some problems occured, please try again.'
                    );
                }
            }
        }
        
        // Pass POST data to view
  //       $data['postData'] = $formData;

  //       $this->load->library('email');
        
  //       $mailData = array(
  //                   'fullname' => $formData['fullname'],
  //                   'email' => $formData['email'],
  //                   'enquiry' => $formData['enquiry'],
  //               );
  //       // Mail config
  //       $to = 'recipient@gmail.com';
  //       $from = 'codexworld@gmail.com';
  //       $fromfullname = 'CodexWorld';
  //       $mailSubject = 'Contact Request Submitted by '.$mailData['fullname'];
        
  //       // Mail content
  //       $mailContent = '
  //           <h2>Contact Request Submitted</h2>
  //           <p><b>fullname: </b>'.$mailData['fullname'].'</p>
  //           <p><b>Email: </b>'.$mailData['email'].'</p>
  //           <p><b>Enquiry: </b>'.$mailData['enquiry'].'</p>
  //       ';
            
  //       $config['mailtype'] = 'html';
  //       $this->email->initialize($config);
  //       $this->email->to($to);
  //       $this->email->from($from, $fromfullname);
  //       $this->email->subject($mailSubject);
  //       $this->email->message($mailContent);
        
  //       // Send email & return status
  //       return $this->email->send()?true:false;
    
        
  //       // Pass the data to view
        $data['title'] = "Contact Us";
		$this->load->view('static_pages/contact', $data);
	}
}
 ?>