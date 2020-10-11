<?php

include_once '../includes/source/session.php';
require_once '../includes/source/dp_connect.php';
include_once '../includes/source/function.php';

$result = $conn->query("SELECT * FROM `settings`") or die($conn->error);
$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="ar">  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo "{$data['website_title']}"; ?></title>
    <link rel="stylesheet" href="/style/bootstrap.min.css">
    <link rel="stylesheet" href="/style/css/all.min.css">
    <link rel="shortcut icon" type="image/png" href="<?php echo "{$data['website_favicon']}"; ?>" />
    <?php echo "{$data['website_header']}"; ?>
    <style>
        *{
            direction: rtl;
            text-align: right;
        }
        .navbar{
            text-align: right;
        }
        .dropdown-item{
            text-align: right !important;
        }
        .navbar-toggler{
        justify-content: flex-end;
        }
        @media screen and (max-width: 768px) {
    .navbar-brand{
        border-left: 0px;
        margin-left: 0px;
        padding-left: 0px;
    }
    
}
   .notification-style{
	   height:auto;
	   max-height: 400px;
	   width:400px;
	   overflow:auto;
	   word-break: break-all;
   }
   .notification-text{
	   width: 100px;
   }
   .notification-logo{
	   margin-right: 196px;
   }
    </style>
</head>
<body>