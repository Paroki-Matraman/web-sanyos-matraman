<?php
	class M_kontak extends CI_Model{

		public function create_contact_us_process($data){
	    	$sql = "INSERT INTO kontak(name, email, phone, message, date_created) VALUES(?,?,?,?,NOW())";
	        $res = $this->db->query($sql, $data);
	        return $res;
	    }
	}
?>