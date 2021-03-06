<?php
/**
 * Created by PhpStorm.
 * User: MohammadSadjad
 * Date: 4/3/14
 * Time: 5:22 PM
 *
 * Description:
 * This file is a standard header for all of our pages
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $header_meta_description;?>">
    <meta name="author" content="CaveGate.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="apple-touch-icon" href="<?php echo base_url();?>img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>img/apple-touch-icon-72x72.png">
    <link rel="shortcut icon" href="<?php echo base_url();?>img/favicon.ico">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>img/apple-touch-icon-114x114.png">

<!--css starts form here-->
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/custom.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/notifIt.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/jquery.flipcountdown.css" />
    <!--[if lt IE 9]>
    <!--<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> -->
    <!--[endif]-->


    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo base_url();?>js/jquery-1.8.2.min.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>js/notify.js"></script>
    <script src="<?php echo base_url();?>js/notifIt.js"></script>
    <script src="<?php echo base_url();?>js/register.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/jquery.flipcountdown.js"></script>
    <script src="<?php echo base_url();?>js/moment.js"></script>
    <script src="<?php echo base_url();?>js/combodate.js"></script>


</head>
<body>
<div class="visible-sm">small<br/><br/></div>
<div class="visible-xs">extra small<br/><br/></div>
<div class="visible-md">medium</div>
<div class="visible-lg">large</div>
<div class="container">
    <div class="row col-md-offset-11 col-md-2 hidden-xs hidden-sm active"  >
        <?php if($is_login == true){?>
            <a href="<?php echo base_url()?>index.php/login/logout"><button class="btn-color-signout btn-sm btn-warning" id="logout_btn">Sign Out</button></a>
        <?php }?>

    </div>
        <header class="row all-header">

            <div class="col-xs-12 col-sm-12 col-md-3<?php if($LANGUAGE == "fa")echo "col-md-push-9";?>">
                <a href="<?php echo base_url();?>">
                    <img class="img-responsive" src="<?php echo base_url();?>img/logo-original<?php if($LANGUAGE == "fa")echo "-farsi";?>.png" alt="TimeGate Logo"/>
                </a>
            </div>
            <div class="header-title hidden-xs hidden-sm col-md-9 <?php if($LANGUAGE == "fa")echo "col-md-pull-3";?>">
                <?php echo $website_header;?>
            </div>
    </header>

<?php
    if($is_login == TRUE)
    {
?>

<?php
    }
?>
