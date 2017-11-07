<?php

/**
 * Created by PhpStorm.
 * User: kiry
 * Date: 2017/11/7
 * Time: 20:43
 */
class test_m extends CI_Model
{
	function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function getTestList(){
		$query = $this->db->get("test");
		return $query->result_array();
	}
}