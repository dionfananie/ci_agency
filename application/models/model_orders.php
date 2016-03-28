<?php
	class Model_users extends CI_Model{

		function __construct(){
			
			parent::__construct();
		}

		function insert_order($order){

			$sql = $this->db->insert_string('orders', $order);

			$query = $this->db->query($sql);

			if($query === True){
				return True;
			}
			else{
				$last_query = $this->db->last_query();
				return $last_query;
			}
		}

		function getUsers(){

			$query = $this->db->query('SELECT * from users');

			if($query->num_rows() > 0){
				return $query->result();
			}
			else{
				return NULL;
			}
		}
	}




