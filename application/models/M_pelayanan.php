<?php
	class M_pelayanan extends CI_Model{

		public function get_pelayanan(){
			$sql = "SELECT name, url FROM pelayanan ORDER BY id DESC";
	        $res = $this->db->query($sql);
	        $data = array();

	        foreach ($res->result() as $row) {
	            $data['name'][] = $row->name;
	            $data['url'][] = $row->url;
	        }
	        return $data;
		}


		public function get_pelayanan_detail($url){
	    	$sql = "SELECT * FROM pelayanan WHERE url = ?";
	    	$res = $this->db->query($sql, array($url));
	    	return $res->result_array();
	    }
	}
?>