<?php echo $head?>
<body>
<?php echo $header?>
    <!-- ##### Latest Sermons Area Start ##### -->
    <section class="latest-sermons-area">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12 mt-50">
                    <div class="section-heading">
                        <h2>Dewan Paroki di Paroki Matraman</h2>
                        <!-- <p>Loaded with fast-paced worship, activities, and video teachings to address real issues that students face each day</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                  if(!empty($dewan_paroki['id'])){
                    for ($i=0; $i < count($dewan_paroki['id']); $i++) { 
                      $id = $dewan_paroki['id'][$i];
                      $nama = $dewan_paroki['nama'][$i];
                      $jabatan = $dewan_paroki['jabatan'][$i];
                      $image = $dewan_paroki['image'][$i];

                      ?>     
                      <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-latest-sermons mb-100 text-center">
                            <!-- <div class="sermons-thumbnail"> -->
                                <img src="<?php echo base_url().'assets/uploads/dewan_paroki/'.$image;?>" alt="" style="width: 300px;height: 300px;">
                            <!-- </div> -->
                            <div class="text-center mt-3">
                                <h4><?php echo $jabatan;?></h4>
                                <h5><?php echo $nama;?></h5>
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
    <!-- ##### Latest Sermons Area End ##### -->
</body>
<?php echo $footer?>
<?php echo $scripts?>
</html>