<?php

include_once '../includes/source/session.php';
require_once '../includes/source/dp_connect.php';

$result = $conn->query("SELECT * FROM `settings`") or die($conn->error);
$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="<?php echo $lang['Page Direction']?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "{$data['website_title']}"; ?></title>
    <link rel="stylesheet" href="/style/bootstrap.min.css">
    <link rel="stylesheet" href="/style/css/all.min.css">
    <link rel="shortcut icon" type="image/png" href="<?php echo "{$data['website_favicon']}"; ?>" />
<style>
    *{
      direction: <?php echo $lang['Page Direction CSS direction']?>;
      padding: 0px;
      margin: 0px;
      text-align: <?php echo $lang['Page Direction CSS text-align']?>;
    }
    .dropdown-item{
      text-align: <?php echo $lang['Page Direction CSS text-align']?>;
    }
    .form-control-borderless {
      border: none;
    }

    .form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
      border: none;
      outline: none;
      box-shadow: none;
    }
    tr th, tr td {
      text-align: center !important;
    }
    .text-center{
      color: #fff;
      text-align: center;
      padding: 14px;
    }
    #upload-a-picture{
      color: #212529;
    }

    #wrapper {
      overflow-x: hidden;
    }
    /* admin-sidebar.css */
    #sidebar-wrapper {
      min-height: 100vh;
      margin-<?php echo $lang['Page Direction CSS text-align']?>: -15rem;
      -webkit-transition: margin .25s ease-out;
      -moz-transition: margin .25s ease-out;
      -o-transition: margin .25s ease-out;
      transition: margin .25s ease-out;
    }

    #sidebar-wrapper .sidebar-heading {
      padding: 0.875rem 1.25rem;
      font-size: 1.2rem;
    }

    #sidebar-wrapper .list-group {
      width: 15rem;
    }

    #page-content-wrapper {
      min-width: 100vw;
    }

    #wrapper.toggled #sidebar-wrapper {
      margin-<?php echo $lang['Page Direction CSS text-align']?>: 0;
    }

    @media (min-width: 768px) {
      #sidebar-wrapper {
        margin-<?php echo $lang['Page Direction CSS text-align']?>: 0;
      }

      #page-content-wrapper {
        min-width: 0;
        width: 100%;
      }

      #wrapper.toggled #sidebar-wrapper {
        margin-<?php echo $lang['Page Direction CSS text-align']?>: -15rem;
      }
    }
    /* admin-spinner-grow */
    #spinner{
      position:fixed;
      top: 50%;
      left: 50%;
      width: 3rem;
      height: 3rem;
    }
    /* admin-spinner-grow-background */
    #loadbackground{
      width:100%;
      height:100%;
      position:fixed;
      z-index:9999;
      background:no-repeat center center rgba(0,0,0,0.25);
    }
    /* admin posts title*/
    #posts_title{
      width: 100%;
    }
     /* admin posts tags*/
    #posts_tags{
      width: 100%;
    }
     /* admin posts js content*/
    #cke_content{
      width: 100%;
      height: 300px;
      border-radius: 0.25rem;
    }
    .cke_editable{
      text-align: left;
      direction: ltr;
    }
     /* admin posts url*/
    #posts_url{
      direction: ltr;
      text-align: left;
    }
     /* admin button float*/
    #float-left{
      float: <?php echo $lang['Posts float']?>;
    }
    /* admin posts url */
    .input-group>.custom-select:not(:last-child), .input-group>.form-control:not(:last-child) {
    border-top-right-radius: .25rem;
    border-bottom-right-radius: .25rem;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    }
    .input-group-text {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0;
      border-top-left-radius: .25rem;
      border-bottom-left-radius: .25rem;
      text-align: left;
      direction: rtl;
    }
    label.padding{
      padding-left: <?php echo $lang['Posts url label padding left']?>;
      padding-right: <?php echo $lang['Posts url label padding right']?>;
    }
</style>
    <link rel="stylesheet" href="/style/dark-mode.css">
</head>
<body>
<!--spinner-grow-->
<div id="spinner" class="spinner-grow text-success" role="status">
</div>
<!--spinner-grow-background-->
<div id="loadbackground"></div>
