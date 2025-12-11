<?php
	class M_beranda extends CI_Model{

		public function get_renungan_romo(){
			$sql = "SELECT * FROM renungan WHERE status = 2 ORDER BY tanggal DESC LIMIT 3";
	        $res = $this->db->query($sql);
	        $data = array();

	        foreach ($res->result() as $row) {
	            $data['id'][] = $row->id;
	            $data['judul'][] = $row->judul;
	            $data['penjelasan'][] = $row->penjelasan;
	            $data['tanggal'][] = $row->tanggal;
	            $data['image'][] = $row->image;
	            $data['url'][] = $row->url;
	        }
	        return $data;
		}

		public function get_sejarah(){
			$sql = "SELECT `desc` FROM sejarah WHERE id = 1";
			$res = $this->db->query($sql);
			return $res->result_array();
		}

		public function get_peta_paroki(){
			$sql = "SELECT * FROM peta_paroki WHERE id = 2";
			$res = $this->db->query($sql);
			return $res->result_array();
		}

		public function get_pengumuman(){
	        $sql = "SELECT a.id, a.title, a.desc, a.content, a.thumb, a.url, a.tanggal_pengumuman, b.name AS user FROM pengumuman a JOIN user b ON b.username = a.user WHERE a.status = 1 ORDER BY a.tanggal_pengumuman DESC LIMIT 3";
	        $res = $this->db->query($sql);
	        $data = array();

	        foreach ($res->result() as $row) {
	            $data['id'][] = $row->id;
	            $data['title'][] = $row->title;
	            $data['desc'][] = $row->desc;
	            $data['content'][] = $row->content;
	            $data['thumb'][] = $row->thumb;
	            $data['url'][] = $row->url;
	            $data['date_created'][] = $row->tanggal_pengumuman;
	            $data['user'][] = $row->user;
	        }

	        return $data;
	    }


		public function get_berita(){
	    	$sql = "SELECT a.id, a.title, a.desc, a.thumb, a.url, a.tanggal_berita, b.name AS user FROM berita a JOIN user b ON b.username = a.user WHERE a.status = 1 ORDER BY a.tanggal_berita DESC LIMIT 3";
	    	$res = $this->db->query($sql);
	    	$data = array();

	    	foreach ($res->result() as $row) {
	    		$data['id'][] = $row->id;
	    		$data['title'][] = $row->title;
	    		$data['desc'][] = $row->desc;
	    		$data['thumb'][] = $row->thumb;
	    		$data['url'][] = $row->url;
	    		$data['date_created'][] = $row->tanggal_berita;
	    		$data['user'][] = $row->user;
	    	}

	    	return $data;
	    }
	}

?>