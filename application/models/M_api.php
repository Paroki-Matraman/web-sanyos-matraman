<?php
	class M_api extends CI_Model{

		public function get_more_berita($limit){
	    	$sql = "SELECT a.id, a.title, a.desc, a.thumb, a.url, a.tanggal_berita, b.name AS user FROM berita a JOIN user b ON b.username = a.user WHERE a.status = 1 ORDER BY a.tanggal_berita DESC LIMIT $limit,6";
	        $res = $this->db->query($sql);
	        return $res;
	    }

	    public function get_more_berita_kategori($limit,$url){
	    	$sql = "SELECT a.id, a.title, a.desc, a.thumb, a.url, a.tanggal_berita, c.name AS user FROM berita a JOIN kategori_berita b ON b.id = a.id_category JOIN user c ON c.username = a.user WHERE a.status = 1 AND b.url = ? ORDER BY a.tanggal_berita DESC LIMIT $limit,6";
	    	$res = $this->db->query($sql, array($url));
	        return $res;
	    }

	    public function get_more_berita_tanggal($limit,$month,$year){
	    	$sql = "SELECT a.id, a.title, a.desc, a.thumb, a.url, a.tanggal_berita, b.name AS user FROM berita a JOIN user b ON b.username = a.user WHERE a.status = 1 AND  MONTH(a.tanggal_berita) = ? AND YEAR(a.tanggal_berita) = ? ORDER BY a.tanggal_berita DESC LIMIT $limit,6";
    		$res = $this->db->query($sql, array($month, $year));
    		return $res;
	    }

	    public function get_more_pengumuman($limit){
	    	$sql = "SELECT a.id, a.title, a.content, a.thumb, a.url, a.tanggal_pengumuman, b.name AS user FROM pengumuman a JOIN user b ON b.username = a.user WHERE a.status = 1 ORDER BY a.tanggal_pengumuman DESC LIMIT $limit,6";
	        $res = $this->db->query($sql);
	        return $res;
	    }

	    public function get_more_pengumuman_tanggal($limit,$month,$year){
	    	$sql = "SELECT a.id, a.title, a.content, a.thumb, a.url, a.tanggal_pengumuman, b.name AS user FROM pengumuman a JOIN user b ON b.username = a.user WHERE a.status = 1 AND  MONTH(a.tanggal_pengumuman) = ? AND YEAR(a.tanggal_pengumuman) = ? ORDER BY a.tanggal_pengumuman DESC LIMIT $limit,6";
        	$res = $this->db->query($sql, array($month, $year));
        	return $res;
	    }

	    public function get_more_renungan($limit){
	    	$sql = "SELECT a.*, b.name AS user FROM renungan a JOIN user b ON b.username = a.user WHERE a.status = 1 ORDER BY a.tanggal DESC LIMIT $limit, 6";
        	$res = $this->db->query($sql);
        	return $res;
	    }

	    public function get_more_renungan_tanggal($limit,$month,$year){
	    	$sql = "SELECT a.*, b.name AS user FROM renungan a JOIN user b ON b.username = a.user WHERE a.status = 1 AND  MONTH(a.tanggal) = ? AND YEAR(a.tanggal) = ? ORDER BY id DESC LIMIT $limit,6";
        	$res = $this->db->query($sql, array($month, $year));
        	return $res;
	    }

	    public function get_more_album($limit){
	    	$sql = "SELECT * FROM album ORDER BY date_created DESC LIMIT $limit,8";
	    	$res = $this->db->query($sql);
	    	return $res;
	    }

	    public function get_more_foto($limit,$url){
	    	$sql = "SELECT a.*, b.name AS album, b.url AS url FROM foto a JOIN album b ON b.id = a.id_album WHERE b.url = ? ORDER BY a.date_created DESC LIMIT $limit,15";
	    	$res = $this->db->query($sql, array($url));
	    	return $res;
	    }
	}
?>