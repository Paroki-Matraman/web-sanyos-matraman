<?php echo $head?>
<body>
<?php echo $header?>
    <!-- ##### Latest Sermons Area Start ##### -->
    <?php
        $abjad[] = 'I';
        $abjad[] = 'II';
        $abjad[] = 'III';
        $abjad[] = 'IV';
        $abjad[] = 'V';
        $abjad[] = 'VI';
        $abjad[] = 'VII';
        $abjad[] = 'VIII';
    ?>
    <section class="latest-sermons-area mb-30">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12 mt-50">
                    <div class="section-heading">
                        <h2>Wilayah dan Lingkungan di Paroki Matraman</h2>
                        <!-- <p>Loaded with fast-paced worship, activities, and video teachings to address real issues that students face each day</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    if(!empty($wilayah)){
                        for ($i=0; $i < count($wilayah['id']); $i++) { 
                            $id = $wilayah['id'][$i];
                            $nama = $wilayah['nama'][$i];
                            $ketua_wilayah = $wilayah['ketua_wilayah'][$i];
                            $alamat = $wilayah['alamat'][$i];
                            ?>
                            <div class="col-6 col-md-6 col-sm-6 mt-50">
                                <h3 class="mb-15"><?php echo $abjad[$i];?>.&nbsp;<?php echo $nama;?></h3>
                                <p>Ketua Wilayah : <?php echo $ketua_wilayah;?><br>
                                Alamat : <?php echo $alamat;?>
                                </p>
                                <?php
                                    if(!empty($wilayah[$id]['id'])){
                                        $no = 1;
                                        for ($j=0; $j < count($wilayah[$id]['id']); $j++) { 
                                            $id_lingkungan = $wilayah[$id]['id'][$j];
                                            $id_wilayah = $wilayah[$id]['id_wilayah'][$j];
                                            $nama_lingkungan = $wilayah[$id]['nama'][$j];
                                            $ketua_lingkungan = $wilayah[$id]['ketua_lingkungan'][$j];
                                            $alamat_lingkungan = $wilayah[$id]['alamat'][$j];
                                            ?>
                                            <h5 class="mb-10" style="margin-left:30px;"><?php echo $j+1;?>.&nbsp;<?php echo $nama_lingkungan;?></h4>
                                            <p style="margin-left:50px;">
                                                Ketua Lingkungan : <?php echo $ketua_lingkungan;?><br>
                                                Alamat : <?php echo $alamat_lingkungan;?>
                                            </p>
                                            <?php
                                            // $j = 0;
                                        }
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    }
                ?>
                <!-- <div class="col-6 col-md-6 col-sm-6 mt-50">
                    <h3 class="mb-15">I.&nbsp;Wilayah Santo Aloysius Kayumanis I</h3>
                    <p>Ketua Wilayah : Flavianus Apul Antonius Purba <br>
                    Alamat : Gg. Moncokerto III No. 19A, RT.015/013,
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">1.&nbsp;Lingkungan Santo Antonius</h4>
                    <p style="margin-left:50px;">Kayumanis IV/V Baru<br>
                        Ketua Lingkungan : Theresia Purwaningsih<br>
                        Alamat : Jl. Kayumanis V Baru No.12 RT.007/04, Kayumanis, Matraman, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">2.&nbsp;Lingkungan Santa Anastasia</h4>
                    <p style="margin-left:50px;">Kayumanis VI/VII Baru<br>
                        Ketua Lingkungan : Nazarius Lamar<br>
                        Alamat : Jl. Kayumanis VIII Gg. Sengon 6/17 RT.015/007, Kayumanis, Matraman, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">3.&nbsp;Lingkungan Santo Albertus</h4>
                    <p style="margin-left:50px;">Moncokerto<br>
                        Ketua Lingkungan : Yoh. Pembaptis Hendra Tri Pramono<br>
                        Alamat : Jl. Moncokerto Raya III/25B Utan Kayu Selatan, Matraman, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">4.&nbsp;Lingkungan Santo Arnoldus</h4>
                    <p style="margin-left:50px;">Kebon Kelapa<br>
                        Ketua Lingkungan : Rudi D. Rumapea<br>
                        Alamat : Jl. Kelapa Sawit II Gg. Oyot No.9A RT.009/10, Utan Kayu Selatan, Matraman, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">5.&nbsp;Lingkungan Santo Agustinus</h4>
                    <p style="margin-left:50px;">Kebon Kelapa Tinggi<br>
                        Ketua Lingkungan : Pankratius Niksan<br>
                        Alamat : Jl. Pisangan Baru Utara No.15A RT.12/RW.13, Pisangan Baru, Matraman, Jakarta Timur
                    </p>
                    <h3 class="mb-15">II.&nbsp;Wilayah Santo Alexander Kayumanis II</h3>
                    <p>Ketua Wilayah : Andreas Ong Kim Lay<br>
                    Alamat : Jl. Kayumanis VIII No.14 RT.003/08 Kayumanis, Matraman, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">1.&nbsp;Lingkungan Santo Alfonsus</h4>
                    <p style="margin-left:50px;">Kayumanis VIII/X<br>
                        Ketua Lingkungan : Yohanes Rusmanto Irianto<br>
                        Alamat : Jl. Kayumanis VIII No.14 RT.003/08 Kayumanis, Matraman, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">2.&nbsp;Lingkungan Santo Adrianus</h4>
                    <p style="margin-left:50px;">Kayumanis IV Lama<br>
                        Ketua Lingkungan : Gizella Kwee Pin Lan<br>
                        Alamat : Jl. Kayumanis X No.21 RT.002/009, Kel. Kayumanis, Kec. Matraman, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">3.&nbsp;Lingkungan Santa Anna</h4>
                    <p style="margin-left:50px;">Kayumanis V Lama<br>
                        Ketua Lingkungan : Petrus Weto<br>
                        Alamat : Jl. Kayumanis V Lama/Pis. Baru Tengah No.127 RT.05/03, Pisangan Baru, Matraman, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">4.&nbsp;Lingkungan Santo Anselmus</h4>
                    <p style="margin-left:50px;">Pisangan Baru<br>
                        Ketua Lingkungan : Richard Haryansia<br>
                        Alamat : Jl. Pisangan Baru I No.20 RT.001/08, Pisangan Baru, Matraman, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">5.&nbsp;Lingkungan Santo Ambrosius</h4>
                    <p style="margin-left:50px;">Pisangan Baru Timur<br>
                        Ketua Lingkungan : Octavianus Donny Subrata<br>
                        Alamat : Jl. Pisangan Baru Timur No.22 RT.007/009, Pisangan Baru, Matraman, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">6.&nbsp;Lingkungan Santo Andreas</h4>
                    <p style="margin-left:50px;">Kebon Sereh<br>
                        Ketua Lingkungan : Silvester Lukas Jemadi<br>
                        Alamat : Jl. Pisangan Baru Selatan No.3 RT.001/015, Pisangan Baru, Matraman, Jakarta Timur
                    </p>
                    <h3 class="mb-15">III.&nbsp;Wilayah Santa Caecilia Jatinegara</h3>
                    <p>Ketua Wilayah : Maria Regina Betty Saputra<br>
                    Alamat : Gg. Banten VIII No.19A RT.006/005, Balimester, Jatinegara, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">1.&nbsp;Lingkungan Santo Cyrilus</h4>
                    <p style="margin-left:50px;">Jatinegara Utara I<br>
                        Ketua Lingkungan : Gregorius Agung Karim Sulaiman<br>
                        Alamat : Jl. Pasar Lama Utara No.53 RT.004/006, Balimester, Jatinegara, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">2.&nbsp;Lingkungan Santa Clara</h4>
                    <p style="margin-left:50px;">Jatinegara Utara II<br>
                        Ketua Lingkungan : Martinus Hendra Gunawan<br>
                        Alamat : Gg. Banten V No.6 RT.004/003, Balimester, Jatinegara, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">3.&nbsp;Lingkungan Santo Cornelius</h4>
                    <p style="margin-left:50px;">Jatinegara Tengah<br>
                        Ketua Lingkungan : M. Magdalena Siti Tarumaselej(Ibu Dede)<br>
                        Alamat : Jl. Jatinegara Barat III No.12 RT.011/003, Balimester, Jatinegara, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">4.&nbsp;Lingkungan Santo Carolus</h4>
                    <p style="margin-left:50px;">Jatinegara Selatan<br>
                        Ketua Lingkungan : Margaretha Ingewati<br>
                        Alamat : Jl. Kober Kecil No.14 RT.001/008, Rawabunga, Jatinegara, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">5.&nbsp;Lingkungan Santo Christoforus</h4>
                    <p style="margin-left:50px;">Jatinegara Timur<br>
                        Ketua Lingkungan : Angela Endang Djojoseputro<br>
                        Alamat : Jl. Jatinegara Timur No.21A RT.004/008, Balimester, Jatinegara, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">6.&nbsp;Lingkungan Santo Canisius</h4>
                    <p style="margin-left:50px;"> Bekasi Barat<br>
                        Ketua Lingkungan : Natalia Mardjaman<br>
                        Alamat :Jl. Bekasi Barat V/5 RT.009/002, Rawabunga, Jatinegara, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">7.&nbsp;Lingkungan Santa Catharina</h4>
                    <p style="margin-left:50px;">Bekasi Timur I<br>
                        Ketua Lingkungan : Martin Antonius <br>
                        Alamat : Jl. Bekasi Timur I No. 16 RT. 06/03, Rawabunga, Jatinegara, Jakarta Timur

                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">8.&nbsp;Lingkungan Santo Clemens</h4>
                    <p style="margin-left:50px;">Bekasi Timur II<br>
                        Ketua Lingkungan : Anastahasia Saeni Susylawati<br>
                        Alamat : Jl. Cenghai No. 58 Rt. 007/007, Rawabunga, Jatinegara, Jakarta Timur

                    </p>
                    <h3 class="mb-15">IV.&nbsp;Wilayah Santo Lukas Kesatrian</h3>
                    <p>Ketua Wilayah : L.C. Indah Wahyuningsih<br>
                    Alamat : Jl. Kesatrian X/H382 RT.009/03, Kebon Manggis, Matraman, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">1.&nbsp;Lingkungan Santo Leo Agung</h4>
                    <p style="margin-left:50px;">Kesatrian I<br>
                        Ketua Lingkungan : Maringan Erick Sitanggang<br>
                        Alamat : Jl. Kesatrian 5A/87 RT.028/03, Kebon Manggis, Matraman, Jakarta Timur

                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">2.&nbsp;Lingkungan Santo Ludovicius</h4>
                    <p style="margin-left:50px;">Kesatrian II<br>
                        Ketua Lingkungan : Agnes Sugesti<br>
                        Alamat : Jl. Kesatrian VIII H/40 RT.007/03, Kebon Manggis, Matraman, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">3.&nbsp;Lingkungan Santo Laurentius</h4>
                    <p style="margin-left:50px;">Kesatrian III<br>
                        Ketua Lingkungan : L.C. Indah Wahyuningsih<br>
                        Alamat : Jl. Kesatrian X/H382 RT.009/03, Kebon Manggis, Matraman, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">4.&nbsp;Lingkungan Santa Lidwina</h4>
                    <p style="margin-left:50px;">Kebon Manggis<br>
                        Ketua Lingkungan : P. Andre F. De Brussel Asse<br>
                        Alamat : Jl. Matraman Salemba IX/287 RT.004/01, Kebon Manggis, Matraman, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">5.&nbsp;Lingkungan Santo Lucius</h4>
                    <p style="margin-left:50px;">Tambak/Mandal Jaya<br>
                        Ketua Lingkungan : Antoniette Susiartha Apriana Simbolon<br>
                        Alamat : Jl. Tambak Gg. I No. 20, RT.017/06, Pegangsaan, Gambir, Jakarta Timur
                    </p>
                </div>
                <div class="col-md-6 col-md-6 col-sm-6 mt-50">
                    <h3 class="mb-15">V.&nbsp;Wilayah Santa Maria Manggarai</h3>
                    <p>Ketua Wilayah : Maria Magdalena Yani Mulyaningsih<br>
                    Alamat : Jl. Slamet Riyadi I No. 25 RT.005/04, Kebon Manggis, Matraman, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">1.&nbsp;Lingkungan Santo Marcelinus</h4>
                    <p style="margin-left:50px;">Slamet Riyadi<br>
                        Ketua Lingkungan : Maria Magdalena Yani Mulyaningsih<br>
                        Alamat : Jl. Slamet Riyadi I No. 25 RT.005/04, Kebon Manggis, Matraman, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">2.&nbsp;Lingkungan Santo Matheus</h4>
                    <p style="margin-left:50px;">Manggarai<br>
                        Ketua Lingkungan : Maria Regina Henuhili<br>
                        Alamat : Jl. Manggarai Utara VI/G1 RT. 008/07, Manggarai, Tebet, Jakarta Selatan 
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">3.&nbsp;Lingkungan Santa Martha</h4>
                    <p style="margin-left:50px;">Bukitduri Puteran<br>
                        Ketua Lingkungan : Otto Ria Malau ( Ibu Purba)<br>
                        Alamat : Jl. Prenjak No.9 RT.008/01, Bukit Duri, Tebet, Jakarta Selatan
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">4.&nbsp;Lingkungan Santo Markus</h4>
                    <p style="margin-left:50px;">Kampung Melayu<br>
                        Ketua Lingkungan : Endang Widyastuti Soetarso<br>
                        Alamat : Jl. Kamp Melayu Kecil I No.28 RT.010/011, Bukit Duri, Tebet, Jakarta Selatan
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">5.&nbsp;Lingkungan Santa Margaretha</h4>
                    <p style="margin-left:50px;">Bukitduri Tanjakan<br>
                        Ketua Lingkungan : Yosafat Iwan Februanto<br>
                        Alamat : Jl. Kampung Melayu Barat No. 33 RT.015/06, Bukit Duri, Tebet, Jakarta Selatan
                    </p>
                    <h3 class="mb-15">VI.&nbsp;Wilayah Santa Marcella Kebon Pala</h3>
                    <p>Ketua Wilayah : Alexander Rudy<br>
                    Alamat : Jl. Kebon Pala II No. 17 Gg. P RT.004/04, Kampung Melayu, Jatinegara, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">1.&nbsp;Lingkungan Santa Magdalena</h4>
                    <p style="margin-left:50px;">Kebon Pala II<br>
                        Ketua Lingkungan : Veronica Iwa<br>
                        Alamat : Jl. Kebon Pala II No.20 RT.006/05, Kampung Melayu, Jatinegara, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">2.&nbsp;Lingkungan Santo Mikael</h4>
                    <p style="margin-left:50px;">Kebon Pala<br>
                        Ketua Lingkungan : Marsella Rika Novita D<br>
                        Alamat : Jl. Kebon Pala II No.18 RT. 007/04, Kampung Melayu, Jatinegara, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">3.&nbsp;Lingkungan Santa Melania</h4>
                    <p style="margin-left:50px;">Kebon Pala III<br>
                        Ketua Lingkungan : Stephanus Henry Widjaja<br>
                        Alamat : Komplek Bukit Duri Permai Blok B No.9 RT.014/004, Kampung Melayu, Jatinegara, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">4.&nbsp;Lingkungan Santo Martinus</h4>
                    <p style="margin-left:50px;">Permata<br>
                        Ketua Lingkungan : Laurentia Pricilia Herlina Sulaiman<br>
                        Alamat : Jl. Permata II/3 RT.006/001, Kamp. Melayu, Jatinegara, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">5.&nbsp;Lingkungan Santa Martina</h4>
                    <p style="margin-left:50px;">Kebon Pala I<br>
                        Ketua Lingkungan : Ignatia  Ruth Nian Karunia<br>
                        Alamat : Jl. Kebon Pala I /29 RT.004/05, Kamp. Melayu, Jatinegara, Jakarta Timur
                    </p>
                    <h3 class="mb-15">VII.&nbsp;Wilayah Santo Petrus Utan Kayu</h3>
                    <p>Ketua Wilayah : Albertus Leonardo Adie Rossa S.A.<br>
                    Alamat : Gg. Asem Kranji No.8 RT.004/04, Utan Kayu Selatan, Matraman, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">1.&nbsp;Lingkungan Santo Philipus</h4>
                    <p style="margin-left:50px;">Utan Kayu<br>
                        Ketua Lingkungan : Sherly Cesilia<br>
                        Alamat : Jl. Nanas No. 62B RT.006/10, Utan Kayu Utara, Matraman, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">2.&nbsp;Lingkungan Santo Pancratius</h4>
                    <p style="margin-left:50px;">Galur Sari<br>
                        Ketua Lingkungan : Olmar Otto Malau<br>
                        Alamat : Jl. Kemuning III Dalam No.33 RT. 003/04, Utan Kayu Utara, Matraman, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">3.&nbsp;Lingkungan Santo Paulus</h4>
                    <p style="margin-left:50px;">Kramat Asem<br>
                        Ketua Lingkungan : Valensio Bodro Djoko Mulyono<br>
                        Alamat : Jl. Nanas Raya No.99 RT.006/02, Utan Kayu Selatan, Matraman, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">4.&nbsp;Lingkungan Santo Patrisius</h4>
                    <p style="margin-left:50px;">Pramuka<br>
                        Ketua Lingkungan : Johanes Irawan Kusuma Putra<br>
                        Alamat : Jl. Jeruk No. 17 RT.014/06, Utan Kayu Utara, Matraman, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">5.&nbsp;Lingkungan Santo Pius</h4>
                    <p style="margin-left:50px;">Salemba Utan<br>
                        Ketua Lingkungan : Luciana Tri Harjanti<br>
                        Alamat : Jl. Kayumanis III Baru No.06 RT.017/002, Kayumanis, Matraman, Jakarta Timur
                    </p>
                    <h3 class="mb-15">VIII.&nbsp;Wilayah Santa Theresia Matraman</h3>
                    <p>Ketua Wilayah : Martinus Rehan Uran<br>
                    Alamat : Jl. Palmeriam V/25 RT.016/008, Palmeriam, Matraman, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">1.&nbsp;Lingkungan Santo Timothius</h4>
                    <p style="margin-left:50px;">Kebon Kosong<br>
                        Ketua Lingkungan : Tua Marslinus Sijabat<br>
                        Alamat : Jl. Penggalang III/22 RT.007/10, Palmeriam, Matraman, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">2.&nbsp;Lingkungan Santo Theodorus</h4>
                    <p style="margin-left:50px;">Tegalan<br>
                        Ketua Lingkungan : Petrus Purwanto<br>
                        Alamat : Jl. Salemba Utan Barat Gg. No.3 RT. 008/07, Palmeriam, Matraman, Jakarta Timur 
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">3.&nbsp;Lingkungan Santo Titus</h4>
                    <p style="margin-left:50px;">Kayumanis I Lama<br>
                        Ketua Lingkungan : Bernadette Ika Astanti<br>
                        Alamat : Jl. Kayumanis I Lama No.22 RT.011/08, Palmeriam, Matraman, Jakarta Timur
                    </p>
                    <h5 class="mb-10" style="margin-left:30px;">4.&nbsp;Lingkungan Santo Thomas</h4>
                    <p style="margin-left:50px;">Solitude<br>
                        Ketua Lingkungan : Tiarlin Apridawati <br>
                        Alamat : Jl. Bunga Dalam II No.4 RT.004/09, Palmeriam, Matraman, Jakarta Timur
                    </p>
                </div> -->
            </div>
        </div>
    </section>
    <!-- ##### Latest Sermons Area End ##### -->
</body>
<?php echo $footer?>
<?php echo $scripts?>
</html>
