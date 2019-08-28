<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php  echo $this->config->item('tem_frontend_img'); ?>favicon.png" type="image/png">
    <title>Medcare Medical</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php  echo $this->config->item('tem_frontend_css'); ?>bootstrap.css">
    <link rel="stylesheet" href="<?php  echo $this->config->item('tem_frontend_css'); ?>themify-icons.css">
    <link rel="stylesheet" href="<?php  echo $this->config->item('tem_frontend_css'); ?>flaticon.css">
    <link rel="stylesheet" href="<?php  echo $this->config->item('tem_frontend_vendors'); ?>fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php  echo $this->config->item('tem_frontend_vendors'); ?>owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php  echo $this->config->item('tem_frontend_vendors'); ?>animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="<?php  echo $this->config->item('tem_frontend_css'); ?>style.css">
    <link rel="stylesheet" href="<?php  echo $this->config->item('tem_frontend_css'); ?>responsive.css">
</head>
<body>

    <!--================Header Menu Area =================-->
    <?php $this->load->view('themes/tem_frontend/header_frontend'); ?>
    <!--================Header Menu Area =================-->

    <!-- content -->
    <?php $this->load->view('themes/tem_frontend/content_frontend'); ?>
    <!-- end content -->
    
    <!-- start footer Area -->
    <?php $this->load->view('themes/tem_frontend/footer_frontend'); ?>
    <!-- End footer Area -->






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php  echo $this->config->item('tem_frontend_js'); ?>jquery-2.2.4.min.js"></script>
<script src="<?php  echo $this->config->item('tem_frontend_js'); ?>popper.js"></script>
<script src="<?php  echo $this->config->item('tem_frontend_js'); ?>bootstrap.min.js"></script>
<script src="<?php  echo $this->config->item('tem_frontend_js'); ?>stellar.js"></script>
<script src="<?php  echo $this->config->item('tem_frontend_vendors'); ?>owl-carousel/owl.carousel.min.js"></script>
<script src="<?php  echo $this->config->item('tem_frontend_js'); ?>jquery.ajaxchimp.min.js"></script>
<script src="<?php  echo $this->config->item('tem_frontend_js'); ?>waypoints.min.js"></script>
<script src="<?php  echo $this->config->item('tem_frontend_js'); ?>mail-script.js"></script>
<script src="<?php  echo $this->config->item('tem_frontend_js'); ?>contact.js"></script>
<script src="<?php  echo $this->config->item('tem_frontend_js'); ?>jquery.form.js"></script>
<script src="<?php  echo $this->config->item('tem_frontend_js'); ?>jquery.validate.min.js"></script>
<script src="<?php  echo $this->config->item('tem_frontend_js'); ?>mail-script.js"></script>
<script src="<?php  echo $this->config->item('tem_frontend_js'); ?>theme.js"></script>
</body>
</html>