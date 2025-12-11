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
                        <h2><?php echo $pelayanan[0]['name'];?></h2>
                        <!-- <p>Loaded with fast-paced worship, activities, and video teachings to address real issues that students face each day</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-justify">
                    <h3 class="mb-30">Tugas dan Tanggung Jawab <?php echo $pelayanan[0]['name'];?> :</h3>
                    <?php echo $pelayanan[0]['content'];?>
                </div> 
            </div>
        </div>
    </section>
    <!-- ##### Latest Sermons Area End ##### -->
</body>
<?php echo $footer?>
<?php echo $scripts?>
</html>
 