<?php
	class Beranda extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->model('M_beranda', 'beranda');
			$this->load->model('M_pelayanan', 'pelayanan');
			$this->load->model('M_artikel', 'artikel');
		}

		public function index(){
			$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Beranda';
			$data['head'] = $this->load->view('css/V_head',$this->global,TRUE);
			$this->global['seksi_pelayanan'] = $this->pelayanan->get_pelayanan();
			$this->global['berita_footer'] = $this->artikel->get_berita_footer();
			$data['header'] = $this->load->view('Layouts/V_header',$this->global,TRUE);
			$data['footer'] = $this->load->view('Layouts/V_footer',$this->global,TRUE);
			$data['scripts'] = $this->load->view('js/V_scripts','',TRUE);
			$data['sejarah'] = $this->beranda->get_sejarah();
			$data['peta'] = $this->beranda->get_peta_paroki();
			$data['renungan_romo'] = $this->beranda->get_renungan_romo();
			$data['pengumuman'] = $this->beranda->get_pengumuman();
			$data['berita'] = $this->beranda->get_berita();
			$this->load->view('V_beranda',$data);
		}
	}
?>