<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>MOMMAM Admin Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="<?php  echo $this->config->item('tem_admin_css'); ?>bootstrap.min.css" rel="stylesheet">
<link href="<?php  echo $this->config->item('tem_admin_css'); ?>bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="<?php  echo $this->config->item('tem_admin_css'); ?>font-awesome.css" rel="stylesheet">
<link href="<?php  echo $this->config->item('tem_admin_css'); ?>style.css" rel="stylesheet">
<link href="<?php  echo $this->config->item('tem_admin_css'); ?>pages/dashboard.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue-resource@1.5.1"></script>

    <script src="<?php  echo $this->config->item('tem_admin_js'); ?>jquery-1.7.2.min.js"></script> 
<script src="<?php  echo $this->config->item('tem_admin_js'); ?>excanvas.min.js"></script> 
<script src="<?php  echo $this->config->item('tem_admin_js'); ?>chart.min.js" type="text/javascript"></script> 
<script src="<?php  echo $this->config->item('tem_admin_js'); ?>bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="<?php  echo $this->config->item('tem_admin_js'); ?>full-calendar/fullcalendar.min.js"></script>
 
<script src="<?php  echo $this->config->item('tem_admin_js'); ?>base.js"></script> 


</head>

<body>
    <!--================Header Menu Area =================-->
    <?php $this->load->view('themes/tem_admin/header_admin'); ?>
    <!--================Header Menu Area =================-->

    <!-- content -->
    <?php $this->load->view('themes/tem_admin/content_admin'); ?>
    <!-- end content -->

   <!-- start footer Area -->
   <?php $this->load->view('themes/tem_admin/footer_admin'); ?>
    <!-- End footer Area -->


<!-- Le javascript
================================================== --> 



<!-- Placed at the end of the document so the pages load faster --> 

</body>
</html>
