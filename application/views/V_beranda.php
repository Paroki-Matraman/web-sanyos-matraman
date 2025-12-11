<?php echo $head ?>

<body>
 <?php echo $header ?>
 <?php
  function limit_words($string, $word_limit)
  {
    $words = explode(" ", $string);
    return implode(" ", array_splice($words, 0, $word_limit));
  }
  ?>

 <div class="elfsight-app-b821884b-cc55-40b3-9a80-c5c66043e64d"></div>
 <!-- ##### About Area Start ##### -->
 <section class="about-area section-padding-50-0 mt-50">
  <div class="container">
   <div class="row">
    <!-- Section Heading -->
    <div class="col-12">
     <div class="section-heading">
      <h1>Selamat Datang Di Website Paroki Matraman</h1>
     </div>
    </div>
   </div>


   <div class="row about-content justify-content-center">
    <div class="owl-carousel owl-theme">

     <!-- Single About Us Content -->
     <div class="item">
      <div class="about-us-content mb-100">
       <a href="<?php echo base_url() . 'sejarah'; ?>">
        <img class="img-about-us" src="<?php echo base_url() . 'assets/img/gereja.jpeg'; ?>" alt="Gereja" style="width: 400px;height: 262.5px;">
        <div class="about-text">
         <h4>Sejarah Kami</h4>
         <?php echo limit_words($sejarah[0]['desc'], 14) . '...'; ?></p>
         Selengkapnya <i class="fa fa-angle-double-right"></i>
        </div>
       </a>
      </div>
     </div>

     <!-- Single About Us Content -->
     <div class="item">
      <div class="about-us-content mb-100">
       <a href="<?php echo base_url() . 'peta'; ?>">
        <img class="img-about-us" src="<?php echo base_url() . 'assets/uploads/peta_paroki/' . $peta[0]['image']; ?>" alt="Peta">
        <div class="about-text">
         <h4>Peta Paroki</h4>
         <p>Peta Paroki kami meliputi pembagian wilayah dan lingkungan yang berada di daerah Paroki Matraman.</p>
         Selengkapnya <i class="fa fa-angle-double-right"></i>
        </div>
       </a>
      </div>
     </div>

     <!-- Single About Us Content -->
     <div class="item">
      <div class="about-us-content mb-100">
       <a href="<?php echo base_url() . 'pastor'; ?>">
        <img class="img-about-us" src="<?php echo base_url() . 'assets/img/pastor.jpeg'; ?>" alt="Pastor">
        <div class="about-text">
         <h4>Pastor Kami</h4>
         <p>Sepanjang perjalanan Paroki kami sudah banyak Pastor yang berkarya di Paroki Matraman. Para Pastor kami
          tunjukan melalui foto dan tahun berkarya nya.</p>
         Selengkapnya <i class="fa fa-angle-double-right"></i>
        </div>
       </a>
      </div>
     </div>

     <!-- Single About Us Content -->
     <div class="item">
      <div class="about-us-content mb-100">
       <a href="<?php echo base_url() . 'wilayah-dan-lingkungan'; ?>">
        <img class="img-about-us" src="<?php echo base_url() . 'assets/img/lingkungan.JPG'; ?>" alt="Lingkungan">
        <div class="about-text">
         <h4>Wilayah & Lingkungan</h4>
         <p>Paroki Matraman terdiri dari Wilayah sebagai persekutuan Lingkungan-lingkungan yang berdekatan. Dijabarkan
          Wilayah yang di dalamnya terdapat daftar Lingkungan-lingkungan yang bernaung dan mencantumkan informasi nama
          ketua Lingkungan dan Wilayah.</p>
         Selengkapnya <i class="fa fa-angle-double-right"></i>
        </div>
       </a>
      </div>
     </div>

     <!-- Single About Us Content -->
     <div class="item">
      <div class="about-us-content mb-100">
       <a href="<?php echo base_url() . 'dewan-paroki'; ?>">
        <img class="img-about-us" src="<?php echo base_url() . 'assets/img/dewan.jpg'; ?>" alt="Dewan">
        <div class="about-text">
         <h4>Dewan Paroki Kami</h4>
         <p>Merupakan himpunan atau badan konsultatif dalam paroki, yang fungsinya adalah memberikan saran mengenai
          hal-hal pastoral kepada Uskup atau Pastor Paroki. Dewan Paroki didirikan oleh Uskup, dengan Pastor Paroki
          sebagai ketuanya alias Pastor Kepala.</p>
         Selangkapnya <i class="fa fa-angle-double-right"></i>
        </div>
       </a>
      </div>
     </div>
    </div>

   </div>
  </div>
 </section>
 <!-- ##### About Area End ##### -->

 <!-- ##### Instagram Area Start ##### -->
 <section class="blog-area section-padding-50-0">
  <div class="container">
   <div class="row">
    <!-- Section Heading -->
    <div class="col-12">
     <div class="section-heading">
      <h1>Kutipan Hari Ini dan Pengumuman Paroki Matraman</h1>
     </div>
    </div>
   </div>

   <div class="row justify-content-center">
    <div class="container">
     <div class="row">
      <div class="col-12">
        <div class="elfsight-app-2fe401df-d5a4-4dc4-bfa0-151b41930ca9"></div> 
       <!-- asisten dosen -->
        <!--<div class="elfsight-app-2048116f-8bba-455a-8898-39de49bb420d"></div> -->
       <!-- end asisten dosen -->
       <!-- start komsos -->
       <!--<div class="elfsight-app-ab314cd5-0846-49f7-8602-9e7694a54ef1"></div>-->
       <!-- end komsos -->
        <!--<div class="elfsight-app-72b8d5da-7e31-4b32-9e83-ee31e0526b55"></div> -->
        <!--<div class="elfsight-app-8e6d4466-8bca-40ab-8080-714b33601363"></div> -->
      </div>
     </div>
    </div>
 </section>
 <!-- ##### Instagram Area End ##### -->

 <!-- ##### Blog Area Start ##### -->
 <section class="blog-area section-padding-100-0">
  <div class=" container">
   <div class="row">
    <!-- Section Heading -->
    <div class="col-12">
     <div class="section-heading">
      <h1>Berita Paroki Matraman</h1>
     </div>
    </div>
   </div>

   <div class="row justify-content-center">
    <!-- Single Blog Post Area -->
    <?php
        if (!empty($berita['id'])) {
          for ($i = 0; $i < count($berita['id']); $i++) {
            $id = $berita['id'][$i];
            $title = $berita['title'][$i];
            $desc = $berita['desc'][$i];
            $thumb = $berita['thumb'][$i];
            $url = $berita['url'][$i];
            $user = $berita['user'][$i];
            $date_created = $berita['date_created'][$i];
        ?>
    <!-- Single Blog Post Area -->
    <div class="col-12 col-md-6 col-lg-4">
     <div class="single-blog-post mb-100">
      <div class="post-thumbnail">
       <a href="<?php echo base_url() . 'berita/' . $url; ?>"><img
         src="<?php echo base_url() . 'assets/uploads/berita/' . $thumb; ?>" alt="Berita" style="height: 262.5px;"></a>
      </div>
      <div class="post-content">
       <a href="<?php echo base_url() . 'berita/' . $url; ?>" class="post-title">
        <h4><?php echo $title; ?></h4>
       </a>
       <div class="post-meta d-flex">
        <a href="#"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $user; ?></a>
        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>
         <?php echo date('d F Y', strtotime($date_created)); ?></a>
       </div>
       <p class="post-excerpt"><?php echo limit_words($desc, 30) . '...'; ?></p>
      </div>
     </div>
    </div>
    <?php
          }
        }
        ?>
   </div>
  </div>
 </section>
 <!-- ##### Blog Area End ##### -->

 <!-- ##### Blog Area Start ##### -->
 <section class="blog-area section-padding-100-0" style="margin-top: -80px;">
  <div class="container">
   <div class="row">
    <!-- Section Heading -->
    <div class="col-12">
     <div class="section-heading">
      <h1>Pengumuman Paroki Matraman</h1>
     </div>
    </div>
   </div>
   <div class="row justify-content-center">
    <?php
        if (!empty($pengumuman['id'])) {
          for ($i = 0; $i < count($pengumuman['id']); $i++) {
            $id = $pengumuman['id'][$i];
            $title = $pengumuman['title'][$i];
            $desc = $pengumuman['desc'][$i];
            $content = $pengumuman['content'][$i];
            $thumb = $pengumuman['thumb'][$i];
            $url = $pengumuman['url'][$i];
            $user = $pengumuman['user'][$i];
            $date_created = $pengumuman['date_created'][$i];
        ?>
    <!-- Single Blog Post Area -->
    <div class="col-12 col-md-4 col-lg-4">
     <div class="single-blog-post mb-100">
      <!-- <div class="post-thumbnail">
       <a href="<?php echo base_url() . 'pengumuman/' . $url; ?>"><img
         src="<?php echo base_url() . 'assets/uploads/pengumuman/' . $thumb; ?>" alt="" style="height: 262.5px;"></a>
      </div> -->
      <div class="post-content">
       <a href="<?php echo base_url() . 'pengumuman/' . $url; ?>" alt="Pengumuman" class="post-title">
        <h4><?php echo $title; ?></h4>
       </a>
       <div class="post-meta d-flex">
        <a href="#"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $user; ?></a>
        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>
         <?php echo date('d F Y', strtotime($date_created)); ?></a>
       </div>
       <p class="post-excerpt"><?php echo limit_words($desc, 30) . '...'; ?></p>
      </div>
     </div>
    </div>

    <?php
          }
        }
        ?>
   </div>
  </div>
 </section>
 <!-- ##### Blog Area End ##### -->
 
 <!--RENUNGAN HARIAN START-->
  <section class="blog-area section-padding-50-0">
  <div class="container">
   <div class="row">
    <!-- Section Heading -->
    <div class="col-12">
     <div class="section-heading">
      <h1>Renungan Harian Paroki Matraman</h1>
     </div>
    </div>
   </div>

   <div class="row justify-content-center">
    <div class="container">
     <div class="row">
      <div class="col-12">
        <div class="elfsight-app-e43a5954-f02a-48f5-90e8-8cb1ff11cb00"></div>
      </div>
     </div>
    </div>
 </section>
 <!--RENUNGAN HARIAN END-->

 <!-- ##### Youtube Area Start ##### -->
 <section class="blog-area section-padding-50-0">
  <div class="container">
   <div class="row">
    <!-- Section Heading -->
    <div class="col-12">
     <div class="section-heading">
      <h1>Multimedia Paroki Matraman</h1>
     </div>
    </div>
   </div>

   <div class="row justify-content-center">
    <div class="container">
     <div class="row">
      <div class="col-12">
        <div class="elfsight-app-23c287e6-c9b8-4a26-a5f8-57eed79a6b18"></div> 
       <!-- start asisten dosen -->
       <!--<div class="elfsight-app-32b917e5-530b-4661-bda4-90534660e2ba"></div>-->
       <!-- end asisten dosen -->
       <!-- start komsos -->
        <!--<div class="elfsight-app-9297bba8-cb5e-4fec-9e2a-e1bb3823f32b"></div> -->
       <!-- end komsos -->
        <!--<div class="elfsight-app-a755067c-e9cc-4bc0-ba4d-049f29fda22e"></div> -->
        <!--<div class="elfsight-app-05c0d60b-bd97-47e0-86da-cea3970e4e92"></div> -->
       <!-- <div class="elfsight-app-ab314cd5-0846-49f7-8602-9e7694a54ef1"></div> -->
      </div>
     </div>
    </div>
 </section>

 <!-- ##### Podcast Start Area ##### -->
 <!-- <div class="elfsight-app-31467399-67ef-45da-84e2-96dbedd994bf"></div> -->
 <!-- start asisten dosen -->
 <!--<div class="elfsight-app-38ee8634-c74c-4877-ae4e-43ad3bdb81d1"></div>-->
 <!-- end asisten dosen -->
 <!-- <div class="elfsight-app-bb6fc6ef-2275-4e21-8732-4a613630079e"></div> -->
 <!-- <div class="elfsight-app-0d00b731-6f9e-48c7-940d-5b10379c7c87"></div> -->
 <!-- start komsos -->
 <!-- <div class="elfsight-app-cc28022b-0a7b-4943-8af3-a827e9e3cfc6"></div> -->
 <!-- end komsos -->
 <!-- ##### Podcast Area End   ##### -->

 <!-- ##### Hero Area Start ##### -->
 <!-- <section class="hero-area hero-post-slides owl-carousel">
    <?php
    if (!empty($renungan_romo)) {
      for ($i = 0; $i < count($renungan_romo['id']); $i++) {
        $id = $renungan_romo['id'][$i];
        $judul = $renungan_romo['judul'][$i];
        $penjelasan = $renungan_romo['penjelasan'][$i];
        $tanggal = $renungan_romo['tanggal'][$i];
        $image = $renungan_romo['image'][$i];
        $url = $renungan_romo['url'][$i];
    ?>
        <div class="single-hero-slide bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(<?php echo base_url() . 'assets/uploads/renungan/' . $image ?>);">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="hero-slides-content">
                  <center>
                    <h2 data-animation="fadeInUp" data-delay="100ms" style="font-size: 50px;"><?php echo $judul; ?></h2>
                    <p class="mb-2" data-animation="fadeInUp" data-delay="200ms" style="background-color: #c92f2f; width: 200px;">
                      <?php echo date('d F Y', strtotime($tanggal)); ?></p>
                  </center>
                  <p data-animation="fadeInUp" data-delay="300ms"><?php echo limit_words($penjelasan, 30) . '...'; ?></p>
                  <a href="<?php echo base_url() . 'renungan-romo/' . $url; ?>" class="btn crose-btn" data-animation="fadeInUp" data-delay="500ms">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    <?php
      }
    }
    ?>
  </section> -->
 <!-- ##### Hero Area End ##### -->
</body>
<?php echo $footer ?>
<?php echo $scripts ?>
<script>
$('.owl-carousel').owlCarousel({
 margin: 10,
 loop: true,
 nav: false,
 autoplay: true,
 dots: false,
 smartSpeed: 1000,
 center: true,
 responsive: {
  0: {
   items: 1
  },
  600: {
   items: 1
  },
  1000: {
   items: 3
  }
 }
})
</script>

</html>