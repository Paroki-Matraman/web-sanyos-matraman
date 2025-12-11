<footer class="footer-area">
  <!-- Main Footer Area -->
  <div class="main-footer-area">
    <div class="container">
      <div class="row">

        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-12 col-lg-4">
          <div class="single-footer-widget mb-70">
            <a href="<?php echo base_url() . 'petugas-liturgi'; ?>">
              <div class="contact-information">
                <!-- <center> -->
                <h5 class="widget-title">Jadwal Misa</h5>
                <p>Misa Harian : Pk 05.45 WIB.</p>
                <p>Misa Sabtu : Pk 17.00 WIB.</p>
                <p>Misa Minggu : Pk 06.30, 08.30, dan 18.00 WIB.</p>
                <!-- </center> -->
              </div>
              <!-- Page Iman Katolik Start -->
              <!--<iframe align="center"  frameborder="1" width="300" height="200" scrolling="No" src="http://www.imankatolik.or.id/kalender_share_kecil.php"></iframe>-->
              <table width="300" height="200" bgcolor="#FFFFFFF" cellspacing="0" border="1">
                <tr>
                  <td align="center">
                    <b><a href="http://www.imankatolik.or.id" style="text-decoration:none">
                        <small>Kalender Liturgi</small></a></b>
                  </td>
                </tr>
                <tr>
                  <td align="center"><a href="http://www.imankatolik.or.id/kal_tgl_link.php" target="_blank">
                      <img border="0" src="http://www.imankatolik.or.id/kal_tgl_img.php" /></a>
                  </td>
                </tr>
                <tr height="80%">
                  <td>
                    <table width="100%">
                      <tr>
                        <td align="center"><a href="http://www.imankatolik.or.id/kal_tgl_link.php" target="_blank">
                            <img border="0" src="http://www.imankatolik.or.id/kal_perayaan_img.php" /></a>
                        </td>
                      </tr>
                      <tr>
                        <td align="center">
                          <a href="http://www.imankatolik.or.id/kal_alkitab_link.php" target="_blank">
                            <img border="0" src="http://www.imankatolik.or.id/kal_alkitab_img.php" /></a></small>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td align="center">
                    <a href="http://www.imankatolik.or.id/kalender.php" target="_blank" style="text-decoration:none">
                      <small>Kalender bulan ini</small>
                    </a>
                  </td>
                </tr>
              </table>
              <!-- Page Iman Katolik End -->
            </a>
          </div>
        </div>


        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-12 col-lg-4">
          <div class="single-footer-widget mb-70">
            <h5 class="widget-title">Berita Terbaru</h5>
            <?php
            if (!empty($berita_footer['id'])) {
              for ($i = 0; $i < count($berita_footer['id']); $i++) {
                $id = $berita_footer['id'][$i];
                $title = $berita_footer['title'][$i];
                $thumb = $berita_footer['thumb'][$i];
                $url = $berita_footer['url'][$i];
                $tanggal_berita = date('d M, Y', strtotime($berita_footer['tanggal_berita'][$i]))
            ?>
                <div class="single-latest-news">
                  <a href="<?php echo base_url() . 'berita/' . $url; ?>"><?php echo $title; ?></a>
                  <p><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $tanggal_berita; ?></p>
                </div>

            <?php
              }
            }
            ?>
          </div>
        </div>

        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-12 col-lg-4">
          <div class="single-footer-widget mb-70">
            <h5 class="widget-title">Kontak Kami</h5>

            <div class="contact-information">
              <p><i class="fa fa-map-marker" aria-hidden="true"></i> Jl.Matraman Raya 127, Jakarta 13320 </p>
              <a href="callto:021-858-3782"><i class="fa fa-phone" aria-hidden="true"></i> (021) 858-3782 - [Telp]
                (021) 856-8417 - [Fax]</a>
              <a href="mailto:&#105;&#110;&#102;&#111;&#046;&#115;&#101;&#107;&#114;&#101;&#046;&#115;&#097;&#110;&#121;&#111;&#115;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;"><i class="fa fa-envelope" aria-hidden="true"></i>
                info.sekre.sanyos@gmail.com</a>
              <p><i class="fa fa-clock-o" aria-hidden="true"></i> Senin - Jumat : Pukul 08.00 - 15.00 <br>Sabtu : Pukul 08.00 -
                13.00 <br>Minggu : Pukul 08.00 - 12.00</p>
            </div>
            <!-- hitwebcounter Code START -->
<a href="https://www.hitwebcounter.com" target="_blank">
<img src="https://hitwebcounter.com/counter/counter.php?page=7762736&style=0005&nbdigits=5&type=page&initCount=0" title="Free Counter" Alt="web counter"   border="0" /></a>    

          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Copwrite Area -->
  <div class="copywrite-area">
    <div class="container h-100">
      <div class="row h-100 align-items-center flex-wrap">
        <!-- Copywrite Text -->
        <div class="col-12 col-md-12">
          <div class="copywrite-text">
            <p>Copyright ©<script>
                document.write(new Date().getFullYear());
              </script> SANTO YOSEPH MATRAMAN | Created by :
              <a href="mailto:&#107;&#111;&#109;&#115;&#111;&#115;&#109;&#097;&#116;&#114;&#097;&#109;&#097;&#110;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;">Komsos Matraman</a>&nbsp;|&nbsp;
              <a href="https://www.facebook.com/GerejaSantoYosephMatraman/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a> &nbsp;
              <a href="https://www.instagram.com/parokimatraman/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>&nbsp;
              <a href="https://www.youtube.com/channel/UCfEc2hTA5qc8APbcYJVIleg/videos" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>