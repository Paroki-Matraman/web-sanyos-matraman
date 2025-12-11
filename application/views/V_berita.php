<?php echo $head?>
<body>
<?php echo $header?>
<?php 
  function limit_words($string, $word_limit){
      $words = explode(" ",$string);
      return implode(" ",array_splice($words,0,$word_limit));
  }      
?>
    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area mt-50 mb-50">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Berita Paroki Matraman</h2>
                        <!-- <p>Loaded with fast-paced worship, activities, and video teachings to address real issues that students face each day</p> -->
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <!-- Blog Post Area --> 
                <div class="col-12 col-lg-8">
                    <input type="hidden" id="limit" value="6">
                    <input type="hidden" id="jenis" value="<?php echo $jenis;?>">
                    <input type="hidden" id="url_berita" value="<?php echo $url_berita;?>">
                    <div class="row" id="berita">
                        <?php
                             $total='';
                            if(!empty($berita['id'])){
                               
                                for ($i=0; $i < count($berita['id']); $i++) { 
                                    $id = $berita['id'][$i];
                                    $title = $berita['title'][$i];
                                    $desc = $berita['desc'][$i];
                                    $thumb = $berita['thumb'][$i];
                                    $url = $berita['url'][$i];
                                    $tanggal_berita = date('d M, Y', strtotime($berita['tanggal_berita'][$i]));
                                    $user = $berita['user'][$i];
                                    ?>
                                    <!-- Single Blog Post Area -->
                                    <div class="col-12 col-md-6">
                                        <div class="single-blog-post mb-50">
                                            <div class="post-thumbnail">
                                                <a href="<?php echo base_url().'berita/'.$url;?>"><img src="<?php echo base_url().'assets/uploads/berita/'.$thumb;?>" alt="" style="height: 262.5px;"></a>
                                            </div>
                                            <div class="post-content">
                                                <a href="<?php echo base_url().'berita/'.$url;?>" class="post-title">
                                                    <h4><?php echo $title;?></h4>
                                                </a>
                                                <div class="post-meta d-flex">
                                                    <a href="#"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $user;?></a>
                                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $tanggal_berita;?></a>
                                                </div>
                                                <p class="post-excerpt"><?php echo limit_words($desc,10).'...';?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $total = $i+1;
                                }
                            }

                        ?>
                        <input type="hidden" id="total" value="<?php echo $total;?>">
                    </div>

                    <div class="pagination-area text-center">
                        <button type="button" class="btn crose-btn" id="more" style="width: 300px;">Selanjutnya</button>
                        <!-- <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </nav> -->
                    </div>
                </div>

                <!-- Sidebar Area -->
                <div class="col-12 col-lg-3">
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
                                <h6>Kategori Berita Paroki</h6>
                            </div>
                            <ol class="crose-catagories">
                                <?php
                                    foreach ($kategori as $row) {
                                        $name = $row['nama'];
                                        $url = $row['url'];
                                        ?>
                                        <li><a href="<?php echo base_url().'kategori-berita/'.$url;?>"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo $name;?></a></li>
                                        <?php
                                    }
                                ?>
                            </ol>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Arsip Berita Paroki</h6>
                            </div>
                            <ol class="crose-archives">
                                <?php
                                    foreach ($archive as $row) {
                                        $year = $row['year'];
                                        $month = $row['month'];
                                        ?>
                                        <li><a href="<?php echo base_url().'tanggal-berita/'.$month.'/'.$year;?>"><?php echo $month.' '.$year;?></a></li>
                                        <?php
                                    }
                                ?>
                            </ol>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <!-- <div class="single-widget-area">
                            <div class="widget-title">
                                <h6>popular tags</h6>
                            </div>
                            <ol class="popular-tags d-flex flex-wrap">
                                <li><a href="#">Sermons</a></li>
                                <li><a href="#">Cross</a></li>
                                <li><a href="#">Pray</a></li>
                                <li><a href="#">Holly Cross</a></li>
                                <li><a href="#">Event</a></li>
                            </ol>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

</body>
<?php echo $footer?>
<?php echo $scripts?>
<script>
    $(document).ready(function() {
        var total = $('#total').val(); 
        if(parseInt(total) == 6){
            $('#more').show();
        }else{
            $('#more').hide();
        }
        $('#more').on('click', function() {
            $(this).hide();

            var limit = parseInt($('#limit').val());
            // var limit = 1;
            var jenis = $('#jenis').val();
            var url_berita = $('#url_berita').val();
            $.ajax({
                type: 'POST',
                data: {
                    limit : limit,
                    jenis : jenis,
                    url_berita: url_berita,
                },
                dataType: 'json',
                url: '<?php echo base_url() . "Api/load_more_berita";?>',
                success: function(data) {
                    $('#berita').append(data['berita']);
                    $('#limit').val(parseInt(limit) + 6);
                    if(data['sisa'] == 1){
                        $('#more').show();
                    }else{
                        $('#more').hide();
                    }
                }
            });
        });
    });
</script>

</html>
 