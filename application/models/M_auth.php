<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model
{
	function check_auth($table, $where)
	{
		return $this->db->get_where($table, $where);
	}
}