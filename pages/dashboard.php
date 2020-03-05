<?php

include_once '/includes/source/session.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم</title>
</head>
<body>
    <?php if(!isset($_SESSION['username'])): header("location: ./pages/logout.php");?>

    <?php else: ?>
    
    <?php endif ?>
    
    <?php echo "<h1> welcome".$_SESSION['username']." To Dashboard </h1>" ?>

    <h2><a href="logout.php">تسجيل الخروج</a></h2>
</body>
</html>