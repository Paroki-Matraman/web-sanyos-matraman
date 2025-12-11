<header class="header-area">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">


 <!-- ***** Navbar Area ***** -->
 <div class="crose-main-menu">
  <div class="classy-nav-container breakpoint-off">
   <div class="container" style="max-width: 1290px !important;">
    <!-- Menu -->
    <nav class="classy-navbar justify-content-between" id="croseNav">

     <!-- Nav brand -->
     <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url() . 'assets/logo_new.png'; ?>" alt=""></a>
     <a href="<?php echo base_url(); ?>" class="nav-brand"><img
       src="<?php echo base_url() . 'assets/tulisan_new.png'; ?>" alt="" style="width: 270px"></a>

     <!-- Navbar Toggler -->
     <div class="classy-navbar-toggler">
      <span class="navbarToggler"><span></span><span></span><span></span></span>
     </div>

     <!-- Menu -->
     <div class="classy-menu">

      <!-- close btn -->
      <div class="classycloseIcon">
       <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
      </div>

      <!-- Nav Start -->
      <div class="classynav">
       <ul>
        <li><a href="<?php echo base_url(); ?>">Beranda</a></li>
        <li><a href="#">Profil</a>
         <ul class="dropdown">
          <li><a href="<?php echo base_url() . 'sejarah'; ?>">Sejarah</a></li>
          <li><a href="<?php echo base_url() . 'visi'; ?>">Visi</a></li>
          <li><a href="<?php echo base_url() . 'misi'; ?>">Misi</a></li>
          <li><a href="<?php echo base_url() . 'peta'; ?>">Peta Paroki</a></li>
          <li><a href="<?php echo base_url() . 'pastor'; ?>">Pastor</a></li>
          <li><a href="<?php echo base_url() . 'wilayah-dan-lingkungan'; ?>">Wilayah & Lingkungan</a></li>
          <li><a href="<?php echo base_url() . 'dewan-paroki'; ?>">Dewan Paroki</a></li>
         </ul>
        </li>
        <li><a href="#">Artikel</a>
         <ul class="dropdown">
          <li><a href="<?php echo base_url() . 'berita'; ?>">Berita</a></li>
          <li><a href="<?php echo base_url() . 'pengumuman'; ?>">Pengumuman</a></li>
          <li><a href="<?php echo base_url() . 'petugas-liturgi'; ?>">Petugas Liturgi</a></li>
          <!-- <li><a href="<?php echo base_url() . 'renungan-harian'; ?>">Renungan</a></li> -->
         </ul>
        </li>
        <li><a href="#">Pelayanan</a>
         <ul class="dropdown">
          <li><a href="https://biduk.or.id">Data Biduk</a></li>
          <?php
                    if (!empty($seksi_pelayanan['name'])) {
                      for ($i = 0; $i < count($seksi_pelayanan['name']); $i++) {
                        $name = $seksi_pelayanan['name'][$i];
                        $url = $seksi_pelayanan['url'][$i];
                    ?>
          <li><a href="<?php echo base_url() . 'pelayanan/' . $url ?>"><?php echo $name; ?></a></li>
          <?php
                      }
                    }


                    ?>

         </ul>
        </li>
        <li><a href="#">Galeri</a>
         <ul class="dropdown">
          <li><a href="<?php echo base_url() . 'foto'; ?>">Foto</a></li>
          <!-- <li><a href="<?php echo base_url() . 'video'; ?>">Video</a></li> -->
         </ul>
        </li>
        <li><a href=" <?php echo base_url() . 'unduhan' ?>">Unduhan</a></li>
        <li><a href="<?php echo base_url() . 'kontak' ?>">Kontak</a></li>
        <li><a href="https://belarasa.id/" class="btn crose-btn" style="color:white;">Daftar Misa</a></li>
       </ul>
      </div>
      <!-- Nav End -->
     </div>
    </nav>
   </div>
  </div>

  <!-- ***** Search Form Area ***** -->
  <div class="search-form-area">
   <div class="container">
    <div class="row align-items-center">
     <div class="col-12">
      <div class="searchForm">
       <form action="#" method="post">
        <input type="search" name="search" id="search" placeholder="Enter keywords &amp; hit enter...">
        <button type="submit" class="d-none"></button>
       </form>
       <div class="close-icon" id="searchCloseIcon"><i class="fa fa-close" aria-hidden="true"></i></div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
 <!-- ***** Navbar Area ***** -->
</header>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5LNJKPF" height="0" width="0"
  style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->