<?php
	class Pelayanan extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->model('M_pelayanan', 'pelayanan');
			$this->load->model('M_artikel', 'artikel');
		}

		public function seksi_pelayanan($url){
			$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Seksi Liturgi';
			$data['head'] = $this->load->view('css/V_head',$this->global,TRUE);
			$data['seksi_pelayanan'] = $this->pelayanan->get_pelayanan();
			$this->global['seksi_pelayanan'] = $this->pelayanan->get_pelayanan();
			$this->global['berita_footer'] = $this->artikel->get_berita_footer();
			$data['header'] = $this->load->view('Layouts/V_header',$this->global,TRUE);
			$data['footer'] = $this->load->view('Layouts/V_footer',$this->global,TRUE);
			$data['scripts'] = $this->load->view('js/V_scripts','',TRUE);
			$data['pelayanan'] = $this->pelayanan->get_pelayanan_detail($url);
			$this->load->view('V_pelayanan',$data);
		}

		// public function liturgi(){
		// 	$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Seksi Liturgi';
		// 	$data['head'] = $this->load->view('css/V_head',$this->global,TRUE);
		// 	$data['header'] = $this->load->view('Layouts/V_header','',TRUE);
		// 	$data['footer'] = $this->load->view('Layouts/V_footer','',TRUE);
		// 	$data['scripts'] = $this->load->view('js/V_scripts','',TRUE);
		// 	// $data['sejarah'] = $this->profil->get_profile();
		// 	$this->load->view('V_liturgi',$data);
		// }

		// public function pewartaan(){
		// 	$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Seksi Pewartaan';
		// 	$data['head'] = $this->load->view('css/V_head',$this->global,TRUE);
		// 	$data['header'] = $this->load->view('Layouts/V_header','',TRUE);
		// 	$data['footer'] = $this->load->view('Layouts/V_footer','',TRUE);
		// 	$data['scripts'] = $this->load->view('js/V_scripts','',TRUE);
		// 	$this->load->view('V_pewartaan',$data);
		// }

		// public function kerasulan(){
		// 	$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Seksi Kerasulan Kitab Suci';
		// 	$data['head'] = $this->load->view('css/V_head',$this->global,TRUE);
		// 	$data['header'] = $this->load->view('Layouts/V_header','',TRUE);
		// 	$data['footer'] = $this->load->view('Layouts/V_footer','',TRUE);
		// 	$data['scripts'] = $this->load->view('js/V_scripts','',TRUE);
		// 	$this->load->view('V_kerasulan',$data);
		// }

		// public function komunikasi(){
		// 	$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Seksi Komunikasi Sosial';
		// 	$data['head'] = $this->load->view('css/V_head',$this->global,TRUE);
		// 	$data['header'] = $this->load->view('Layouts/V_header','',TRUE);
		// 	$data['footer'] = $this->load->view('Layouts/V_footer','',TRUE);
		// 	$data['scripts'] = $this->load->view('js/V_scripts','',TRUE);
		// 	$this->load->view('V_komunikasi',$data);
		// }

		// public function pse(){
		// 	$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Seksi PSE';
		// 	$data['head'] = $this->load->view('css/V_head',$this->global,TRUE);
		// 	$data['header'] = $this->load->view('Layouts/V_header','',TRUE);
		// 	$data['footer'] = $this->load->view('Layouts/V_footer','',TRUE);
		// 	$data['scripts'] = $this->load->view('js/V_scripts','',TRUE);
		// 	$this->load->view('V_pse',$data);
		// }

		// public function pendidikan(){
		// 	$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Seksi Pendidikan';
		// 	$data['head'] = $this->load->view('css/V_head',$this->global,TRUE);
		// 	$data['header'] = $this->load->view('Layouts/V_header','',TRUE);
		// 	$data['footer'] = $this->load->view('Layouts/V_footer','',TRUE);
		// 	$data['scripts'] = $this->load->view('js/V_scripts','',TRUE);
		// 	$this->load->view('V_pendidikan',$data);
		// }

		// public function kesehatan(){
		// 	$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Seksi Kesehatan';
		// 	$data['head'] = $this->load->view('css/V_head',$this->global,TRUE);
		// 	$data['header'] = $this->load->view('Layouts/V_header','',TRUE);
		// 	$data['footer'] = $this->load->view('Layouts/V_footer','',TRUE);
		// 	$data['scripts'] = $this->load->view('js/V_scripts','',TRUE);
		// 	$this->load->view('V_kesehatan',$data);
		// }

		// public function keluarga(){
		// 	$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Seksi Kerasulan Keluarga';
		// 	$data['head'] = $this->load->view('css/V_head',$this->global,TRUE);
		// 	$data['header'] = $this->load->view('Layouts/V_header','',TRUE);
		// 	$data['footer'] = $this->load->view('Layouts/V_footer','',TRUE);
		// 	$data['scripts'] = $this->load->view('js/V_scripts','',TRUE);
		// 	$this->load->view('V_keluarga',$data);
		// }

		// public function kepemudaan(){
		// 	$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Seksi Kepemudaan';
		// 	$data['head'] = $this->load->view('css/V_head',$this->global,TRUE);
		// 	$data['header'] = $this->load->view('Layouts/V_header','',TRUE);
		// 	$data['footer'] = $this->load->view('Layouts/V_footer','',TRUE);
		// 	$data['scripts'] = $this->load->view('js/V_scripts','',TRUE);
		// 	$this->load->view('V_kepemudaan',$data);
		// }

		// public function panggilan(){
		// 	$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Seksi Panggilan';
		// 	$data['head'] = $this->load->view('css/V_head',$this->global,TRUE);
		// 	$data['header'] = $this->load->view('Layouts/V_header','',TRUE);
		// 	$data['footer'] = $this->load->view('Layouts/V_footer','',TRUE);
		// 	$data['scripts'] = $this->load->view('js/V_scripts','',TRUE);
		// 	$this->load->view('V_panggilan',$data);
		// }

		// public function haak(){
		// 	$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Seksi HAAK';
		// 	$data['head'] = $this->load->view('css/V_head',$this->global,TRUE);
		// 	$data['header'] = $this->load->view('Layouts/V_header','',TRUE);
		// 	$data['footer'] = $this->load->view('Layouts/V_footer','',TRUE);
		// 	$data['scripts'] = $this->load->view('js/V_scripts','',TRUE);
		// 	$this->load->view('V_haak',$data);
		// }

		// public function keadilan(){
		// 	$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Seksi Keadilan dan Perdamaian';
		// 	$data['head'] = $this->load->view('css/V_head',$this->global,TRUE);
		// 	$data['header'] = $this->load->view('Layouts/V_header','',TRUE);
		// 	$data['footer'] = $this->load->view('Layouts/V_footer','',TRUE);
		// 	$data['scripts'] = $this->load->view('js/V_scripts','',TRUE);
		// 	$this->load->view('V_keadilan',$data);
		// }

		// public function keamanan(){
		// 	$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Seksi Keamanan';
		// 	$data['head'] = $this->load->view('css/V_head',$this->global,TRUE);
		// 	$data['header'] = $this->load->view('Layouts/V_header','',TRUE);
		// 	$data['footer'] = $this->load->view('Layouts/V_footer','',TRUE);
		// 	$data['scripts'] = $this->load->view('js/V_scripts','',TRUE);
		// 	$this->load->view('V_keamanan',$data);
		// }

		// public function litbang(){
		// 	$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Seksi Litbang';
		// 	$data['head'] = $this->load->view('css/V_head',$this->global,TRUE);
		// 	$data['header'] = $this->load->view('Layouts/V_header','',TRUE);
		// 	$data['footer'] = $this->load->view('Layouts/V_footer','',TRUE);
		// 	$data['scripts'] = $this->load->view('js/V_scripts','',TRUE);
		// 	$this->load->view('V_litbang',$data);
		// }

		// public function pelatihan(){
		// 	$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Seksi Pelatihan dan Pengkaderan';
		// 	$data['head'] = $this->load->view('css/V_head',$this->global,TRUE);
		// 	$data['header'] = $this->load->view('Layouts/V_header','',TRUE);
		// 	$data['footer'] = $this->load->view('Layouts/V_footer','',TRUE);
		// 	$data['scripts'] = $this->load->view('js/V_scripts','',TRUE);
		// 	$this->load->view('V_pelatihan',$data);
		// }
	}
?>