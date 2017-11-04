<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Main extends CI_Controllrer {

	function get_all() {
		$sql = "SELECT *
				FROM products
				ORDER BY product_name";
		$result = $this->db->query($sql);
		return $result;
	}
	function get_one($id) {
		$sql = "SELECT *
				FROM products
				ORDER BY id = ?";
		$result = $this->db->query($sql,arrey($id));
		return $result;
	}

	function search($kw){
		$cond =
		$sql = "SELECT *
				FROM products
				WHERE id LIKE ?
					OR product_name LIKE ?
					OR category LIKE ?";
		$bind_data = array("%$kw%","%$kw%","%$kw%");
		$result = $this->db->query($sql, $bind_data);
		return $result;
	}
}
?>