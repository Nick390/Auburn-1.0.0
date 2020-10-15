<?php
require_once '../includes/source/dp_connect.php';

$result = $conn->query("SELECT * FROM `settings`") or die($conn->error);
$data = $result->fetch_assoc();
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>نسيت كلمة المرور - بوابة العلاقات الحكومية</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="/images/favicon.ico" />
    <style>
  html,
body {
  height: 100%;
  direction: rtl;
}

body {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="password"] {
  margin-bottom: -1px;
}
.password{
margin-bottom: -1px;
border-bottom-right-radius: 0;
border-bottom-left-radius: 0;
}
.confirm-password{
border-top-right-radius: 0;
border-top-left-radius: 0;
}
.signupsuccess{

}
    </style>
  </head>
  <body class="text-center">
      <?php 
            $selector = $_GET["selector"];
            $validator = $_GET["validator"];

            if(empty($selector) || empty($validator)){
                echo '"<div class="alert alert-danger" role="alert">
                لم نتمكن من التأكد من طلبك
              </div>"';
            } else {
                if (ctype_xdigit($selector) !== false && (ctype_xdigit($validator) !== false)){}
            }?>
                 <form class="form-signin" action="../pages/process_create_new_password.php" method="post">
                 <img class="mb-4" src="<?php echo "{$data['website_login_icon']}"; ?>" alt="" width="72" height="72">
                 <input type="hidden" name="selector" value="<?php echo $selector ;?>">
                 <input type="hidden" name="validator" value="<?php echo $validator ;?>">
                 <h1 class="h3 mb-3 font-weight-normal">إعادة تعيين كلمة المرور</h1>
                 <p>من فضلك ادخل كلمة المرور الجديدة</p>
                 <label for="inputPassword" class="sr-only">كلمة المرور الجديدة</label>
                 <input type="password" name="user-pass" id="inputPassword" class="form-control password" placeholder="كلمة المرور" required>
                 <input type="password" name="user-pass-repeat" id="inputPassword" class="form-control confirm-password" placeholder="تأكيد كلمة المرور" required>
                 <br>
                 <button type="submit" name="reset-password-submit" class="btn btn-lg btn-primary btn-block">إعادة تعيين كلمة المرور</button>
                 <p class="mt-5 mb-3 text-muted">© 2019-2020</p>
                 </form>
</body>
</html>