<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('main.php');

class Dashboards extends Main {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("User");
		// $this->load->model('Post');
		// $this->load->model('Comment');
	}

	public function index()
	{
		$this->load->view('profile_view');
	}

	public function list_users()
	{
		$user = $this->User->get_all_users();
		$info['users'] = $user;
		$this->load->view('dashboard_user_view', $info);
	}

	public function list_users_admin()
	{
		$user = $this->User->get_all_users();
		$info['users'] = $user;
		$this->load->view('dashboard_admin_view', $info);
	}

	public function profile($id)
	{
		$user = $this->User->get_user_by_id($id);
		// var_dump($user); die();

		$info['user'] = $user;
		$this->load->view('profile_view', $info);
	}

	public function edit_user($id)
	{
		
		// $email = $this->session->userdata('email');
		// $user = $this->User->get_user_by_email($email);
		// $this->load->view('edit_view', $user);

		$user = $this->User->get_user_by_id($id);
		// var_dump($user); die();

		$info['user'] = $user;
		$this->load->view('edit_view', $info);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}

?>
