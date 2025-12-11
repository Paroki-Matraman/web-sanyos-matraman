<?php
	class M_galeri extends CI_Model{

		public function get_album(){
	    	$sql = "SELECT * FROM album ORDER BY date_created DESC LIMIT 8";
	        $res = $this->db->query($sql);
	        $data = array();
	        foreach ($res->result() as $row) {
	        	$data['id'][] = $row->id;
	        	$data['name'][] = $row->name;
	        	$data['url'][] = $row->url;
	        }
	        return $data;
	    }

	    public function get_album_detail($url){
	    	$sql = "SELECT a.*, b.name AS album, b.url AS url FROM foto a JOIN album b ON b.id = a.id_album WHERE b.url = ? ORDER BY a.date_created DESC LIMIT 15";
	        $res = $this->db->query($sql, array($url));
	        $data = array();
	        foreach ($res->result() as $row) {
	        	$data['id'][] = $row->id;
	        	$data['album'][] = $row->album;
	        	$data['url'][] = $row->url;
	        	$data['foto'][] = $row->foto;
	        }
	        return $data;
	    }
	}
?>