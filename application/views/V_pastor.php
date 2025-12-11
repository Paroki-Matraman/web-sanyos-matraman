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
                        <h2>Pastor-pastor yang pernah berkarya di Paroki Matraman</h2>
                        <!-- <p>Loaded with fast-paced worship, activities, and video teachings to address real issues that students face each day</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                  if(!empty($pastor['id'])){
                        for ($i=0; $i < count($pastor['id']); $i++) { 
                            $id = $pastor['id'][$i];
                            $name = $pastor['name'][$i];
                            $image = $pastor['image'][$i];
                            $start_date = $pastor['start_date'][$i];
                            $end_date = $pastor['end_date'][$i];

                      ?>     
                      <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-latest-sermons mb-100 text-center">
                            <!-- <div class="sermons-thumbnail"> -->
                                <img src="<?php echo base_url().'assets/uploads/pastor/'.$image;?>" alt="" style="width: 300px;height: 300px;">
                            <!-- </div> -->
                            <div class="text-center mt-3">
                                <h4><?php echo $name;?></h4>
                                <h6><?php echo $start_date.'-'.$end_date;?></h6>
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