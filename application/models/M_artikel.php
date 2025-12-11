<?php
class M_artikel extends CI_Model{
 
    public function get_berita(){
    	$sql = "SELECT a.id, a.title, a.desc, a.thumb, a.url, a.tanggal_berita, b.name AS user FROM berita a JOIN user b ON b.username = a.user WHERE a.status = 1 ORDER BY a.tanggal_berita DESC LIMIT 6";
    	$res = $this->db->query($sql);
    	$data = array();

    	foreach ($res->result() as $row) {
    		$data['id'][] = $row->id;
    		$data['title'][] = $row->title;
    		$data['desc'][] = $row->desc;
    		$data['thumb'][] = $row->thumb;
    		$data['url'][] = $row->url;
    		$data['tanggal_berita'][] = $row->tanggal_berita;
            $data['user'][] = $row->user;
    	}

    	return $data;
    }

    public function get_archive(){
    	$sql = "SELECT year(tanggal_berita) AS year, MONTHNAME(tanggal_berita) AS month FROM berita WHERE status = 1 GROUP BY year(tanggal_berita), MONTHNAME(tanggal_berita) ORDER BY 2 DESC LIMIT 12";
    	$res = $this->db->query($sql);
    	return $res->result_array();
    }

    public function get_archive_pengumuman(){
        $sql = "SELECT year(tanggal_pengumuman) AS year, MONTHNAME(tanggal_pengumuman) AS month FROM pengumuman WHERE status = 1 GROUP BY year(tanggal_pengumuman), MONTHNAME(tanggal_pengumuman) ORDER BY 2 DESC LIMIT 12";
        $res = $this->db->query($sql);
        return $res->result_array();
    }

    public function get_archive_renungan(){
        $sql = "SELECT year(tanggal) AS year, MONTHNAME(tanggal) AS month FROM renungan GROUP BY year(tanggal), MONTHNAME(tanggal) ORDER BY 2 DESC LIMIT 12";
        $res = $this->db->query($sql);
        return $res->result_array();
    }

    public function get_kategori(){
    	$sql = "SELECT nama, url FROM kategori_berita ORDER BY id DESC LIMIT 5";
    	$res = $this->db->query($sql);
    	return $res->result_array();
    }

    public function get_detail_berita($url){
		$sql = "SELECT id, title, thumb, content, tanggal_berita FROM berita WHERE status = 1 AND url = ? ORDER BY tanggal_berita DESC";
    	$res = $this->db->query($sql, array($url));
    	return $res->result_array();
    }

    public function get_latest_berita(){
    	$sql = "SELECT id, title, thumb, url, tanggal_berita FROM berita WHERE status = 1 ORDER BY tanggal_berita DESC LIMIT 4";
    	$res = $this->db->query($sql);
    	$data = array();

    	foreach ($res->result() as $row) {
    		$data['id'][] = $row->id;
    		$data['title'][] = $row->title;
    		$data['thumb'][] = $row->thumb;
    		$data['url'][] = $row->url;
    		$data['tanggal_berita'][] = $row->tanggal_berita;
    	}

    	return $data;
    }

    public function get_kategori_berita($url){
    	$sql = "SELECT a.id, a.title, a.desc, a.thumb, a.url, a.tanggal_berita, c.name AS user FROM berita a JOIN kategori_berita b ON b.id = a.id_category JOIN user c ON c.username = a.user WHERE a.status = 1 AND b.url = ? ORDER BY a.tanggal_berita DESC LIMIT 6";
    	$res = $this->db->query($sql, array($url));
    	$data = array();

    	foreach ($res->result() as $row) {
    		$data['id'][] = $row->id;
    		$data['title'][] = $row->title;
    		$data['desc'][] = $row->desc;
    		$data['thumb'][] = $row->thumb;
    		$data['url'][] = $row->url;
    		$data['tanggal_berita'][] = $row->tanggal_berita;
            $data['user'][] = $row->user;
    	}

    	return $data;
    }

    public function get_tanggal_berita($month, $year){
    	$sql = "SELECT a.id, a.title, a.desc, a.thumb, a.url, a.tanggal_berita, b.name AS user FROM berita a JOIN user b ON b.username = a.user WHERE a.status = 1 AND  MONTH(a.tanggal_berita) = ? AND YEAR(a.tanggal_berita) = ? ORDER BY a.tanggal_berita DESC LIMIT 6";
    	$res = $this->db->query($sql, array($month, $year));
    	$data = array();

    	foreach ($res->result() as $row) {
    		$data['id'][] = $row->id;
    		$data['title'][] = $row->title;
    		$data['desc'][] = $row->desc;
    		$data['thumb'][] = $row->thumb;
    		$data['url'][] = $row->url;
    		$data['tanggal_berita'][] = $row->tanggal_berita;
            $data['user'][] = $row->user;
    	}

    	return $data;
    }

    public function get_pengumuman(){
        $sql = "SELECT a.id, a.title, a.desc, a.content, a.thumb, a.url, a.tanggal_pengumuman, b.name AS user FROM pengumuman a JOIN user b ON b.username = a.user WHERE a.status = 1 ORDER BY a.tanggal_pengumuman DESC LIMIT 6";
        $res = $this->db->query($sql);
        $data = array();

        foreach ($res->result() as $row) {
            $data['id'][] = $row->id;
            $data['title'][] = $row->title;
            $data['desc'][] = $row->desc;
            $data['content'][] = $row->content;
            $data['thumb'][] = $row->thumb;
            $data['url'][] = $row->url;
            $data['tanggal_pengumuman'][] = $row->tanggal_pengumuman;
            $data['user'][] = $row->user;
        }

        return $data;
    }

    public function get_detail_pengumuman($url){
        $sql = "SELECT id, title, content, thumb, tanggal_pengumuman FROM pengumuman WHERE status = 1 AND url = ? ORDER BY id DESC";
        $res = $this->db->query($sql, array($url));
        return $res->result_array();
    }

    public function get_tanggal_pengumuman($month, $year){
        $sql = "SELECT a.id, a.title, a.content, a.thumb, a.url, a.tanggal_pengumuman, b.name AS user FROM pengumuman a JOIN user b ON b.username = a.user WHERE a.status = 1 AND  MONTH(a.tanggal_pengumuman) = ? AND YEAR(a.tanggal_pengumuman) = ? ORDER BY a.tanggal_pengumuman DESC LIMIT 6";
        $res = $this->db->query($sql, array($month, $year));
        $data = array();

        foreach ($res->result() as $row) {
            $data['id'][] = $row->id;
            $data['title'][] = $row->title;
            $data['content'][] = $row->content;
            $data['thumb'][] = $row->thumb;
            $data['url'][] = $row->url;
            $data['tanggal_pengumuman'][] = $row->tanggal_pengumuman;
            $data['user'][] = $row->user;
        }

        return $data;
    }

    public function get_petugas_yoseph(){
        $sql = "SELECT DISTINCT tanggal FROM petugas_liturgi  WHERE tanggal > curdate() AND tanggal <= date_add( curdate(), INTERVAL 7 DAY ) AND lokasi = 1 ORDER BY tanggal ASC";
        $res = $this->db->query($sql);
        $data = array();

        foreach ($res->result() as $row) {
            $data['tanggal'][] = $row->tanggal;
            $sql2 = "SELECT b.name AS lokasi, c.nama AS petugas, d.name AS jabatan FROM petugas_liturgi a JOIN lokasi b ON a.lokasi = b.id JOIN detail_petugas_liturgi c ON a.id = c.id_petugas_liturgi JOIN jabatan_petugas_liturgi d ON d.id = c.id_jabatan_petugas_liturgi WHERE a.lokasi = 1 AND a.tanggal = ? ORDER BY d.position ASC";
            $res2 = $this->db->query($sql2, array($row->tanggal));
            foreach ($res2->result() as $row2) {
                $data['lokasi'][$row->tanggal][] = $row2->lokasi;
                $data['petugas'][$row->tanggal][] = $row2->petugas;
                $data['jabatan'][$row->tanggal][] = $row2->jabatan;
            }
        }
        return $data;
    }

    public function get_petugas_gembala(){
        $sql = "SELECT DISTINCT tanggal FROM petugas_liturgi  WHERE tanggal > curdate() AND tanggal <= date_add( curdate(), INTERVAL 7 DAY ) AND lokasi = 2 ORDER BY tanggal ASC";
        $res = $this->db->query($sql);
        $data = array();

        foreach ($res->result() as $row) {
            $data['tanggal'][] = $row->tanggal;
            $sql2 = "SELECT b.name AS lokasi, c.nama AS petugas, d.name AS jabatan FROM petugas_liturgi a JOIN lokasi b ON a.lokasi = b.id JOIN detail_petugas_liturgi c ON a.id = c.id_petugas_liturgi JOIN jabatan_petugas_liturgi d ON d.id = c.id_jabatan_petugas_liturgi WHERE a.lokasi = 2 AND a.tanggal = ? ORDER BY d.id ASC";
            $res2 = $this->db->query($sql2, array($row->tanggal));
            foreach ($res2->result() as $row2) {
                $data['lokasi'][$row->tanggal][] = $row2->lokasi;
                $data['petugas'][$row->tanggal][] = $row2->petugas;
                $data['jabatan'][$row->tanggal][] = $row2->jabatan;
            }
        }
        return $data;
    }

    public function get_renungan(){
        $sql = "SELECT a.*, b.name AS user FROM renungan a JOIN user b ON b.username = a.user WHERE a.status = 1 ORDER BY a.tanggal DESC LIMIT 6";
        $res = $this->db->query($sql);
        $data = array();

        foreach ($res->result() as $row) {
            $data['id'][] = $row->id;
            $data['judul'][] = $row->judul;
            $data['ayat'][] = $row->ayat;
            $data['penjelasan'][] = $row->penjelasan;
            $data['tanggal'][] = $row->tanggal;
            $data['image'][] = $row->image;
            $data['url'][] = $row->url;
            $data['user'][] = $row->user;
        }
        return $data;
    }

    public function get_detail_renungan($url){
        $sql = "SELECT * FROM renungan WHERE status = 1 AND url = ?";
        $res = $this->db->query($sql, array($url));
        return $res->result_array();
    }

    public function get_detail_renungan_romo($url){
        $sql = "SELECT * FROM renungan WHERE status = 2 AND url = ?";
        $res = $this->db->query($sql, array($url));
        return $res->result_array();
    }

    public function get_tanggal_renungan($month, $year){
        $sql = "SELECT a.*, b.name AS user FROM renungan a JOIN user b ON b.username = a.user WHERE a.status = 1 AND  MONTH(a.tanggal) = ? AND YEAR(a.tanggal) = ? ORDER BY id DESC LIMIT 6";
        $res = $this->db->query($sql, array($month, $year));
        $data = array();

        foreach ($res->result() as $row) {
            $data['id'][] = $row->id;
            $data['judul'][] = $row->judul;
            $data['ayat'][] = $row->ayat;
            $data['penjelasan'][] = $row->penjelasan;
            $data['tanggal'][] = $row->tanggal;
            $data['image'][] = $row->image;
            $data['url'][] = $row->url;
            $data['user'][] = $row->user;
        }

        return $data;
    }

    public function get_berita_footer(){
        $sql = "SELECT id, title, thumb, url, tanggal_berita FROM berita WHERE status = 1 ORDER BY tanggal_berita DESC LIMIT 3";
        $res = $this->db->query($sql);
        $data = array();

        foreach ($res->result() as $row) {
            $data['id'][] = $row->id;
            $data['title'][] = $row->title;
            $data['thumb'][] = $row->thumb;
            $data['url'][] = $row->url;
            $data['tanggal_berita'][] = $row->tanggal_berita;
        }

        return $data;
    }
  
}
