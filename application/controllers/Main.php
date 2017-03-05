<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->login();
	}
	public function login(){
		$this->load->view('login');
	}
	public function signup(){
		$this->load->view('signup');
	}


	public function members(){
        if($this->session->userdata('is_logged_in')){
        	$this->load->view('members');
        }else{
        	redirect('main/restricted');
        }
		
	}

	public function login_validation(){

		$this->load->library('form_validation');

		$this->form_validation->set_rules('email','Email','required|trim|callback_validate_credentials');
		$this->form_validation->set_rules('password','Password','required|md5|trim');

		if($this->form_validation->run()){
			$newdata = array(
        'email'     => $this->input->post('email'),
        'is_logged_in' => 1
);

            $this->session->set_userdata($newdata);
			redirect('main/members');
		}else{
			$this->load->view('login');
		}

	}

		public function signup_validation(){
		$this->load->library('form_validation');
		$this->load->model('model_users');

		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[users.email]');

		$this->form_validation->set_rules('password','Password','required|trim|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('cpassword','Confirm Password','required|trim|matches[password]');

        $this->form_validation->set_message('is_unique','That email address already exists');

		if($this->form_validation->run()){
			//generate a random key
			$key = md5(uniqid());
			$this->load->library('email',array('mailtype'=>'html'));

			$this->email->from('me@website.com','Javeed Ishaq');
			$this->email->to($this->input->post('email'));
			$this->email->subject("Confirm you account");

			$message = "<p>Thank you for sigining up!</p>";
			$message .= "<p><a href='".base_url()."main/register_user/$key'>Click here </a> to confrim your account</p>";

			$this->email->message($message);
             
             if($this->model_users->add_temp_user($key)){
             	 if($this->email->send()){
				echo "The confirmation email hase been sent";
			}else echo "could not send the email";
		 }else echo "Problem adding to the database";

	
		}else{

		    $this->load->view('signup');	
		}
	}

	public function validate_credentials(){
       $this->load->model('model_users');

       if($this->model_users->can_log_in()){
       	return true;
       }else{
       	   $this->form_validation->set_message('validate_credentials','Incorrect usernaem/password');
       	   return false;
       }
	}

	public function restricted(){
		$this->load->view('restricted');
	}

	public function logout(){
		$this->session->sess_destroy();
        redirect('main','refresh');
	}

	public function register_user($key){
		$this->load->model('model_users');

		if($this->model_users->is_key_valid($key)){
			if($newemail = $this->model_users->add_user($key)){
				$data = array(
                   'email' => $newemail,
                   'is_logged_in' => 1
					);
				$this->session->set_userdata($data);
				redirect('main/members');
			}else echo "Error adding user";
		}else echo "invalid key";
	}
}
