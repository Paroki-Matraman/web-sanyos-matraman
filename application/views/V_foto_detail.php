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
                        <h2 id="head"></h2>
                        <!-- <p>Loaded with fast-paced worship, activities, and video teachings to address real issues that students face each day</p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="gallery-area d-flex flex-wrap" id="foto_detail">
         <input type="hidden" id="limit" value="15">
         <input type="hidden" id="url" value="<?php echo $url;?>">       
        <?php
            if(!empty($foto['id'])){
                $total = '';
                for ($i=0; $i < count($foto['id']); $i++) { 
                    $id = $foto['id'][$i];
                    $album = $foto['album'][0];
                    $foto2 = $foto['foto'][$i];
                    $url = $foto['url'][0];
                
                ?>
                <!-- ##### Gallery Area Start ##### -->
                    <!-- Single Gallery Area -->
                    <div class="single-gallery-area container mb-30">
                        <a href="<?php echo base_url().'assets/uploads/album/'.$url.'/'.$foto2;?>" class="gallery-img" title="<?php echo $album;?>">
                            <img src="<?php echo base_url().'assets/uploads/album/'.$url.'/'.$foto2;?>" alt="">
                        </a>
                    </div>
                    <input type="hidden" id="album" value="<?php echo $album;?>">
                <?php
                $total = $i + 1;
                }
                ?>
                <input type="hidden" id="total" value="<?php echo $total;?>">  
                <?php
            }
        ?>
    </div>
    <div class="row mb-4">
        <div class="col-md-12">
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
    <!-- ##### Latest Sermons Area End ##### -->
</body>
<?php echo $footer?>
<?php echo $scripts?>
<script>
    var album = $('#album').val();
    $('#head').text(album);
    $(document).ready(function() {
        var total = $('#total').val(); 
        if(parseInt(total) == 15){
            $('#more').show();
        }else{
            $('#more').hide();
        }
        $('#more').on('click', function() {
            $(this).hide();

            var limit = parseInt($('#limit').val());
            var url = $('#url').val();
            $.ajax({
                type: 'POST',
                data: {
                    limit : limit,
                    url : url,
                },
                dataType: 'json',
                url: '<?php echo base_url() . "Api/load_more_foto_detail";?>',
                success: function(data) {
                    $('#foto_detail').append(data['foto']);
                    $('#limit').val(parseInt(limit) + 15);
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