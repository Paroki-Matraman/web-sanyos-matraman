<?php

class M_daftar_misa extends CI_Model
{



    public function get_jadwal_misa()
    {

        $sql = "SELECT * FROM jadwal_misa WHERE tanggal > NOW() ORDER BY tanggal ASC";

        $res = $this->db->query($sql);

        $data = array();

        foreach ($res->result() as $row) {

            $data['id'][] = $row->id;

            $data['name'][] = $row->name;

            $data['tanggal'][] = $row->tanggal;

            $data['kuota'][] = $row->kuota;

            $data['wilayah'][] = $row->wilayah;



            $sql2 = "SELECT COUNT(id_jadwal) AS total FROM regis_misa WHERE id_jadwal = ?";

            $res2 = $this->db->query($sql2, array($row->id));

            foreach ($res2->result() as $row2) {

                $data['sisa_kuota'][] = $row->kuota - $row2->total;
            }
        }

        return $data;
    }



    public function get_wilayah_umat($no_kartu_kk)
    {

        $sql = "SELECT nama_wilayah FROM biduk WHERE kd_kartu_kk = ? LIMIT 1";

        $res = $this->db->query($sql, array($no_kartu_kk));

        return $res->result_array();
    }

    public function check_data_jadwal_misa($id_jadwal, $id_wilayah)
    {

        $sql = "SELECT * FROM jadwal_misa WHERE id = ? AND wilayah LIKE '%" . $id_wilayah . "%'";

        $res = $this->db->query($sql, array($id_jadwal));

        $res5 = $res->result_array();

        $data = array();



        if (count($res5) > 0) {

            foreach ($res->result() as $row) {

                $sql2 = "SELECT COUNT(id_jadwal) AS total FROM regis_misa WHERE id_jadwal = ?";

                $res2 = $this->db->query($sql2, array($row->id));

                foreach ($res2->result() as $row2) {

                    $data['sisa_kuota'][] = $row->kuota - $row2->total;
                }
            }

            if ($data['sisa_kuota'][0] != '0') {

                return 'available';
            } else {

                return 'full';
            }
        } else {

            return 'banned';
        }
    }



    public function get_nama_umat($kd_kartu_kk)
    {
        $sql = "SELECT * FROM biduk WHERE kd_kartu_kk = ? AND tanggal_lahir > DATE_ADD(NOW(), INTERVAL -60 YEAR) AND tanggal_lahir < DATE_ADD(NOW(), INTERVAL -12 YEAR) AND agama = 'Katolik' ";

        $res = $this->db->query($sql, array($kd_kartu_kk));

        return $res;
    }



    public  function check_kuota($id_jadwal, $total_umat)
    {

        $sisa_kuota = '';

        $sql = "SELECT * FROM jadwal_misa WHERE id = ?";

        $res = $this->db->query($sql, array($id_jadwal));

        foreach ($res->result() as $row) {

            $sql2 = "SELECT COUNT(id_jadwal) AS total FROM regis_misa WHERE id_jadwal = ?";

            $res2 = $this->db->query($sql2, array($row->id));

            foreach ($res2->result() as $row2) {

                $sisa_kuota = $row->kuota - $row2->total;
            }

            if ($sisa_kuota >= $total_umat) {

                return 'available';
            } else {

                return $sisa_kuota;
            }

            //            if(abs($count) > 0){

            //                return 'available';

            //            }else{

            //                return $sisa_kuota;

            //            }

        }
    }



    public function check_data_umat($id_jadwal, $no_kartu_kk, $id_biduk)
    {

        $sql = "SELECT a.*, b.nama_baptis, b.nama_lahir FROM regis_misa a JOIN biduk b ON b.id = a.id_biduk WHERE a.id_jadwal = ? AND a.kode_kartu_keluarga = ? AND a.id_biduk = ?";

        $res = $this->db->query($sql, array($id_jadwal, $no_kartu_kk, $id_biduk));

        $res5 = $res->result_array();

        if (count($res5) > 0) {

            $data = '';

            foreach ($res->result() as $row) {

                $data = $row->nama_baptis . ' ' . $row->nama_lahir;
            }

            return $data;
        } else {

            return 'not found';
        }
    }

    public function daftar_misa_proses($data)
    {

        $sql = "INSERT INTO regis_misa(id_jadwal, kode_kartu_keluarga, id_biduk, email, date_created) VALUES(?,?,?,?,NOW())";

        $res = $this->db->query($sql, $data);

        return $res;
    }

    public function get_umat_detail($id){
        $sql = "SELECT nama_baptis, nama_lahir FROM biduk WHERE id IN ($id)";
        $res = $this->db->query($sql);
        $data = array();

        foreach ($res->result() as $row) {
            $data['nama_umat'][] = $row->nama_baptis . ' ' . $row->nama_lahir;
        }

        return $data;
    }

    public function get_tanggal_misa($id){
        $sql = "SELECT tanggal FROM jadwal_misa WHERE id = ?";
        $res = $this->db->query($sql, array($id));
        return $res->result_array();
    }
}