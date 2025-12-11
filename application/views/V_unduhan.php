<?php echo $head?>
<body>
<?php echo $header?>
    <!-- ##### Penjelasan Area End ##### -->
    <div class="blog-area mt-50 mb-50">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Unduhan Formulir</h2>
                        <!-- <p>Loaded with fast-paced worship, activities, and video teachings to address real issues that students face each day</p> -->
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <!-- Blog Post Area --> 
                <div class="col-12 col-lg-12">
                    <h4 class="mb-30 text-center">Berikut ini formulir-formulir yang dapat di download untuk keperluan masing-masing :</h4>
                    <ul class="nav nav-tabs mb-2">
                        <li class="nav-item"  style="width: 50%;">
                            <a class="nav-link active text-center" data-toggle="tab" href="#home">Dokumen Biasa</a>
                        </li>
                        <li class="nav-item"  style="width: 50%;">
                            <a class="nav-link text-center" data-toggle="tab" href="#contact">Majalah Obor</a>
                        </li>
                    </ul>
                    <div class="container">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active in" id="home">
                                <?php
                                if(!empty($unduhan['id'])){
                                    for ($i=0; $i < count($unduhan['id']); $i++) { 
                                        $id = $unduhan['id'][$i];
                                        $name = $unduhan['name'][$i];
                                        $file = $unduhan['file'][$i];
                                        $url = $unduhan['url'][$i];
                                        $tipe = $unduhan['tipe'][$i];
                                        if($tipe == 0){
                                        ?>
                                        <h5><i class="fa fa-arrow-right"></i> &nbsp;<a href="<?php echo base_url().'unduhan/'.$file;?>" style="color:#000000" target="_blank"><?php echo $name;?></a></h5>
                                        <!--<h5><i class="fa fa-arrow-right"></i> &nbsp;<a href="https://management-file.parokimatraman.or.id/<?php echo $file;?>" style="color:#000000" target="_blank"><?php echo $name;?></a></h5>-->
                                        <?php
                                        }
                                    }
                                }
                                ?>
                            </div>
    
                            <div role="tabpanel"  class="tab-pane fade" id="contact">
                                <?php
                                if(!empty($unduhan['id'])){
                                    for ($i=0; $i < count($unduhan['id']); $i++) { 
                                        $id = $unduhan['id'][$i];
                                        $name = $unduhan['name'][$i];
                                        $file = $unduhan['file'][$i];
                                        $url = $unduhan['url'][$i];
                                        $tipe = $unduhan['tipe'][$i];
                                        if($tipe == 1){
                                        ?>
                                        <h5><i class="fa fa-arrow-right"></i> &nbsp;<a class="media" style="display:unset !important;" target="_blank" href="<?php echo $url;?>" style="color:#000000"><?php echo $name;?></a></h5>
                                        <?php
                                        }
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php echo $footer?>
<?php echo $scripts?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="http://malsup.github.com/jquery.media.js"></script>
<script type="text/javascript">
    $(function () {
        $('.media').media({width: 868});
    });
</script>
</html>
 