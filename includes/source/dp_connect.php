<?php
// ** MySQL settings - You can get this info from your web host ** //
#MySQL database username
$DB_USER = 'root';
#MySQL database password
$DB_PASSWORD = '';
#MySQL hostname AND The name of the database for PortalGR1.0.5
$DB_HOST_DB_NAME = 'mysql:host=localhost; dbname=mydb';

try {
#Create connection
  $conn = new PDO($DB_HOST_DB_NAME, $DB_USER, $DB_PASSWORD);
#Check connection
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

  echo "Fail to connect to the database ".$e->getMessage();

}

?>