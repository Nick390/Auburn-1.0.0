<?php

// Check system configuration before proceeding
require_once '../includes/source/system_check.php';

include_once '../includes/source/session.php';
require_once '../includes/source/dp_connect.php';
include_once '../includes/source/function.php';

// Only proceed with database operations if system is configured and connection exists
if (isset($conn) && $conn) {
    $result = $conn->query("SELECT * FROM `settings`") or die($conn->error);
    $data = $result->fetch_assoc();
} else {
    $data = null;
}

// Set default values if no settings found or no database connection
if (!$data) {
    $data = [
        'website_title' => 'Auburn CMS',
        'website_favicon' => '../admin/files/favicon.ico',
        'website_header' => ''
    ];
}
?>
<!DOCTYPE html>
<html lang="ar">  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo htmlspecialchars($data['website_title']); ?></title>
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/css/all.min.css">
    <link rel="shortcut icon" type="image/png" href="<?php echo htmlspecialchars($data['website_favicon']); ?>" />
    <?php echo htmlspecialchars($data['website_header']); ?>
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