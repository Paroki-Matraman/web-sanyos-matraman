<?php
	class Kontak extends CI_Controller{
		public function __construct(){
	        parent:: __construct();
	        $this->load->helper('security');
	        $this->load->library(array('form_validation', 'Recaptcha'));
	        $this->load->model('M_pelayanan', 'pelayanan');
	        $this->load->model('M_artikel', 'artikel');
	        $this->load->model('M_kontak', 'kontak');
	    }

		public function index(){
			$this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Kontak';
			$data['head'] = $this->load->view('css/V_head',$this->global,TRUE);
			$this->global['seksi_pelayanan'] = $this->pelayanan->get_pelayanan();
			$this->global['berita_footer'] = $this->artikel->get_berita_footer();
			$data['header'] = $this->load->view('Layouts/V_header',$this->global,TRUE);
			$data['footer'] = $this->load->view('Layouts/V_footer',$this->global,TRUE);
			$data['scripts'] = $this->load->view('js/V_scripts','',TRUE);
			$data['captcha'] = $this->recaptcha->getWidget();
	        $data['script_captcha'] = $this->recaptcha->getScriptTag();
			$this->load->view('V_kontak',$data);
		}

		public function kontak_proses(){
			$this->form_validation->set_rules('name', 'Name', 'trim|xss_clean|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|xss_clean|required');
			$this->form_validation->set_rules('phone', 'phone', 'trim|xss_clean|required');
			$this->form_validation->set_rules('message', 'Message', 'trim|xss_clean|required');
			$this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'trim|xss_clean|required');
			
			$this->form_validation->set_error_delimiters('<p style="text-align: left; color: red; font-size: 13px;">', '</p>');

	        if ($this->form_validation->run() == FALSE) {   
	            $this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Kontak';
				$data['head'] = $this->load->view('css/V_head',$this->global,TRUE);
				$this->global['seksi_pelayanan'] = $this->pelayanan->get_pelayanan();
				$this->global['berita_footer'] = $this->artikel->get_berita_footer();
				$data['header'] = $this->load->view('Layouts/V_header',$this->global,TRUE);
				$data['footer'] = $this->load->view('Layouts/V_footer',$this->global,TRUE);
				$data['scripts'] = $this->load->view('js/V_scripts','',TRUE);
				$data['captcha'] = $this->recaptcha->getWidget();
		        $data['script_captcha'] = $this->recaptcha->getScriptTag();
				$this->load->view('V_kontak',$data);
	        }else{
	        	$name = strip_tags(str_replace("'", "", $this->input->post('name')));
	        	$email = strip_tags(str_replace("'", "", $this->input->post('email')));
				$phone = strip_tags(str_replace("'", "", $this->input->post('phone')));
				$message = strip_tags(str_replace("'", "", $this->input->post('message')));
				
				$data['nonxssData'] = array(
					'name' => $name,
					'email' => $email,
					'phone' => $phone,
		            'message' => $message
		        );

		        $data['xssData'] = $this->security->xss_clean($data['nonxssData']);

		        $create = $this->kontak->create_contact_us_process($data['xssData']);

		        if($create){
		        	echo $this->session->set_flashdata('msg','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Berhasil Terkirim Pesan Anda.</div>');
		            redirect(base_url().'kontak');
		        } else {
		            echo $this->session->set_flashdata('msg','<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Gagal Terkirim Pesan Anda.</div>');
		            redirect(base_url().'kontak');
		        }
	        }
		}
	}
?>