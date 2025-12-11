<?php
	class Galeri extends CI_Controller{
		public function __construct(){
	        parent:: __construct();
	        $this->load->model('M_pelayanan', 'pelayanan');
	        $this->load->model('M_artikel', 'artikel');
	        $this->load->model('M_galeri', 'galeri');
	    }

		public function foto(){
			$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Foto';
			$data['head'] = $this->load->view('css/V_head',$this->global,TRUE);
			$this->global['seksi_pelayanan'] = $this->pelayanan->get_pelayanan();
			$this->global['berita_footer'] = $this->artikel->get_berita_footer();
			$data['header'] = $this->load->view('Layouts/V_header',$this->global,TRUE);
			$data['footer'] = $this->load->view('Layouts/V_footer',$this->global,TRUE);
			$data['scripts'] = $this->load->view('js/V_scripts','',TRUE);
			$data['album'] = $this->galeri->get_album();
			$this->load->view('V_foto',$data);
// 			echo "<pre>";
// 			print_r($data['album']);
// 			echo "</pre>";
		}

		public function album($url){
			$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Foto';
			$data['head'] = $this->load->view('css/V_head',$this->global,TRUE);
			$this->global['seksi_pelayanan'] = $this->pelayanan->get_pelayanan();
			$this->global['berita_footer'] = $this->artikel->get_berita_footer();
			$data['header'] = $this->load->view('Layouts/V_header',$this->global,TRUE);
			$data['footer'] = $this->load->view('Layouts/V_footer',$this->global,TRUE);
			$data['scripts'] = $this->load->view('js/V_scripts','',TRUE);
			$data['foto'] = $this->galeri->get_album_detail($url);
			$data['url'] = $url;
			$this->load->view('V_foto_detail',$data);
		}

		public function video(){
			$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Video';
			$data['head'] = $this->load->view('css/V_head',$this->global,TRUE);
			$this->global['seksi_pelayanan'] = $this->pelayanan->get_pelayanan();
			$this->global['berita_footer'] = $this->artikel->get_berita_footer();
			$data['header'] = $this->load->view('Layouts/V_header',$this->global,TRUE);
			$data['footer'] = $this->load->view('Layouts/V_footer',$this->global,TRUE);
			$data['scripts'] = $this->load->view('js/V_scripts','',TRUE);
			$this->load->view('V_video',$data);
		}
}
?>