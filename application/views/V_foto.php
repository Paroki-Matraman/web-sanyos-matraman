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
                        <h2>Kumpulan Foto Paroki Matraman</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <input type="hidden" id="limit" value="8">
                <div class="row" id="album">
                    <?php
                        $total = '';
                        if(!empty($album['id'])){
                            for ($i=0; $i < count($album['id']); $i++) { 
                                $id = $album['id'][$i];
                                $name = $album['name'][$i];
                                $url = $album['url'][$i];
                            // }
                            ?>
                            <!-- Single About Us Content -->
                            <div class="col-12 col-md-3 col-lg-3">
                                <div class="about-us-content">
                                    <center>
                                    <a href="<?php echo base_url() . 'album/'.$url; ?>">
                                        <img style="width: 200px; height: 150px;" src="<?php echo base_url() . 'assets/img/icon.png'; ?>" alt="">
                                        <div class="about-text text-center">
                                            <h6><?php echo $name;?></h6>
                                        </div>
                                    </a>
                                    </center>
                                </div>
                            </div>
                            <?php
                            $total = $i + 1;
                            }
                        }
                    ?>   
                    <input type="hidden" id="total" value="<?php echo $total;?>">  
                </div>
                <div class="col-md-12 mt-4">
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
            </div>
        </div>
    </section>
    <!-- ##### Latest Sermons Area End ##### -->
</body>
<?php echo $footer?>
<?php echo $scripts?>
<script>
    $(document).ready(function() {
        var total = $('#total').val(); 
        if(parseInt(total) == 8){
            $('#more').show();
        }else{
            $('#more').hide();
        }
        $('#more').on('click', function() {
            $(this).hide();

            var limit = parseInt($('#limit').val());
            $.ajax({
                type: 'POST',
                data: {
                    limit : limit,
                },
                dataType: 'json',
                url: '<?php echo base_url() . "Api/load_more_album";?>',
                success: function(data) {
                    $('#album').append(data['album']);
                    $('#limit').val(parseInt(limit) + 8);
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