<?php echo $head?>
<body>
<?php echo $header?>
    <!-- ##### Latest Sermons Area Start ##### -->
    <section class="latest-sermons-area mb-30">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12 mt-50">
                    <div class="section-heading">
                        <h2>Sejarah Paroki Matraman</h2>
                        <!-- <p>Loaded with fast-paced worship, activities, and video teachings to address real issues that students face each day</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="<?php echo base_url().'assets/foto-lama.jpg'?>" alt="" style="width:70%; height:auto">
                </div>
                <div class="col-md-12 mt-30 text-justify">
                    <h3>Perjalanan Paroki Matraman</h3><br>
                    <?php echo $sejarah[0]['desc'];?>
                </div> 
            </div>
        </div>
    </section>
    <!-- ##### Latest Sermons Area End ##### -->
</body>
<?php echo $footer?>
<?php echo $scripts?>
</html>