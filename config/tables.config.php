<?php
#Connect to the database
require_once '../includes/source/dp_connect.php';
#Create a new Tables if not exist
$CREATEDATABASE = $conn->query ("CREATE DATABASE IF NOT EXISTS `mydb`");

$DownloadHistory = $conn->query ("CREATE TABLE `login`.`downloadhistory` (
    `id` int(6) NOT NULL AUTO_INCREMENT,
    `jobNumber` varchar(11) NOT NULL,
    `dateAndTime` datetime NOT NULL,
    `fileName` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
   ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");
$add_a_new_branch ="CREATE TABLE IF NOT EXISTS `add_a_new_branch` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `JobNumber` text NOT NULL,
  `BranchNumber` text NOT NULL,
  `Neighborhood` text NOT NULL,
  `Region` text NOT NULL,
  `TimeStamp` datetime NOT NULL,
   PRIMARY KEY (`ID`)
)  ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

$notificationsystem ="CREATE TABLE `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `type` text NOT NULL,
  `message` text NOT NULL,
  `status` text NOT NULL,
  `level` text NOT NULL COMMENT 'رتبة المستخدم',
  `date` datetime NOT NULL,
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
    `user_date_created` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s date and time created',
    UNIQUE KEY `user_name` (`user_name`),
    UNIQUE KEY `user_email` (`user_email`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';";
  
$ValidityOfLicenses = "";
$BranchFilesAndUploadAndUpdate = "";

 if (isset($_POST['submit'])) {
        if ($CREATEDATABASE === TRUE)
		{echo "تم إنشاء قاعدة البيانات بنجاح";} 
else{echo "خطأ، لم يتم انشاء كافة الجداول في قاعدة البيانات: " . $conn->error;}
 }


?>
<form>
<input type="submit" name="submit"/>هل تريد تثبيت كافة قواعد البيانات
</form>

<form method="post">
    <input type="submit" name="test" id="test" value="RUN" /><br/>
</form>

<?php

function testfun()
{
   echo "Your test function on button click is working";
}
if(array_key_exists('test',$_POST)){
   testfun();
}

/*
* You can reset the counter with:
* ALTER TABLE `tablename` AUTO_INCREMENT = 1
* in sql
*/
?>
