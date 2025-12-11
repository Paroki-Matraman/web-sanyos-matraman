<?php
class Artikel extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_artikel', 'artikel');
		$this->load->model('M_pelayanan', 'pelayanan');
	}

	public function berita()
	{
		$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Berita';
		$data['head'] = $this->load->view('css/V_head', $this->global, TRUE);
		$this->global['seksi_pelayanan'] = $this->pelayanan->get_pelayanan();
		$this->global['berita_footer'] = $this->artikel->get_berita_footer();
		$data['header'] = $this->load->view('Layouts/V_header', $this->global, TRUE);
		$data['footer'] = $this->load->view('Layouts/V_footer', $this->global, TRUE);
		$data['scripts'] = $this->load->view('js/V_scripts', '', TRUE);
		$data['berita'] = $this->artikel->get_berita();
		$data['archive'] = $this->artikel->get_archive();
		$data['kategori'] = $this->artikel->get_kategori();
		$data['jenis'] = 'Berita';
		$data['url_berita'] = '';
		$this->load->view('V_berita', $data);
	}

	public function detail_berita($url)
	{
		$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Berita';
		$data['head'] = $this->load->view('css/V_head', $this->global, TRUE);
		$this->global['seksi_pelayanan'] = $this->pelayanan->get_pelayanan();
		$this->global['berita_footer'] = $this->artikel->get_berita_footer();
		$data['header'] = $this->load->view('Layouts/V_header', $this->global, TRUE);
		$data['footer'] = $this->load->view('Layouts/V_footer', $this->global, TRUE);
		$data['scripts'] = $this->load->view('js/V_scripts', '', TRUE);
		$data['berita'] = $this->artikel->get_detail_berita($url);
		$data['latest'] = $this->artikel->get_latest_berita();
		$data['archive'] = $this->artikel->get_archive();
		$data['kategori'] = $this->artikel->get_kategori();
		$this->load->view('V_detail_berita', $data);
	}

	public function kategori_berita($url)
	{
		$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Berita';
		$data['head'] = $this->load->view('css/V_head', $this->global, TRUE);
		$this->global['seksi_pelayanan'] = $this->pelayanan->get_pelayanan();
		$this->global['berita_footer'] = $this->artikel->get_berita_footer();
		$data['header'] = $this->load->view('Layouts/V_header', $this->global, TRUE);
		$data['footer'] = $this->load->view('Layouts/V_footer', $this->global, TRUE);
		$data['scripts'] = $this->load->view('js/V_scripts', '', TRUE);
		$data['berita'] = $this->artikel->get_kategori_berita($url);
		$data['archive'] = $this->artikel->get_archive();
		$data['kategori'] = $this->artikel->get_kategori();
		$data['jenis'] = 'Kategori Berita';
		$data['url_berita'] = $url;
		$this->load->view('V_berita', $data);
	}

	public function tanggal_berita($month, $year)
	{
		$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Berita';
		$data['head'] = $this->load->view('css/V_head', $this->global, TRUE);
		$this->global['seksi_pelayanan'] = $this->pelayanan->get_pelayanan();
		$this->global['berita_footer'] = $this->artikel->get_berita_footer();
		$data['header'] = $this->load->view('Layouts/V_header', $this->global, TRUE);
		$data['footer'] = $this->load->view('Layouts/V_footer', $this->global, TRUE);
		$data['scripts'] = $this->load->view('js/V_scripts', '', TRUE);
		$data['berita'] = $this->artikel->get_tanggal_berita(date('m', strtotime($month)), $year);
		$data['archive'] = $this->artikel->get_archive();
		$data['kategori'] = $this->artikel->get_kategori();
		$data['jenis'] = 'Tanggal Berita';
		$data['url_berita'] = $month . ',' . $year;
		$this->load->view('V_berita', $data);
	}

	public function pengumuman()
	{
		$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Pengumuman';
		$data['head'] = $this->load->view('css/V_head', $this->global, TRUE);
		$this->global['seksi_pelayanan'] = $this->pelayanan->get_pelayanan();
		$this->global['berita_footer'] = $this->artikel->get_berita_footer();
		$data['header'] = $this->load->view('Layouts/V_header', $this->global, TRUE);
		$data['footer'] = $this->load->view('Layouts/V_footer', $this->global, TRUE);
		$data['scripts'] = $this->load->view('js/V_scripts', '', TRUE);
		$data['latest'] = $this->artikel->get_latest_berita();
		$data['archive'] = $this->artikel->get_archive_pengumuman();
		$data['pengumuman'] = $this->artikel->get_pengumuman();
		$data['jenis'] = 'Pengumuman';
		$data['url_pengumuman'] = '';
		$this->load->view('V_pengumuman', $data);
	}

	public function detail_pengumuman($url)
	{
		$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Pengumuman';
		$data['head'] = $this->load->view('css/V_head', $this->global, TRUE);
		$this->global['seksi_pelayanan'] = $this->pelayanan->get_pelayanan();
		$this->global['berita_footer'] = $this->artikel->get_berita_footer();
		$data['header'] = $this->load->view('Layouts/V_header', $this->global, TRUE);
		$data['footer'] = $this->load->view('Layouts/V_footer', $this->global, TRUE);
		$data['scripts'] = $this->load->view('js/V_scripts', '', TRUE);
		$data['pengumuman'] = $this->artikel->get_detail_pengumuman($url);
		$data['latest'] = $this->artikel->get_latest_berita();
		$data['archive'] = $this->artikel->get_archive_pengumuman();
		$this->load->view('V_detail_pengumuman', $data);
	}

	public function tanggal_pengumuman($month, $year)
	{
		$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Pengumuman';
		$data['head'] = $this->load->view('css/V_head', $this->global, TRUE);
		$this->global['seksi_pelayanan'] = $this->pelayanan->get_pelayanan();
		$this->global['berita_footer'] = $this->artikel->get_berita_footer();
		$data['header'] = $this->load->view('Layouts/V_header', $this->global, TRUE);
		$data['footer'] = $this->load->view('Layouts/V_footer', $this->global, TRUE);
		$data['scripts'] = $this->load->view('js/V_scripts', '', TRUE);
		$data['pengumuman'] = $this->artikel->get_tanggal_pengumuman(date('m', strtotime($month)), $year);
		$data['archive'] = $this->artikel->get_archive_pengumuman();
		$data['latest'] = $this->artikel->get_latest_berita();
		$data['jenis'] = 'Tanggal Pengumuman';
		$data['url_pengumuman'] = $month . ',' . $year;
		$this->load->view('V_pengumuman', $data);
		// print_r($data);
	}

	public function petugas()
	{
		$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Petugas Liturgi';
		$data['head'] = $this->load->view('css/V_head', $this->global, TRUE);
		$this->global['seksi_pelayanan'] = $this->pelayanan->get_pelayanan();
		$this->global['berita_footer'] = $this->artikel->get_berita_footer();
		$data['header'] = $this->load->view('Layouts/V_header', $this->global, TRUE);
		$data['footer'] = $this->load->view('Layouts/V_footer', $this->global, TRUE);
		$data['scripts'] = $this->load->view('js/V_scripts', '', TRUE);
		$data['yoseph'] = $this->artikel->get_petugas_yoseph();
		$data['gembala'] = $this->artikel->get_petugas_gembala();
		$this->load->view('V_petugas', $data);
		// echo "<pre>";
		// print_r($data['yoseph']);
		// echo "</pre>";
	}

	public function renungan()
	{
		$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Renungan';
		$data['head'] = $this->load->view('css/V_head', $this->global, TRUE);
		$this->global['seksi_pelayanan'] = $this->pelayanan->get_pelayanan();
		$this->global['berita_footer'] = $this->artikel->get_berita_footer();
		$data['header'] = $this->load->view('Layouts/V_header', $this->global, TRUE);
		$data['footer'] = $this->load->view('Layouts/V_footer', $this->global, TRUE);
		$data['scripts'] = $this->load->view('js/V_scripts', '', TRUE);
		$data['renungan'] = $this->artikel->get_renungan();
		$data['latest'] = $this->artikel->get_latest_berita();
		$data['archive'] = $this->artikel->get_archive_renungan();
		$data['jenis'] = 'Renungan';
		$data['url_renungan'] = '';
		$this->load->view('V_renungan', $data);
	}

	public function detail_renungan($url)
	{
		$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Renungan';
		$data['head'] = $this->load->view('css/V_head', $this->global, TRUE);
		$this->global['seksi_pelayanan'] = $this->pelayanan->get_pelayanan();
		$this->global['berita_footer'] = $this->artikel->get_berita_footer();
		$data['header'] = $this->load->view('Layouts/V_header', $this->global, TRUE);
		$data['footer'] = $this->load->view('Layouts/V_footer', $this->global, TRUE);
		$data['scripts'] = $this->load->view('js/V_scripts', '', TRUE);
		$data['renungan'] = $this->artikel->get_detail_renungan($url);
		$data['archive'] = $this->artikel->get_archive_renungan();
		$data['latest'] = $this->artikel->get_latest_berita();
		$this->load->view('V_detail_renungan', $data);
	}

	public function detail_renungan_romo($url)
	{
		$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Renungan';
		$data['head'] = $this->load->view('css/V_head', $this->global, TRUE);
		$this->global['seksi_pelayanan'] = $this->pelayanan->get_pelayanan();
		$this->global['berita_footer'] = $this->artikel->get_berita_footer();
		$data['header'] = $this->load->view('Layouts/V_header', $this->global, TRUE);
		$data['footer'] = $this->load->view('Layouts/V_footer', $this->global, TRUE);
		$data['scripts'] = $this->load->view('js/V_scripts', '', TRUE);
		$data['renungan'] = $this->artikel->get_detail_renungan_romo($url);
		$data['archive'] = $this->artikel->get_archive_renungan();
		$data['latest'] = $this->artikel->get_latest_berita();
		$this->load->view('V_detail_renungan', $data);
	}

	public function tanggal_renungan($month, $year)
	{
		$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Renungan';
		$data['head'] = $this->load->view('css/V_head', $this->global, TRUE);
		$this->global['seksi_pelayanan'] = $this->pelayanan->get_pelayanan();
		$this->global['berita_footer'] = $this->artikel->get_berita_footer();
		$data['header'] = $this->load->view('Layouts/V_header', $this->global, TRUE);
		$data['footer'] = $this->load->view('Layouts/V_footer', $this->global, TRUE);
		$data['scripts'] = $this->load->view('js/V_scripts', '', TRUE);
		$data['renungan'] = $this->artikel->get_tanggal_renungan(date('m', strtotime($month)), $year);
		$data['archive'] = $this->artikel->get_archive_renungan();
		$data['latest'] = $this->artikel->get_latest_berita();
		$data['jenis'] = 'Tanggal Renungan';
		$data['url_renungan'] = $month . ',' . $year;
		$this->load->view('V_renungan', $data);
		// print_r($data);
	}
}