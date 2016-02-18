<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	function get_user_by_email($email)
	{
		$query = "SELECT * FROM users WHERE email = ?";
		$value = array($email);
		return $this->db->query($query, $value)->row_array();
	}

	function get_user_by_id($id)
	{
		$user_get_query = "SELECT * FROM users WHERE id = ?";
		$value = array($id);
		return $this->db->query($user_get_query, $value)->row_array();
	}

	function get_all_users()
	{
		$users_get_query = "SELECT * FROM users";
		return $this->db->query($users_get_query)->result_array();
	}

	function register_user($post)
	{
		$query = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at, user_level) VALUES (?,?,?,?,?,?,?)";
		$values = array($post['first_name'], $post['last_name'], $post['email'], $post['password'], date("Y-m-d H:i:s"), date("Y-m-d H:i:s"), 1);
		$result = $this->db->query($query, $values);

		$query_user_level = "UPDATE users SET user_level = ? WHERE id = ?";
		$id = $this->get_user_by_id($post['email'])["id"];
		if ($id == "1")
		{
			$value_user_level = array(9, $id);
			$this->db->query($query_user_level, $value_user_level);
		}
	}

	function update_user($post)
	{
		$id = $this->session->userdata('id');
		// var_dump(expression); die();

		$user_get_query = "SELECT * FROM users WHERE id = ?";
		$id = array('id');

		$update_query = "UPDATE users SET first_name = ?, last_name = ?, email = ?, password = ?, updated_at = ? WHERE id = ?";
		$value = array($post['first_name'], $post['last_name'], $post['email'], $post['password'], date("Y-m-d, H:i:s"), $id);

		$this->db->query($update_query, $value);
	}

	function delete_user_by_id($id)
	{
		$query_to_delete = "DELETE FROM users WHERE id = ?";
		$this->db->query($query_to_delete, $id);
	}
}

?>