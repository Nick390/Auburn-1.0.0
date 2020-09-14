<?php

include_once '../includes/source/session.php';
require_once '../includes/source/dp_connect.php';
include_once '../includes/source/function.php';

?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بوابة العلاقات الحكومية</title>
    <link rel="stylesheet" href="/style/bootstrap.min.css">
    <link rel="stylesheet" href="/style/admin-sidebar.css">
    <link rel="stylesheet" href="/style/css/all.min.css">
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico" />
    <style>
 *{
   direction: rtl;
   padding: 0px;
   margin: 0px;
   text-align: right;
}
.dropdown-item{
    text-align: right;
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
.ico-margin{
    margin-right: 7rem;
}
.fas{
    margin-left: 5px;
}
[data-key].fas{
    margin-right: 5px;
}
    </style>
</head>
<body lang="ar">
 
    