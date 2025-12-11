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
                        <h2>Petugas Liturgi Paroki Matraman</h2>
                        <!-- <p>Loaded with fast-paced worship, activities, and video teachings to address real issues that students face each day</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <h4 class="text-center">Petugas Liturgi Gereja Santo Yoseph</h4>
                    <?php
                        if(!empty($yoseph['tanggal'])){
                            $date='';
                            for ($i=0; $i < count($yoseph['tanggal']); $i++) { 
                                $tanggal = $yoseph['tanggal'][$i];
                                ?>
                                <h6 class="text-center mt-3">Pada tanggal <?php echo date('d F Y', strtotime($tanggal));?> Pukul <?php echo date('H:i', strtotime($tanggal));?> WIB</h6>
                                <table class="table table-hover">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Petugas Liturgi</th>
                                    </tr>
                                    <?php
                                        $no = 1;
                                        for ($a=0; $a < count($yoseph['petugas'][$tanggal]); $a++) { 
                                            $petugas = $yoseph['petugas'][$tanggal][$a];
                                            $jabatan = $yoseph['jabatan'][$tanggal][$a];
                                            ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td><?php echo $petugas;?></td>
                                                <td><?php echo $jabatan;?></td>
                                            </tr>
                                            <?php
                                            $no++;
                                        }
                                    ?>
                                    
                                </table>
                                <?php
                            
                                $date = $tanggal;                                
                            }
                        }
                    ?>
                </div>
                
                                    
                <div class="col-md-12 col-lg-6">
                    <h4 class="text-center">Petugas Liturgi St Kapel Gembala Baik</h4>
                    <?php
                        if(!empty($gembala['tanggal'])){
                            $date='';
                            for ($i=0; $i < count($gembala['tanggal']); $i++) { 
                                $tanggal = $gembala['tanggal'][$i];
                                ?>
                                <h6 class="text-center mt-3">Pada tanggal <?php echo date('d F Y', strtotime($tanggal));?> Pukul <?php echo date('H:i', strtotime($tanggal));?> WIB</h6>
                                <table class="table table-hover">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Petugas Liturgi</th>
                                    </tr>
                                    <?php
                                        $no = 1;
                                        for ($a=0; $a < count($gembala['petugas'][$tanggal]); $a++) { 
                                            $petugas = $gembala['petugas'][$tanggal][$a];
                                            $jabatan = $gembala['jabatan'][$tanggal][$a];
                                            ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td><?php echo $petugas;?></td>
                                                <td><?php echo $jabatan;?></td>
                                            </tr>
                                            <?php
                                            $no++;
                                        }
                                    ?>
                                    
                                </table>
                                <?php
                            
                                $date = $tanggal;                                
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Latest Sermons Area End ##### -->
</body>
<?php echo $footer?>
<?php echo $scripts?>
</html>
 