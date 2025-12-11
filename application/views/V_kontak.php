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
                        <h2>Kontak Paroki Matraman</h2>
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
                <div class="col-lg-6">
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <?= $this->session->flashdata('msg'); ?>
                        <?php echo form_open_multipart(base_url().'kontak-proses'); ?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="contact-name">Nama Lengkap:</label>
                                        <input type="text" name="name" class="form-control" id="contact-name" placeholder="Nama Lengkap" value="<?php echo set_value('name');?>">
                                        <?php echo form_error('name'); ?>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="contact-email">Email:</label>
                                        <input type="email" name="email" class="form-control" id="contact-email" placeholder="Email" value="<?php echo set_value('email');?>">
                                        <?php echo form_error('email'); ?>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="contact-number">No Telepon:</label>
                                        <input type="text" name="phone" class="form-control" id="contact-number" placeholder="+621234567910" value="<?php echo set_value('phone');?>">
                                        <?php echo form_error('phone'); ?>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="message">Pesan:</label>
                                        <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Pesan"><?php echo set_value('message');?></textarea>
                                        <?php echo form_error('message'); ?>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <center>
                                            <?php echo $captcha;// tampilkan recaptcha ?>
                                            <?php echo form_error('g-recaptcha-response'); ?>
                                    </center>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn crose-btn mt-15">Kirim Pesan</button>
                                </div>
                            </div>
                        <?php echo form_close();?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="map-area">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4207141612487!2d106.85745831473933!3d-6.208107795505875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4666e4e7e0d%3A0x1cd8aeebdc3dc5!2sSaint+Joseph+Catholic+Church%2C+Matraman!5e0!3m2!1sen!2sid!4v1553366276590" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Contact Form Area End ##### -->
</body>
<?php echo $footer?>
<?php echo $scripts?>
</html>
 