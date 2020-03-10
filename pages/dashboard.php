<?php

include_once '../includes/source/session.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم</title>
</head>
<body>
    <?php if(!isset($_SESSION['username'])): header("location: logout.php");?>

    <?php else: ?>
    
    <?php endif ?>
    
    <?php echo "<h1> welcome <h1 style='color: red;'>".$_SESSION['username']."</h1> To Dashboard </h1>" ?>

    <h2><a href="logout.php">تسجيل الخروج</a></h2>
</body>
</html>