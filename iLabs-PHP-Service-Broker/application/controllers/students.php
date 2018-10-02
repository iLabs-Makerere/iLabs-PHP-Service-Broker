<?php 
class Students extends CI_Controller{
	//function loads the sign up page
	public function index(){
		//get year of study from DB
		$data['years'] = $this->Student_model->get_year_of_study();

		//get courses from DB
		$data['courses'] = $this->Student_model->get_courses();
		
		//load index view
		$this->load->view('index',$data);
		
	}
	
	public function register(){
		//validation rules
		$this->form_validation->set_rules('first_name','First_name','trim|required|min_length[4]');
		$this->form_validation->set_rules('last_name','Last_name','trim|required');
		$this->form_validation->set_rules('regno','Regno','required');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[students.email]');
		$this->form_validation->set_rules('course','Course','required'); 
		$this->form_validation->set_rules('year','Year','required'); 
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('confirm_password','Confirm_Password','required|matches[password]');
		

		
		if($this->form_validation->run() == FALSE){
			//get years
			$data['year'] = $this->Student_model->get_years();

			//get courses
			$data['course'] = $this->Student_model->get_courses();
		
			//load view
			$this->load->view('index',$data);
			
		}else{
			
			//generate simple random code
			$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$code = substr(str_shuffle($set), 0, 12);
			
			//create data array
			$email = $this->input->post('email');
			$name =  $this->input->post('first_name');
			
			$data = array(
					'firstname' => $this->input->post('first_name'),
					'lastname' => $this->input->post('last_name'),
					'regno' => $this->input->post('regno'),
					'email' => $this->input->post('email'),
					'year_id' => $this->input->post('year'),
					'course_id' => $this->input->post('course'),
					'password' => md5($this->input->post('password')),
					'code' => $code,
					'marks' => 0,
					'activated' => false
					);
				
			//insert student into students table
			$this->Student_model->insert($data);

			//set up email
			$config = array(
		  		'protocol' => 'smtp',
		  		'smtp_host' => 'ssl://smtp.gmail.com',
		  		'smtp_port' => 465,
		  		'smtp_user' => 'rogwang123@gmail.com',
		  		'smtp_pass' => 'criss12345', 
		  		'mailtype' => 'html',
		  		'charset' => 'iso-8859-1',
		  		'wordwrap' => TRUE
			);
			
 
			$message = 	"
						<html>
						<head>
							<title>Verification Code</title>
						</head>
						<body>
							<h2>Thank you for Registering.</h2>
							<p>Your Account:</p>
							<p>Name: ".$name."</p>
							<p>Email: ".$email."</p>
							<p>Please click the link below to activate your account.</p>
							<h4><a href='".base_url()."students/activate/".$code."'>Activate My Account</a></h4>
						</body>
						</html>
						";
						
			$this->load->library('email');
			$this->email->initialize($config);
		    $this->email->from('rogwang123@gmail.com','Ronnie');
		    $this->email->to($email);
		    $this->email->subject('Signup Verification Email');
			$this->email->set_newline("\r\n");
		    $this->email->message($message);
 
		 
			 //sending email
		    if($this->email->send()){
		    	$this->session->set_flashdata('message','Activation code sent to email');
		    }
		    else{
		    	$this->session->set_flashdata('message', $this->email->print_debugger());
 
		    }
 
        	redirect('students');
		} 
    
	}
	
	public function activate(){
		$code = $this->uri->segment(3);
	
		//if code is received, activate student
		if($code){
			$data['activated'] = true;
			//$query = ;
 
			if($this->Student_model->activate($data, $code)){
				$this->session->set_flashdata('message', 'User activated successfully');
			}
			else{
				$this->session->set_flashdata('message', 'Something went wrong in activating account');
			}
		}
		else{
			$this->session->set_flashdata('message', 'Cannot activate account. Code didnt match');
		}
 
		redirect('students');
         
		
		
 
	}
	
	
}
?>