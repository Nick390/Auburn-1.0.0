<?php
#Connect to the database
require_once '../includes/source/dp_connect.php';
#Create a new Tables if not exist
$CREATEDATABASE = "CREATE DATABASE IF NOT EXISTS `mydb`;";
$DownloadHistory = "CREATE TABLE `login`.`downloadhistory` (
    `id` int(6) NOT NULL AUTO_INCREMENT,
    `jobNumber` varchar(11) NOT NULL,
    `dateAndTime` datetime NOT NULL,
    `fileName` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
   ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

$LoginAndLogoutHistory = "";

$RecordOldVersionsOfFiles = "";

$UserDataUpdateLog = "";

$Groups = "";

$Versions = "";

$CommercialRecords = "";
$Users = "CREATE TABLE IF NOT EXISTS `mydb`.`users` (
    `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index',
    `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
    `user_password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s password in salted and hashed format',
    `user_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique',
    PRIMARY KEY (`user_id`),
    UNIQUE KEY `user_name` (`user_name`),
    UNIQUE KEY `user_email` (`user_email`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';";
  
$ValidityOfLicenses = "";
$BranchFilesAndUploadAndUpdate = "";

if (mysqli_query($conn, $CREATEDATABASE, $DownloadHistory, $Users)) {
    echo "All Tables created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>