<?php
class Profil extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_profil', 'profil');
		$this->load->model('M_pelayanan', 'pelayanan');
		$this->load->model('M_artikel', 'artikel');
	}

	public function sejarah()
	{
		$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Sejarah';
		$data['head'] = $this->load->view('css/V_head', $this->global, TRUE);
		$this->global['seksi_pelayanan'] = $this->pelayanan->get_pelayanan();
		$this->global['berita_footer'] = $this->artikel->get_berita_footer();
		$data['header'] = $this->load->view('Layouts/V_header', $this->global, TRUE);
		$data['footer'] = $this->load->view('Layouts/V_footer', $this->global, TRUE);
		$data['scripts'] = $this->load->view('js/V_scripts', '', TRUE);
		$data['sejarah'] = $this->profil->get_sejarah();
		$this->load->view('V_sejarah', $data);
	}
	
	public function visi()
	{
		$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Sejarah';
		$data['head'] = $this->load->view('css/V_head', $this->global, TRUE);
		$this->global['seksi_pelayanan'] = $this->pelayanan->get_pelayanan();
		$this->global['berita_footer'] = $this->artikel->get_berita_footer();
		$data['header'] = $this->load->view('Layouts/V_header', $this->global, TRUE);
		$data['footer'] = $this->load->view('Layouts/V_footer', $this->global, TRUE);
		$data['scripts'] = $this->load->view('js/V_scripts', '', TRUE);
		$data['visi'] = $this->profil->get_visi();
		$this->load->view('V_visi', $data);
	}
	
	public function misi()
	{
		$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Sejarah';
		$data['head'] = $this->load->view('css/V_head', $this->global, TRUE);
		$this->global['seksi_pelayanan'] = $this->pelayanan->get_pelayanan();
		$this->global['berita_footer'] = $this->artikel->get_berita_footer();
		$data['header'] = $this->load->view('Layouts/V_header', $this->global, TRUE);
		$data['footer'] = $this->load->view('Layouts/V_footer', $this->global, TRUE);
		$data['scripts'] = $this->load->view('js/V_scripts', '', TRUE);
		$data['misi'] = $this->profil->get_misi();
		$this->load->view('V_misi', $data);
	}

	public function peta()
	{
		$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Peta';
		$data['head'] = $this->load->view('css/V_head', $this->global, TRUE);
		$this->global['seksi_pelayanan'] = $this->pelayanan->get_pelayanan();
		$this->global['berita_footer'] = $this->artikel->get_berita_footer();
		$data['header'] = $this->load->view('Layouts/V_header', $this->global, TRUE);
		$data['footer'] = $this->load->view('Layouts/V_footer', $this->global, TRUE);
		$data['scripts'] = $this->load->view('js/V_scripts', '', TRUE);
		$data['peta_paroki'] = $this->profil->get_peta();
		$this->load->view('V_peta', $data);
	}

	public function pastor()
	{
		$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Pastor';
		$data['head'] = $this->load->view('css/V_head', $this->global, TRUE);
		$this->global['seksi_pelayanan'] = $this->pelayanan->get_pelayanan();
		$this->global['berita_footer'] = $this->artikel->get_berita_footer();
		$data['header'] = $this->load->view('Layouts/V_header', $this->global, TRUE);
		$data['footer'] = $this->load->view('Layouts/V_footer', $this->global, TRUE);
		$data['scripts'] = $this->load->view('js/V_scripts', '', TRUE);
		$data['pastor'] = $this->profil->get_pastor();
		$this->load->view('V_pastor', $data);
	}

	public function wilayah()
	{
		$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Wilayah dan Lingkungan';
		$data['head'] = $this->load->view('css/V_head', $this->global, TRUE);
		$this->global['seksi_pelayanan'] = $this->pelayanan->get_pelayanan();
		$this->global['berita_footer'] = $this->artikel->get_berita_footer();
		$data['header'] = $this->load->view('Layouts/V_header', $this->global, TRUE);
		$data['footer'] = $this->load->view('Layouts/V_footer', $this->global, TRUE);
		$data['scripts'] = $this->load->view('js/V_scripts', '', TRUE);
		$data['wilayah'] = $this->profil->get_wilayah();
		$this->load->view('V_wilayah', $data);
	}

	public function dewan()
	{
		$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Dewan';
		$data['head'] = $this->load->view('css/V_head', $this->global, TRUE);
		$this->global['seksi_pelayanan'] = $this->pelayanan->get_pelayanan();
		$this->global['berita_footer'] = $this->artikel->get_berita_footer();
		$data['header'] = $this->load->view('Layouts/V_header', $this->global, TRUE);
		$data['footer'] = $this->load->view('Layouts/V_footer', $this->global, TRUE);
		$data['scripts'] = $this->load->view('js/V_scripts', '', TRUE);
		$data['dewan_paroki'] = $this->profil->get_dewan_paroki();
		$this->load->view('V_dewan', $data);
	}
}