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
                        <h2>Renugan Harian Paroki Matraman</h2>
                        <!-- <p>Loaded with fast-paced worship, activities, and video teachings to address real issues that students face each day</p> -->
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <!-- Blog Post Area --> 
                <div class="col-12 col-lg-8">
                    <input type="hidden" id="limit" value="6">
                    <input type="hidden" id="jenis" value="<?php echo $jenis;?>">
                    <input type="hidden" id="url_renungan" value="<?php echo $url_renungan;?>">
                    <div class="row" id="renungan">
                        <?php
                            $total = '';
                            if(!empty($renungan['id'])){
                                
                                for ($i=0; $i < count($renungan['id']); $i++) { 
                                    $id = $renungan['id'][$i];
                                    $judul = $renungan['judul'][$i];
                                    $ayat = $renungan['ayat'][$i];
                                    $penjelasan = $renungan['penjelasan'][$i];
                                    $image = $renungan['image'][$i];
                                    $tanggal = date('d M, Y', strtotime($renungan['tanggal'][$i]));
                                    $url = $renungan['url'][$i];
                                    $user = $renungan['user'][$i];
                                    ?>
                                    <!-- Single Blog Post Area -->
                                    <div class="col-12 col-md-6">
                                        <div class="single-blog-post mb-50">
                                            <div class="post-thumbnail">
                                                <a href="<?php echo base_url().'renungan-harian/'.$url;?>"><img src="<?php echo base_url().'assets/uploads/renungan/'.$image;?>" alt="" style="height: 262.5px;"></a>
                                            </div>
                                            <div class="post-content">
                                                <a href="<?php echo base_url().'renungan-harian/'.$url;?>" class="post-title">
                                                    <h4><?php echo $judul;?></h4>
                                                </a>
                                                <div class="post-meta d-flex">
                                                    <a href="#"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $user;?></a>
                                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $tanggal;?></a>
                                                </div>
                                                <p class="post-excerpt"><?php echo limit_words($penjelasan,10).'...';?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $total = $i;
                                }
                            }
                        ?>
                        <input type="hidden" id="total" value="<?php echo $total;?>">
                    </div>

                    <div class="pagination-area text-center">
                        <button type="button" class="btn crose-btn" id="more" style="width: 300px;">Selanjutnya</button>
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

                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Berita Paroki Terbaru</h6>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post">
                                <?php
                                    if(!empty($latest)){
                                        for ($i=0; $i < count($latest['id']); $i++) { 
                                            $title = $latest['title'][$i];
                                            $url = $latest['url'][$i];
                                            $tanggal_berita = $latest['tanggal_berita'][$i];
                                            ?>
                                            <a href="<?php echo base_url().'berita/'.$url;?>" class="post-title">
                                                <h6><?php echo $title;?></h6>
                                            </a>
                                            <p class="post-date"><?php echo date('d F Y', strtotime($tanggal_berita));?></p>
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
                                <h6>Arsip Renungan</h6>
                            </div>
                            <ol class="crose-archives">
                                <?php
                                    foreach ($archive as $row) {
                                        $year = $row['year'];
                                        $month = $row['month'];
                                        ?>
                                        <li><a href="<?php echo base_url().'tanggal-renungan/'.$month.'/'.$year;?>"><?php echo $month.' '.$year;?></a></li>
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
        console.log(total)
        $('#more').on('click', function() {
            $(this).hide();

            var limit = parseInt($('#limit').val());
            // var limit = 1;
            var jenis = $('#jenis').val();
            var url_renungan = $('#url_renungan').val();
            console.log(url_renungan);
            $.ajax({
                type: 'POST',
                data: {
                    limit : limit,
                    jenis : jenis,
                    url_renungan: url_renungan,
                },
                dataType: 'json',
                url: '<?php echo base_url() . "Api/load_more_renungan";?>',
                success: function(data) {
                    $('#renungan').append(data['renungan']);
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
 