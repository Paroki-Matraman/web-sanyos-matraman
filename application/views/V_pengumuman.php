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
 <!-- ##### Blog Content Area Start ##### -->
 <div class="blog-area mt-50 mb-50">
  <div class="container">
   <div class="row">
    <!-- Section Heading -->
    <div class="col-12">
     <div class="section-heading">
      <h2>Pengumuman Paroki Matraman</h2>
      <!-- <p>Loaded with fast-paced worship, activities, and video teachings to address real issues that students face each day</p> -->
     </div>
    </div>
   </div>
   <div class="row justify-content-between">
    <!-- Blog Posts Area -->
    <div class="col-12 col-lg-8">
     <input type="hidden" id="limit" value="6">
     <input type="hidden" id="jenis" value="<?php echo $jenis; ?>">
     <input type="hidden" id="url_pengumuman" value="<?php echo $url_pengumuman; ?>">
     <div class="row" id="pengumuman">
      <?php
                        $total = '';
                        if (!empty($pengumuman['id'])) {
                            for ($i = 0; $i < count($pengumuman['id']); $i++) {
                                $id = $pengumuman['id'][$i];
                                $title = $pengumuman['title'][$i];
                                $desc = $pengumuman['desc'][$i];
                                $content = $pengumuman['content'][$i];
                                $thumb = $pengumuman['thumb'][$i];
                                $url = $pengumuman['url'][$i];
                                $tanggal_pengumuman = date('d M, Y', strtotime($pengumuman['tanggal_pengumuman'][$i]));
                                $user = $pengumuman['user'][$i];
                        ?>
      <!-- Single Blog Post Area -->
      <div class="col-12 col-md-6">
       <div class="single-blog-post mb-50">
        <!-- <div class="post-thumbnail">
                                                <a href="<?php echo base_url() . 'pengumuman/' . $url; ?>"><img src="<?php echo base_url() . 'assets/uploads/pengumuman/' . $thumb; ?>" alt="" style="height: 262.5px;"></a>
                                            </div> -->
        <div class="post-content">
         <a href="<?php echo base_url() . 'pengumuman/' . $url; ?>" class="post-title">
          <h4><?php echo $title; ?></h4>
         </a>
         <div class="post-meta d-flex">
          <a href="#"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $user; ?></a>
          <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $tanggal_pengumuman; ?></a>
         </div>
         <p class="post-excerpt"><?php echo limit_words($desc, 30) . '...'; ?></p>
        </div>
       </div>
      </div>
      <?php
                                $total = $i + 1;
                            }
                        }

                        ?>
      <input type="hidden" id="total" value="<?php echo $total; ?>">
     </div>

     <div class="pagination-area text-center">
      <button type="button" class="btn crose-btn" id="more" style="width: 300px;">Selanjutnya</button>
     </div>
    </div>

    <!-- Sidebar Area -->
    <div class="col-12 col-sm-9 col-md-6 col-lg-3">
     <div class="post-sidebar-area">

      <!-- ##### Single Widget Area ##### -->
      <!-- <div class="single-widget-area">
                            <div class="search-form">
                                <form action="#" method="get">
                                    <input type="search" name="search" placeholder="Search Here">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div> -->

      <!-- ##### Single Widget Area ##### -->
      <div class="single-widget-area">
       <!-- Title -->
       <div class="widget-title">
        <h6>Berita Paroki Terbaru</h6>
       </div>

       <!-- Single Latest Posts -->
       <div class="single-latest-post">
        <?php
                                if (!empty($latest)) {
                                    for ($i = 0; $i < count($latest['id']); $i++) {
                                        $title = $latest['title'][$i];
                                        $url = $latest['url'][$i];
                                        $tanggal_berita = $latest['tanggal_berita'][$i];
                                ?>
        <a href="<?php echo base_url() . 'berita/' . $url; ?>" class="post-title">
         <h6><?php echo $title; ?></h6>
        </a>
        <p class="post-date"><?php echo date('d F Y', strtotime($tanggal_berita)); ?></p>
        <?php
                                    }
                                }
                                ?>
       </div>
      </div>

      <!-- ##### Single Widget Area ##### -->
      <div class="single-widget-area">
       <!-- Title -->
       <div class="widget-title">
        <h6>Arsip Pengumuman Paroki</h6>
       </div>
       <ol class="crose-archives">
        <?php
                                foreach ($archive as $row) {
                                    $year = $row['year'];
                                    $month = $row['month'];
                                ?>
        <li><a
          href="<?php echo base_url() . 'tanggal-pengumuman/' . $month . '/' . $year; ?>"><?php echo $month . ' ' . $year; ?></a>
        </li>
        <?php
                                }
                                ?>
       </ol>
      </div>

     </div>
    </div>
   </div>
  </div>
 </div>
 <!-- ##### Blog Content Area End ##### -->
</body>
<?php echo $footer ?>
<?php echo $scripts ?>
<script>
$(document).ready(function() {
 var total = $('#total').val();
 if (parseInt(total) == 6) {
  $('#more').show();
 } else {
  $('#more').hide();
 }
 $('#more').on('click', function() {
  $(this).hide();

  var limit = parseInt($('#limit').val());
  // var limit = 1;
  var jenis = $('#jenis').val();
  var url_pengumuman = $('#url_pengumuman').val();
  $.ajax({
   type: 'POST',
   data: {
    limit: limit,
    jenis: jenis,
    url_pengumuman: url_pengumuman,
   },
   dataType: 'json',
   url: '<?php echo base_url() . "Api/load_more_pengumuman"; ?>',
   success: function(data) {
    $('#pengumuman').append(data['pengumuman']);
    $('#limit').val(parseInt(limit) + 6);
    if (data['sisa'] == 1) {
     $('#more').show();
    } else {
     $('#more').hide();
    }
   }
  });
 });
});
</script>

</html>