<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
Hey, <?php echo $_SESSION['user_name']; ?>. You are logged in.
Try to close this browser tab and open it again. Still logged in! ;)

<a href="pages/dashboard.php">لوحة التحكم</a>
</body>
</html>

