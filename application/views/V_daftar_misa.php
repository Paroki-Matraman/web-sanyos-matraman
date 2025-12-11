<?php echo $head?>
<body>
<?php echo $header?>
<!-- ##### Contact Area Start ##### -->
<section class="contact-area">
    <div class="container">
        <div class="row">
            <!-- Section Heading -->
            <div class="col-12 mt-50">
                <div class="section-heading">
                    <h2>Daftar Misa Paroki Matraman</h2>
                    <!-- <p>Loaded with fast-paced worship, activities, and video teachings to address real issues that students face each day</p> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->

<!-- ##### Contact Form Area Start ##### -->
<div class="contact-form section-padding-0-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Contact Form Area -->
                <div class="contact-form-area">
                    <?= $this->session->flashdata('msg'); ?>
                    <form id="create_misa">
                    <div class="row" id="form">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="contact-name">Pilih Tanggal Misa:</label>
                                <select class="form-control" name="jadwal_misa" id="jadwal_misa" style="color: black !important;" required>
                                    <option value="" disabled selected>Pilih Tanggal</option>
                                <?php
                                    if(!empty($jadwal_misa['id'])){
                                        for($i=0; $i < count($jadwal_misa['id']); $i++){
                                            $id = $jadwal_misa['id'][$i];
                                            $name = $jadwal_misa['name'][$i];
                                            $tanggal = $jadwal_misa['tanggal'][$i];
                                            $kuota = $jadwal_misa['kuota'][$i];
                                            $wilayah = $jadwal_misa['wilayah'][$i];
                                            $sisa_kuota = $jadwal_misa['sisa_kuota'][$i];
                                        ?>
                                            <option value="<?php echo $id;?>"><?php echo date('d F Y H:i A', strtotime($tanggal));?></option>
                                        <?php
                                        }
                                    }
                                ?>
                                <?php echo form_error('jadwal_misa'); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="contact-email">No Kartu Keluarga Gereja:</label>
                                <input type="text" name="no_kartu_kk" class="form-control" id="no_kartu_kk" placeholder="No Kartu Keluarga Gereja" style="color: black !important;" required autocomplete="off">
                            </div>
                        </div>
                        <div class="col-12 text-center" id="check">
                            <button type="button" id="check_data" class="btn crose-btn mt-15">Kirim</button>
                            <h5 style="color: #dc3545; display: none;" id="msgWaiting">Sedang Diproses...</h5>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Contact Form Area End ##### -->
</body>
<?php echo $footer?>
<?php echo $scripts?>
<script>
    $(function () {
        $('#check_data').on('click', function () {
            var id_jadwal = $('#jadwal_misa').val();
            var no_kartu_kk = $('#no_kartu_kk').val();
            if(id_jadwal == '' || no_kartu_kk == ''){
                swal({
                    title: "Harap Lengkapi Form Diatas",
                    icon: "error",
                    buttons: {
                        confirm: {
                            text: "Tutup",
                            value: true,
                            visible: true,
                            className: "btn btn-danger text-center",
                            closeModal: true
                        }
                    }
                });
            }else{
                $('#check_data').hide(200);
                $('#msgWaiting').hide(200);
                $.ajax({
                    type: "POST",
                    url: '<?php echo base_url().'Api/check_data_jadwal_misa';?>',
                    dataType: 'json',
                    data:{
                        id_jadwal: id_jadwal,
                        no_kartu_kk:no_kartu_kk
                    },
                    success: function(response){
                        if(response.response === "failed no kartu kk"){
                            swal({
                                title: "Maaf No Kartu Keluarga Gereja Tidak Terdaftar",
                                icon: "error",
                                buttons: {
                                    confirm: {
                                        text: "Tutup",
                                        value: true,
                                        visible: true,
                                        className: "btn btn-danger",
                                        closeModal: true
                                    }
                                }
                            });
                            $('#check_data').show(200);
                            $('#msgWaiting').hide(200);
                        }else if(response.response === "banned"){
                            swal({
                                title: "Maaf Wilayah Anda Tidak Dapat Misa Pada Tanggal Ini",
                                icon: "error",
                                buttons: {
                                    confirm: {
                                        text: "Tutup",
                                        value: true,
                                        visible: true,
                                        className: "btn btn-danger",
                                        closeModal: true
                                    }
                                }
                            });
                            $('#check_data').show(200);
                            $('#msgWaiting').hide(200);
                        }else if(response.response === "full"){
                            swal({
                                title: "Maaf Kuota Sudah Terpenuhi",
                                icon: "error",
                                buttons: {
                                    confirm: {
                                        text: "Tutup",
                                        value: true,
                                        visible: true,
                                        className: "btn btn-danger",
                                        closeModal: true
                                    }
                                }
                            });
                            $('#check_data').show(200);
                            $('#msgWaiting').hide(200);
                        }else if(response.response === "success"){
                            $('check').remove();
                            $('#form').append(response.data);
                            $('#form').append('<div class="col-12"><div class="form-group text-center"><input type="submit" value="Kirim" class="btn crose-btn mt-15"></div></div>')
                        }
                    }
                });
            }

        });
    });
    $("#create_misa").submit(function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.

        $.ajax({
            type: "POST",
            url: '<?php echo base_url().'Api/create_regis_misa';?>',
            dataType: 'json',
            data: $("#create_misa").serialize(),
            success: function(response){
                if(response.response == 'full'){
                    var text;
                    if(response.sisa === 0){
                        text = "Maaf Kuota Misa Sudah Terpenuhi";
                    }else{
                        text = "Maaf Sisa Kuota Hanya "+response.sisa;
                    }
                    swal({
                        title: text,
                        icon: "error",
                        buttons: {
                            confirm: {
                                text: "Tutup",
                                value: true,
                                visible: true,
                                className: "btn btn-danger",
                                closeModal: true
                            }
                        }
                    });
                }else if(response.response == 'umat empty'){
                    swal({
                        title: "Harap Pilih Salah Satu Umat",
                        icon: "error",
                        buttons: {
                            confirm: {
                                text: "Tutup",
                                value: true,
                                visible: true,
                                className: "btn btn-danger",
                                closeModal: true
                            }
                        }
                    });
                }else if(response.response == 'match found'){
                    swal({
                        title: "Umat Ini "+response.umat+" Sudah Daftar Misa",
                        icon: "error",
                        buttons: {
                            confirm: {
                                text: "Tutup",
                                value: true,
                                visible: true,
                                className: "btn btn-danger",
                                closeModal: true
                            }
                        }
                    });
                }else if(response.response == 'success'){
                    swal({
                        title: "Daftar Misa Berhasil Silahkan Cek Email Untuk Undangan Nya",
                        icon: "success",
                        buttons: {
                            confirm: {
                                text: "Tutup",
                                value: true,
                                visible: true,
                                className: "btn btn-danger",
                                closeModal: true
                            }
                        }
                    });
                }else if(response.response == 'fail'){
                    swal({
                        title: "Gagal",
                        icon: "error",
                        buttons: {
                            confirm: {
                                text: "Tutup",
                                value: true,
                                visible: true,
                                className: "btn btn-danger",
                                closeModal: true
                            }
                        }
                    });
                }
            }
        });
    });
</script>
</html>
