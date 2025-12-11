<?php
class Daftar_misa extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->helper('security');
        $this->load->library(array('form_validation', 'Recaptcha'));
        $this->load->model('M_pelayanan', 'pelayanan');
        $this->load->model('M_artikel', 'artikel');
        $this->load->model('M_daftar_misa', 'daftar_misa');
    }

    public function index(){
        $this->global['pageTitle'] = 'Paroki Santo Yoseph Matraman - Daftar Misa';
        $data['head'] = $this->load->view('css/V_head',$this->global,TRUE);
        $this->global['seksi_pelayanan'] = $this->pelayanan->get_pelayanan();
        $this->global['berita_footer'] = $this->artikel->get_berita_footer();
        $data['header'] = $this->load->view('Layouts/V_header',$this->global,TRUE);
        $data['footer'] = $this->load->view('Layouts/V_footer',$this->global,TRUE);
        $data['scripts'] = $this->load->view('js/V_scripts','',TRUE);
        $data['captcha'] = $this->recaptcha->getWidget();
        $data['script_captcha'] = $this->recaptcha->getScriptTag();
        $data['jadwal_misa'] = $this->daftar_misa->get_jadwal_misa();
        //echo "<pre>";
        //print_r($data['jadwal_misa']);
        //echo "</pre>";
        $this->load->view('V_daftar_misa',$data);
    }

    public function daftar_misa_proses(){
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
            $this->load->view('V_daftar_misa',$data);
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

            $create = $this->daftar_misa->daftar_misa_proses($data['xssData']);

            if($create){
                echo $this->session->set_flashdata('msg','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Berhasil Daftar Misa Anda.</div>');
                redirect(base_url().'daftar-misa');
            } else {
                echo $this->session->set_flashdata('msg','<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Gagal Daftar Misa Anda.</div>');
                redirect(base_url().'daftar-misa');
            }
        }
    }
}
?>