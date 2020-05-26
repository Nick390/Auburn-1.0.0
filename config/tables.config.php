<?php
#Connect to the database
require_once '../includes/source/dp_connect.php';
#Create a new Tables if not exist
$DownloadHistory = "CREATE TABLE `downloadhistory` (
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

$Users = "CREATE TABLE `users` (
    `id` int(6) NOT NULL AUTO_INCREMENT,
    `username` varchar(11) NOT NULL,
    `password` varchar(50) NOT NULL,
    `email` varchar(255) NOT NULL,
    `to_date` datetime NOT NULL,
    PRIMARY KEY (`id`)
   ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4";
$ValidityOfLicenses = "";
$BranchFilesAndUploadAndUpdate = "";

if (mysqli_query($conn, $DownloadHistory, $LoginAndLogoutHistory, $RecordOldVersionsOfFiles, $UserDataUpdateLog, $Groups, $Versions, $CommercialRecords, $Users, $ValidityOfLicenses, $BranchFilesAndUploadAndUpdate)) {
    echo "All Tables created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>