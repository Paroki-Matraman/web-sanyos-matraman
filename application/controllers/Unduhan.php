<?php
	class Unduhan extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->helper(array('url','download'));
			$this->load->model('M_pelayanan','pelayanan');
			$this->load->model('M_unduhan','unduhan');
			$this->load->model('M_artikel', 'artikel');
		}

		public function index(){
			$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Unduhan';
			$data['head'] = $this->load->view('css/V_head',$this->global,TRUE);
			$this->global['seksi_pelayanan'] = $this->pelayanan->get_pelayanan();
			$this->global['berita_footer'] = $this->artikel->get_berita_footer();
			$data['header'] = $this->load->view('Layouts/V_header',$this->global,TRUE);
			$data['footer'] = $this->load->view('Layouts/V_footer',$this->global,TRUE);
			$data['scripts'] = $this->load->view('js/V_scripts','',TRUE);
			$data['unduhan'] = $this->unduhan->get_unduhan();
			$this->load->view('V_unduhan',$data);
		}

		public function download($file){
			$url = 'https://management-file.parokimatraman.or.id/'.$file;
	        redirect($url);
		}

		public function form_kk_kependudukan(){
			force_download('C:\xampp\htdocs\cms_gereja\assets\uploads\unduhan\1. Formulir Data KK-Kep BIDUK.pdf',NULL);
		}

		public function form_kk_anggota(){
			force_download('C:\xampp\htdocs\cms_gereja\assets\uploads\unduhan\2. Formulir Data KK Anggota BIDUK.pdf',NULL);
		}

		public function form_pindah_domisili(){
			force_download('C:\xampp\htdocs\cms_gereja\assets\uploads\unduhan\3. Formulir Pindah Domisili Biduk.pdf',NULL);
		}

		public function form_baptisan_bayi(){
			force_download('C:\xampp\htdocs\cms_gereja\assets\uploads\unduhan\4. Formulir Baptisan Bayi-Anak.pdf',NULL);
		}

		public function form_baptisan_remaja_dewasa(){
			force_download('C:\xampp\htdocs\cms_gereja\assets\uploads\unduhan\5. Formulir baptisan Remaja-dewasa.pdf',NULL);
		}

		public function form_komuni_pertama(){
			force_download('C:\xampp\htdocs\cms_gereja\assets\uploads\unduhan\6.Formulir Komuni Pertama.pdf',NULL);
		}

		public function form_pendaftaran_perkawinan(){
			force_download('C:\xampp\htdocs\cms_gereja\assets\uploads\unduhan\7. Formulir Pendaftaran Perkawinan.pdf',NULL);
		}

		public function form_data_saksi_perkawinan(){
			force_download('C:\xampp\htdocs\cms_gereja\assets\uploads\unduhan\8. Formulir Data Saksi Perkawinan.pdf',NULL);
		}

		public function form_data_perkawinan_lingkungan(){
			force_download('C:\xampp\htdocs\cms_gereja\assets\uploads\unduhan\9. Pengantar Perkawinan Lingk..pdf',NULL);
		}

		public function form_bimbingan_agama(){
			force_download('C:\xampp\htdocs\cms_gereja\assets\uploads\unduhan\10. Formulir Bimbingan Agama.pdf',NULL);
		}

		public function form_sakramen_penguatan(){
			force_download('C:\xampp\htdocs\cms_gereja\assets\uploads\unduhan\11. Formulir Sakramen Penguatan.pdf',NULL);
		}

		public function form_sakramen_perminyakan(){
			force_download('C:\xampp\htdocs\cms_gereja\assets\uploads\unduhan\12. Formulir Perminyakan.pdf',NULL);
		}

		public function form_laporan_kematian(){
			force_download('C:\xampp\htdocs\cms_gereja\assets\uploads\unduhan\13. Formulir Laporan Kematian Awal.pdf',NULL);
		}

		public function form_penggunaan_gedung(){
			force_download('C:\xampp\htdocs\cms_gereja\assets\uploads\unduhan\14. Formulir Penggunaan Gedung.pdf',NULL);
		}

		public function form_informasi_permohonan_misa(){
			force_download('C:\xampp\htdocs\cms_gereja\assets\uploads\unduhan\15. Formulir Informasi _ Permohonan Misa.pdf',NULL);
		}

		public function form_pengantar_keterangan_lingkungan(){
			force_download('C:\xampp\htdocs\cms_gereja\assets\uploads\unduhan\16. Pengantar-Keterangan Lingk..pdf',NULL);
		}
	}
?>