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

$uploadmultiplefiles ="CREATE TABLE `uploadmultiplefiles` (
   `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing file_id of each file, unique index',
   `filename` varchar(255) NOT NULL COMMENT 'file name without the extensions',
   `imgdir` varchar(255) NOT NULL COMMENT 'location where the file is stored',
   `UploadTimestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'the time where the file was uploaded to the system',
   PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=utf8mb4";
$LoginAndLogoutHistory = "";

$RecordOldVersionsOfFiles = "";

$UserDataUpdateLog = "";

$Groups = "";

$Versions = "";


$Settings = "CREATE TABLE `settings` (
   `website_id` int(11) NOT NULL AUTO_INCREMENT,
   `website_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
   `website_meta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
   `website_favicon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
   `website_login_icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
   `website_language` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
   `website_user_language` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
   `website_admin_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
   `website_admin_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
   `website_timezone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
   `website_header` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
   `website_modified_date` timestamp NOT NULL DEFAULT current_timestamp(),
   PRIMARY KEY (`website_id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='settings data'";

$CommercialRecords = "";
$Users = "CREATE TABLE `users` (
 `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index',
 `user_first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user_first_name,not unique',
 `user_last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user_last_name,not unique',
 `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
 `user_password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s password in salted and hashed format',
 `user_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique',
 `user_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user_address,not unique',
 `user_address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user_address2,not unique',
 `user_city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user_city,not unique',
 `user_state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user_state,not unique',
 `user_zip_code` varchar(255) COLLATE utf8_unicode_ci  DEFAULT NULL COMMENT 'user_zip_code,not unique',
 `user_birthday` date NOT NULL COMMENT 'user_birthday,not unique',
 `user_role` varchar(60) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user_role,not unique',
 `user_date_created` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s date and time created',
 PRIMARY KEY (`user_id`),
 UNIQUE KEY `user_name` (`user_name`),
 UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data'";

	
$posts ="CREATE TABLE `posts` (
   `id` int(6) NOT NULL AUTO_INCREMENT,
   `title` varchar(255) NOT NULL,
   `content` varchar(500) NOT NULL,
   `tags` varchar(255) NOT NULL,
   `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
   PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4";

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
/*
* You can how the table was create with:
* SHOW CREATE TABLE `tablename`;
* in sql
*/
?>
