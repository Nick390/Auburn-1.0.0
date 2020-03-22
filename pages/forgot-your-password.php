<html lang="en"><head>
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
.form-signin input[type="email"] {
  margin-bottom: -1px;
}
    </style>
  </head>
  <body class="text-center">
    <form class="form-signin" action="../includes/php/forgot-your-password.inc.php" method="post">
        <img class="mb-4" src="/images/logo.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">هل نسيت كلمة المرور ؟</h1>
        <p> من فضلك ادخل البريد الإلكتروني الخاص بحسابك و سوف نرسل لك رابط لتغيير كلمة المرور</p>
        <input type="email" name="user-email" id="inputEmail" class="form-control" placeholder="البريد الالكتروني" required="" autofocus="">
        <br>
        <div class="checkbox mb-2">
        <label>إرجع إلي <a href="/index.html">صفحة تسجيل الدخول</a></label>
</div>
        <button type="submit" name="reset-request-submit" class="btn btn-lg btn-primary btn-block">اطلب كلمة مرور جديدة</button>
        <p class="mt-5 mb-3 text-muted">© 2019-2020</p>
    </form>
    <?php 
    //عندما ينجح إرسال النموذج في الأعلى إلى صفحة 
    // forgot-your-password.inc.php 
    // يظهر النموذج مربع نجحت عملية إرسال الملف
    if(isset($_GET['reset'])){
      if ($_GET["reset"] == "success") {
        echo '<div class="alert alert-success" role="alert">راجع البريد الإكتروني !</div>';
      }
    }
    ?>
</body>
</html>