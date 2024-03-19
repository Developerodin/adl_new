<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Job_form extends CI_Controller
{


	public function index()
	{
		if (empty($_POST)) {
			redirect(base_url());
		}
		if (!empty($_FILES['img']['name'])) {
			$config['upload_path'] = 'upload';  // Change this to the actual path on your server
			$config['allowed_types'] = 'gif|jpg|png|pdf';  // Specify allowed file types
			$config['max_size'] = 2048;  // Specify max file size in KB
	
			$this->load->library('upload', $config);
	
			if ($this->upload->do_upload('img')) {
				$file_name = $_FILES['img']['name']; // Get the original file name
				$file_name_encoded = urlencode($file_name); // Encode the file name
				$file_name_sanitized = str_replace(' ', '_', $file_name_encoded); // Replace spaces with underscores
				$data['File'] = base_url('upload/') . $file_name_sanitized; // Complete URL of the uploaded file
				$file_path = 'upload/' . $file_name_encoded; // Path of the uploaded file on the server
			} else {
				$error = array('error' => $this->upload->display_errors());
				print_r($error);  // Print any upload errors for debugging
			}
		} else {
			$data['File'] = '';  // Set a default value if no file is uploaded
			$file_path = ''; // Set empty file path
		}
	
		$this->load->library('email');
	
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_port'] = '465';
		$config['smtp_timeout'] = '7';
		$config['smtp_user'] = 'theodinjaipur@gmail.com';
		$config['smtp_pass'] = 'ilhphiqmihlvezxk';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n";
		$config['mailtype'] = 'html'; // or html
		$config['validation'] = TRUE; // bool whether to validate email or not
	
		$this->email->initialize($config);
	
		$from = 'theodinjaipur@gmail.com';
		$to = 'adledgerservices@gmail.com';
		$subject = 'Job Form Mailbox';
		$message = 'Hello Team, <br /> You have a Job Form application from adledger Portal. <br />';
		unset($_POST['g-recaptcha-response']);
	
		foreach ($_POST as $key => $value) {
			$message .= $key . '- ' . $value . '<br>';
		}
	
		// Add the file link to the message
		$message .= 'Resume: <a href="' . $data['File'] . '">Download Resume</a>';
	
		// Attach the file if it's uploaded
		if (!empty($file_path)) {
			$this->email->attach($file_path);
		}
	
		$this->email->set_newline("\r\n");
		$this->email->from($from);
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($message);
	
		// Send the email
		if ($this->email->send()) {
			echo "Email sent successfully"; // For debugging
		} else {
			echo "Email sending failed"; // For debugging
		}
	
		redirect(base_url(''));
	}

	public function insert_data()
	{
		print_r($_POST);

		// $this->load->model('home');
		// $data['name'] =$this->input->post('name');

		// $data['mobile']=$this->input->post('mobile');
		// $data['email']=$this->input->post('email');
		// $data['district']=$this->input->post('district');
		// $data['assembly']=$this->input->post('assembly');
		// $data['facebook']=$this->input->post('facebook');
		// $data['twitter']=$this->input->post('twitter');
		// $data['instagram']=$this->input->post('instagram');

		// $this->home->insert_data($data); 
	}

}