<?php
	class M_profil extends CI_Model{

		public function get_pastor(){
			$sql = "SELECT * FROM pastor ORDER BY id DESC";
	        $res = $this->db->query($sql);
	        $data = array();

	        foreach ($res->result() as $row) {
	            $data['id'][] = $row->id;
	            $data['name'][] = $row->name;
	            $data['image'][] = $row->image;
	            $data['start_date'][] = $row->start_date;
	            $data['end_date'][] = $row->end_date;
	        }
	        return $data;
		}

		public function get_peta(){
			$sql = "SELECT * FROM peta_paroki LIMIT 1";
			$res = $this->db->query($sql);
			return $res->result_array();
		}

		public function get_sejarah(){
			$sql = "SELECT * FROM sejarah LIMIT 1";
			$res = $this->db->query($sql);
			return $res->result_array();
		}
		
		public function get_visi(){
			$sql = "SELECT * FROM visi LIMIT 1";
			$res = $this->db->query($sql);
			return $res->result_array();
		}
		
		public function get_misi(){
			$sql = "SELECT * FROM misi LIMIT 1";
			$res = $this->db->query($sql);
			return $res->result_array();
		}

		public function get_wilayah(){
			$sql = "SELECT * FROM wilayah";
			$res = $this->db->query($sql);
			$data = array();

			foreach ($res->result() as $row) {
				$data['id'][] = $row->id;
				$data['nama'][] = $row->nama;
				$data['ketua_wilayah'][] = $row->ketua_wilayah;
				$data['alamat'][] = $row->alamat;

				$sql2 = "SELECT * FROM lingkungan WHERE id_wilayah = ?";
				$res2 = $this->db->query($sql2, $row->id);
				foreach ($res2->result() as $row2) {
					$data[$row->id]['id'][] = $row2->id;
					$data[$row->id]['id_wilayah'][] = $row2->id_wilayah;
					$data[$row->id]['nama'][] = $row2->nama;
					$data[$row->id]['ketua_lingkungan'][] = $row2->ketua_lingkungan;
					$data[$row->id]['alamat'][] = $row2->alamat;
				}
			}
			return $data;
		}

		public function get_dewan_paroki(){
			$sql = "SELECT a.id, a.nama, b.name AS jabatan, a.image FROM dewan_paroki a JOIN jabatan_dewan_paroki b ON b.id = a.jabatan ORDER BY b.position ASC";
	        $res = $this->db->query($sql);
	        $data = array();

	        foreach ($res->result() as $row) {
	            $data['id'][] = $row->id;
	            $data['nama'][] = $row->nama;
	            $data['jabatan'][] = $row->jabatan;
	            $data['image'][] = $row->image; 
	        }
	        return $data;   
		}
	}
?>