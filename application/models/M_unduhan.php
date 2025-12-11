<?php
	class M_unduhan extends CI_Model{

		public function get_unduhan(){
			$sql = "SELECT * FROM unduhan";
	        $res = $this->db->query($sql);
	        $data = array();

	        foreach ($res->result() as $row) {
	        	$data['id'][] = $row->id;
	            $data['name'][] = $row->name;
	            $data['file'][] = $row->file;
	            $data['url'][] = $row->url;
	            $data['tipe'][] = $row->tipe;
	        }
	        return $data;
		}
	}
?>