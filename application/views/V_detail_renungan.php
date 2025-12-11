<?php echo $head?>
<body>
<?php echo $header?>
    <!-- ##### Blog Content Area Start ##### -->
    <section class="blog-content-area section-padding-100">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Blog Posts Area -->
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">
                        <!-- Post Details Area -->
                        <div class="single-post-details-area">
                            <div class="post-thumbnail mb-30">
                                <h2 class="post-title mb-3">
                                    <?php echo $renungan[0]['judul'];?>        
                                </h2>
                                <img src="<?php echo base_url().'assets/uploads/renungan/'.$renungan[0]['image'];?>">
                            </div>
                            <div class="post-content">
                                <p class="text-center"><?php 
                                    if($renungan[0]['ayat'] == '-'){ 
                                        echo'';
                                    }else{
                                        echo $renungan[0]['ayat'];
                                    }
                                ?></p>
                                <?php echo $renungan[0]['penjelasan'];?>
                            </div>
                        </div>

                        <!-- Post Tags & Share -->
                        <div class="post-tags-share d-flex align-items-center">
                            <!-- Tags -->
                            <!-- <ol class="popular-tags d-flex flex-wrap">
                                <li>Tags:</li>
                                <li><a href="#">Pray,</a></li>
                                <li><a href="#">Hope,</a></li>
                                <li><a href="#">Church</a></li>
                            </ol> -->
                            <!-- Share -->
                            <!-- <div class="post-share">
                                <span>Share:</span>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                            </div> -->
                            <div id="share"></div>
                        </div>
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
    </section>
    <!-- ##### Blog Content Area End ##### -->
</body>
<?php echo $footer?>
<?php echo $scripts?>
</html>
 