<?php
	class Faq extends CI_Controller{
		public function __construct(){
	        parent:: __construct();
	        $this->load->model('M_pelayanan', 'pelayanan');
	    }

		public function index(){
			$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Foto';
			$data['head'] = $this->load->view('css/V_head',$this->global,TRUE);
			$this->global['seksi_pelayanan'] = $this->pelayanan->get_pelayanan();
			$data['header'] = $this->load->view('Layouts/V_header',$this->global,TRUE);
			$data['footer'] = $this->load->view('Layouts/V_footer','',TRUE);
			$data['scripts'] = $this->load->view('js/V_scripts','',TRUE);
			// $data['sejarah'] = $this->profil->get_galery();
			$this->load->view('V_faq',$data);
		}
	}
?>