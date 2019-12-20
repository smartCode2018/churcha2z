<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700,700i%7CRubik:300,400,500,700" rel="stylesheet">

    <link rel="icon" type="image/png" href="favicon.ico">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/iconfont.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.structure.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.theme.min.css">


    <!--For Plugins external css-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/plugins.css" />

    <!--Theme custom css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css" />
</head>
<body>
    <div class="row" style="margin-top: 150px;">
        <div class="col-md-4 offset-4 text-center">
            <h1 class="pt-3 text-center">Welcome</h1>
            <h2 class="pt-3 text-center"><?= $this->session->userdata('firstname') ?> <?= $this->session->userdata('lastname') ?></h2>
            <hr>
            <a href="<?=site_url('packages')?>" class="btn btn-outline-secondary">Purchase A Service</a>
        </div>
    </div>
</body>
</html>