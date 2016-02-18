<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('main.php');

class Users extends Main {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User');
	}

	public function login()
	{
		$this->load->view('login_view');
	}

	public function login_process()
	{
		$this->load->library("form_validation");

		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() === FALSE) 
		{
			$this->session->set_flashdata('login_error', "Your email or password isn't correct.");
			redirect('/users/login');
		}
		else
		{
			$email = $this->input->post('email');
			$user = $this->User->get_user_by_email($email);
			$password = md5($this->input->post('password'));

			if ($user && $user['password'] == $password) 
			{
				$user = array(
					'first_name' => $user['first_name'],
					'last_name' => $user['last_name'],
					'email' => $user['email'],
					'user_level' => $user['user_level'],
					'is_logged_in' => TRUE
				);

				$this->session->set_userdata($user);
				if ($user['user_level']==9) 
				{
					redirect("/dashboards/list_users_admin");
				}
				else
				{
					redirect("/dashboards/list_users");
				}
			}
			else
			{
				$this->session->set_flashdata('login_error', "Your email or password isn't correct.");
				redirect('/users/login');
			}
		}
	}

	public function register()
	{
		$this->load->view('register_view');
	}

	public function register_process()
	{
		$this->load->library("form_validation");

   		$this->form_validation->set_rules("first_name", "First Name", "trim|required");
		$this->form_validation->set_rules("last_name", "Last Name", "trim|required");
		$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|is_unique[users.email]|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|min_length[8]|required|matches[confirm_password]|md5');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|md5');

		if($this->form_validation->run() === FALSE)
		{
		    $this->session->set_flashdata("registration_error", validation_errors());
		    redirect('/users/register');
		}
		else
		{
		    $first_name = $this->input->post('first_name');
		    $last_name = $this->input->post('last_name');
		    $email = $this->input->post('email');
        	$password = md5($this->input->post('password'));
        	$description = $this->input->post('description');

        	$post = $this->input->post();
			$registered_user = $this->User->register_user($post);

			$this->session->set_flashdata("registered_user", $post);
			redirect('/dashboards/list_users');
		}
	}

	public function edit()
	{
		$this->load->view('edit_view');
	}

	public function edit_process()
	{
		$this->load->library("form_validation");

   		$this->form_validation->set_rules("first_name", "First Name", "trim|required");
		$this->form_validation->set_rules("last_name", "Last Name", "trim|required");
		$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|is_unique[users.email]|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|min_length[8]|required|matches[confirm_password]|md5');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|md5');

		if($this->form_validation->run() === FALSE)
		{
		    $this->session->set_flashdata("edit_error", validation_errors());
		    redirect(base_url('/users/edit'));
		}
		else
		{
		    $first_name = $this->input->post('first_name');
		    $last_name = $this->input->post('last_name');
		    $email = $this->input->post('email');
        	$password = md5($this->input->post('password'));
        	$description = $this->input->post('description');

        	$post = $this->input->post();
			$edited_user = $this->User->update_user($post);

			$this->session->set_flashdata("edited_user", $post);
			redirect('/dashboards/list_users');
		}
	}

	public function addnew()
	{
		$this->load->view('addnew_view');
	}

	public function delete_user($id)
	{
		$this->User->delete_user_by_id($id);
		redirect('/dashboards/list_users_admin');
	}
}

?>
