<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
	public function getAllProduct()
	{
		return $this->db->get('user')->result_array();
	}

	public function getCustomerAddress()
	{
		return $this->db->get('customer_address')->result_array();
	}
}