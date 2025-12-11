<?php
	class Api extends CI_Controller{
		public function __construct(){
	        parent:: __construct();
	        $this->load->model('M_api', 'api');
	        $this->load->model('M_daftar_misa', 'daftar_misa');
	    }

	    public function limit_words($string, $word_limit){
	      	$words = explode(" ",$string);
	      	return implode(" ",array_splice($words,0,$word_limit));
	  	}

		public function load_more_berita(){
			$limit = strip_tags(str_replace("'", "", $this->input->post('limit')));
			$jenis = strip_tags(str_replace("'", "", $this->input->post('jenis')));
			$url_berita = strip_tags(str_replace("'", "", $this->input->post('url_berita')));
			$berita = '';
			$sisa = '';
			if($jenis == 'Berita' && $url_berita == ''){
				$berita = $this->api->get_more_berita($limit);
				$sisa = $this->api->get_more_berita($limit+6);
			}else if($jenis == 'Kategori Berita' && $url_berita != ''){
				$berita = $this->api->get_more_berita_kategori($limit,$url_berita);
				$sisa = $this->api->get_more_berita_kategori($limit+6,$url_berita);
			}else if($jenis == 'Tanggal Berita' && $url_berita != ''){
				$param = explode(',', $url_berita);
				$berita = $this->api->get_more_berita_tanggal($limit,date('m', strtotime($param[0])),$param[1]);
				$sisa = $this->api->get_more_berita_tanggal($limit+6,$param[0],$param[1]);
			}

			// $berita = $this->api->get_more_berita($limit);
			// $sisa = $this->api->get_more_berita($limit+6);
			if($sisa->num_rows() > 0){
				$sisa2 = 1;
			}else{
				$sisa2 = 0;
			}
			// $sisa2 = count($sisa);
			$data_berita = array();
			foreach ($berita->result_array() as $a) {
				$data_berita[] = '<div class="col-12 col-md-6">
                                        <div class="single-blog-post mb-50">
                                            <div class="post-thumbnail">
                                                <a href="'.base_url().'berita/'.$a['url'].'"><img src="'.base_url().'assets/uploads/berita/'.$a['thumb'].'" alt=""></a>
                                            </div>
                                            <div class="post-content">
                                                <a href="'.base_url().'berita/'.$a['url'].'" class="post-title">
                                                    <h4>'.$a['title'].'</h4>
                                                </a>
                                                <div class="post-meta d-flex">
                                                    <a href="#"><i class="fa fa-user" aria-hidden="true"></i> '.$a['user'].'</a>
                                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> '.date('d M, Y', strtotime($a['tanggal_berita'])).'</a>
                                                </div>
                                                <p class="post-excerpt">'.$this->limit_words($a['desc'],10).'...</p>
                                            </div>
                                        </div>
                                    </div>'; 
			}

			$data = array(
				'berita' => $data_berita,
				'sisa' => $sisa2
			);
			echo json_encode($data);
		}

		public function load_more_pengumuman(){
			$limit = strip_tags(str_replace("'", "", $this->input->post('limit')));
			$jenis = strip_tags(str_replace("'", "", $this->input->post('jenis')));
			$url_pengumuman = strip_tags(str_replace("'", "", $this->input->post('url_pengumuman')));
			$pengumuman = '';
			$sisa = '';
			if($jenis == 'Pengumuman' && $url_pengumuman == ''){
				$pengumuman = $this->api->get_more_pengumuman($limit);
				$sisa = $this->api->get_more_pengumuman($limit+6);
			}else if($jenis == 'Tanggal Pengumuman' && $url_pengumuman != ''){
				$param = explode(',', $url_pengumuman);
				$pengumuman = $this->api->get_more_pengumuman_tanggal($limit,date('m', strtotime($param[0])),$param[1]);
				$sisa = $this->api->get_more_pengumuman_tanggal($limit+6,$param[0],$param[1]);
			}

			if($sisa->num_rows() > 0){
				$sisa2 = 1;
			}else{
				$sisa2 = 0;
			}
			
			$data_pengumuman = array();
			foreach ($pengumuman->result_array() as $a) {
				$data_pengumuman[] = '<div class="col-12 col-md-6">
                                        <div class="single-blog-post mb-50">
                                            <div class="post-thumbnail">
                                                <a href="'.base_url().'pengumuman/'.$a['url'].'"><img src="'.base_url().'assets/uploads/pengumuman/'.$a['thumb'].'" alt=""></a>
                                            </div>
                                            <div class="post-content">
                                                <a href="'.base_url().'pengumuman/'.$a['url'].'" class="post-title">
                                                    <h4>'.$a['title'].'</h4>
                                                </a>
                                                <div class="post-meta d-flex">
                                                    <a href="#"><i class="fa fa-user" aria-hidden="true"></i> '.$a['user'].'</a>
                                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> '.date('d M, Y', strtotime($a['tanggal_pengumuman'])).'</a>
                                                </div>
                                                <p class="post-excerpt">'.$this->limit_words($a['content'],10).'...</p>
                                            </div>
                                        </div>
                                    </div>'; 
			}

			$data = array(
				'pengumuman' => $data_pengumuman,
				'sisa' => $sisa2
			);
			echo json_encode($data);
		}

		public function load_more_renungan(){
			$limit = strip_tags(str_replace("'", "", $this->input->post('limit')));
			$jenis = strip_tags(str_replace("'", "", $this->input->post('jenis')));
			$url_renungan = strip_tags(str_replace("'", "", $this->input->post('url_renungan')));
			$renungan = '';
			$sisa = '';
			if($jenis == 'Renungan' && $url_renungan == ''){
				$renungan = $this->api->get_more_renungan($limit);
				$sisa = $this->api->get_more_renungan($limit+6);
			}else if($jenis == 'Tanggal Renungan' && $url_renungan != ''){
				$param = explode(',', $url_renungan);
				$renungan = $this->api->get_more_renungan_tanggal($limit,date('m', strtotime($param[0])),$param[1]);
				$sisa = $this->api->get_more_renungan_tanggal($limit+6,$param[0],$param[1]);
			}

			if($sisa->num_rows() > 0){
				$sisa2 = 1;
			}else{
				$sisa2 = 0;
			}
			
			$data_renungan = array();
			foreach ($renungan->result_array() as $a) {
				$data_renungan[] = '<div class="col-12 col-md-6">
                                        <div class="single-blog-post mb-50">
                                            <div class="post-thumbnail">
                                                <a href="'.base_url().'renungan-harian/'.date('Y-m-d', strtotime($a['tanggal'])).'"><img src="'.base_url().'assets/uploads/renungan/'.$a['image'].'" alt=""></a>
                                            </div>
                                            <div class="post-content">
                                                <a href="'.base_url().'renungan-harian/'.date('Y-m-d', strtotime($a['tanggal'])).'" class="post-title">
                                                    <h4>'.$a['ayat'].'</h4>
                                                </a>
                                                <div class="post-meta d-flex">
                                                    <a href="#"><i class="fa fa-user" aria-hidden="true"></i> '.$a['user'].'</a>
                                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> '.date('d M, Y', strtotime($a['tanggal'])).'</a>
                                                </div>
                                                <p class="post-excerpt">'.$this->limit_words($a['penjelasan'],10).'...</p>
                                            </div>
                                        </div>
                                    </div>'; 
			}

			$data = array(
				'renungan' => $data_renungan,
				'sisa' => $sisa2
			);
			echo json_encode($data);
		}

		public function load_more_album(){
			$limit = strip_tags(str_replace("'", "", $this->input->post('limit')));
			
			$album = $this->api->get_more_album($limit);
			$sisa = $this->api->get_more_album($limit+8);
			if($sisa->num_rows() > 0){
				$sisa2 = 1;
			}else{
				$sisa2 = 0;
			}
			// $sisa2 = count($sisa);
			$data_album = array();
			foreach ($album->result_array() as $a) {
				$data_album[] = '<div class="col-12 col-md-3 col-lg-3">
                                        <div class="about-us-content">
                                        	<center>
                                        		<a href="'.base_url().'album/'.$a['url'].'"><img src="'.base_url().'assets/img/icon.png" alt="">
	                                           	 	<div class="about-text text-center">
	                                           	 		<h6>'.$a['name'].'</h6>
	                                           	 	</div>
                                           	 	</a>
                                        	</center>
                                        </div>
                                    </div>'; 
			}

			$data = array(
				'album' => $data_album,
				'sisa' => $sisa2
			);
			echo json_encode($data);
		}

		public function load_more_foto_detail(){
			$limit = strip_tags(str_replace("'", "", $this->input->post('limit')));
			$url = strip_tags(str_replace("'", "", $this->input->post('url')));
			$foto = $this->api->get_more_foto($limit, $url);
			$sisa = $this->api->get_more_foto($limit+15, $url);
			if($sisa->num_rows() > 0){
				$sisa2 = 1;
			}else{
				$sisa2 = 0;
			}
			// $sisa2 = count($sisa);
			$data_foto = array();
			foreach ($foto->result_array() as $a) {
				$data_foto[] = '        <div class="single-gallery-area container mb-30">
                                        	<center>
                                        		<a href="'.base_url().'assets/uploads/album/'.$a['url'].'/'.$a['foto'].'">
                                        		<img src="'.base_url().'assets/uploads/album/'.$a['url'].'/'.$a['foto'].'" alt="">
                                           	 	</a>
                                        	</center>
                                        </div>'; 
			}

			$data = array(
				'foto' => $data_foto,
				'sisa' => $sisa2
			);
			echo json_encode($data);	
		}

        public function check_data_jadwal_misa(){
            $id_jadwal = strip_tags(str_replace("'", "", $this->input->post('id_jadwal')));
            $no_kartu_kk = strip_tags(str_replace("'", "", $this->input->post('no_kartu_kk')));
            $response = array();

            $get_wilayah = $this->daftar_misa->get_wilayah_umat($no_kartu_kk);
            if(empty($get_wilayah)){
                $response = array(
                    'response' => "failed no kartu kk"
                );
            }else{
                $wilayah = $get_wilayah[0]['nama_wilayah'];
                $check = $this->daftar_misa->check_data_jadwal_misa($id_jadwal, $wilayah);

                if($check == 'banned'){
                    $response = array(
                        'response' => "banned"
                    );
                }else if($check == 'full'){
                    $response = array(
                        'response' => "full"
                    );
                }else if($check == 'available'){
                    $get_nama_umat = $this->daftar_misa->get_nama_umat($no_kartu_kk);
                    $output = '<div class="col-12">
                                    <div class="form-group">
                                        <label for="nama_umat">List Nama Umat:</label>
                                        <br>';
                    $total_data = count($get_nama_umat->result());
                    $no = 1;
                    foreach ($get_nama_umat->result_array() as $row){
                        if($no == $total_data){
                            $output .= '<input type="checkbox" name="umat[]" value="'.$row['id'].'"><label class="ml-1">'.$row['nama_baptis'].' '.$row['nama_lahir'].'</label></div></div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" style="color: black !important;" required autocomplete="off">
                                </div>
                            </div>';
                        }else{
                            $output .= '<input type="checkbox" name="umat[]" value="'.$row['id'].'"><label class="ml-1">'.$row['nama_baptis'].' '.$row['nama_lahir'].'</label><br>';
                        }
                        $no++;
                    }
                    $response = array(
                    'response' => "success",
                        'data' => $output,
                    );
                }
            }
            echo json_encode($response);
        }

        public function create_regis_misa(){
            require("assets/phpqrcode/qrlib.php");

            $jadwal_misa = strip_tags(str_replace("'", "", $this->input->post('jadwal_misa')));
            $no_kartu_kk = strip_tags(str_replace("'", "", $this->input->post('no_kartu_kk')));
            $umat = $this->input->post('umat');
            $email = strip_tags(str_replace("'", "", $this->input->post('email')));
            $response = array();
            //print_r($umat);die();
            if(!empty($umat)){
                $tampung = array();
                for($i=0; $i < count($umat); $i++){
                    $id_biduk = $umat[$i];
                    $check_data_umat = $this->daftar_misa->check_data_umat($jadwal_misa,$no_kartu_kk, $id_biduk);
                    if($check_data_umat != 'not found'){
                        $tampung[] = $check_data_umat;
                    }
                }
                //print_r($tampung);die();
                if(!empty($tampung)){
                    $response = array(
                        'response' => "match found",
                        'umat' => implode(",",$tampung),
                    );
                }else{
                    $total_umat = count($umat);
                    $check_kuota = $this->daftar_misa->check_kuota($jadwal_misa, $total_umat);

                    if($check_kuota === 'available'){
                        for($i=0; $i < count($umat); $i++){
                            $data = [
                                'id_jadwal' => $jadwal_misa,
                                'kode_kartu_keluarga' => $no_kartu_kk,
                                'id_biduk' => $umat[$i],
                                'email' => $email
                            ];
                            $insert = $this->daftar_misa->daftar_misa_proses($data);
                        }
                        $this->load->library('phpmailer_lib');
                
                        // PHPMailer object
                        $mail = $this->phpmailer_lib->load();
                        
                        // SMTP configuration
                        $mail->isSMTP();
                        $mail->Host     = 'mail.parokimatraman.or.id';
                        $mail->SMTPAuth = true;
                        $mail->Username = 'admin@parokimatraman.or.id';
                        $mail->Password = 'An085773526845';
                        $mail->SMTPSecure = 'ssl';
                        $mail->Port     = 465;
                        
                        $mail->setFrom('no-reply@parokimatraman.or.id', 'Admin Paroki Matraman');
                       
                        
                        // Add a recipient
                        $mail->addAddress($email);
                        
                        $tanggal_misa = $this->daftar_misa->get_tanggal_misa($jadwal_misa);
                        
                        // Email subject
                        $mail->Subject = "List Daftar Misa Paroki Matraman Tanggal ".date('d F Y', strtotime($tanggal_misa[0]['tanggal']));
                        
                        // Set email format to HTML
                        $mail->isHTML(true);

                        $link['no_kartu_kk'] = $no_kartu_kk;
                        $link['email'] = $email;
                        $link['nama_umat'] = $this->daftar_misa->get_umat_detail(implode(',', $umat));
                        $link['title'] = "List Daftar Misa Paroki Matraman Tanggal ".date('d F Y', strtotime($tanggal_misa[0]['tanggal']));
                        

                        // $link = "<a href=\"".base_url("Login/activate/")."\" target=\"_blank\" style=\"font-size: 16px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; border-radius: 3px; padding: 15px 25px; border: 1px solid #256F9C; display: inline-block;\" class=\"mobile-button\">Confirm your email address</a>";
                    
                        $mail->Body = $this->load->view('V_mail_blast', $link, TRUE);
                        $mail->SMTPDebug  = 2;
                        $qr_img = 'assets/qrcode/'.$link['email'][$i].'-'.$tanggal_misa[0]['tanggal'].'.png';
                        QRcode::png(base64_encode($this->security->xss_clean($link['no_kartu_kk'].'|'.$tanggal_misa[0]['tanggal'])), $qr_img, "L", 4, 4);
                        $mail->AddAttachment('assets/qrcode/'.$link['email'][$i].'-'.$tanggal_misa[0]['tanggal'].'.png', $link['email'][$i].'-'.$tanggal_misa[0]['tanggal'].'.png'); 
                        // Send email
                        if(!$mail->send()){
                            // if(fsockopen("smtp.gmail.com",587)) { 
                            //     $response = array(
                            //         'response' => "terbuka",
                            //         'sisa' => $check_kuota,
                            //     );
                            // }else{ 
                            //     $response = array(
                            //         'response' => "tertutup",
                            //         'sisa' => $check_kuota,
                            //     );
                            // }
                            $response = array(
                                'response' => $mail->ErrorInfo,
                                'sisa' => $check_kuota,
                            );
                        }else{
                            $response = array(
                                'response' => "success",
                                'sisa' => $check_kuota,
                            );
                         }
                    }else{
                        $response = array(
                            'response' => "full",
                            'sisa' => $check_kuota,
                        );
                    }
                }
            }else{
                $response = array(
                    'response' => "umat empty",
                );
            }
            echo json_encode($response);
        }
	}
?>