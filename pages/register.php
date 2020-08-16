<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>تسجيل جديد - بوابة العلاقات الحكومية</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="/images/favicon.ico" />
    <link rel="stylesheet" href="/style/signup.css">
  </head>
  <body class="text-center">
      <!-- register form -->
    <form method="post" action="register.php" name="registerform" class="form-signin">
        <img class="mb-4" src="/images/logo.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">تسجيل حساب جديد</h1>
        <?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
        echo $error;

        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>
    <!-- the user name input field uses a HTML5 pattern check -->
    <label for="login_input_username" class="sr-only">إسم المستخدم</label>
    <input id="login_input_username" class="login_input form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" placeholder="إسم المستخدم" autofocus="off" title="يجب أن يكون إسم المستخدم باللغة الإنجليزيه ويمكن ان يحتوي على رقم" required />

    <!-- the email input field uses a HTML5 email type check -->
    <label for="login_input_email" class="sr-only">البريد الالكتروني</label>
    <input id="login_input_email" class="login_input form-control" type="email" name="user_email" placeholder="البريد الالكتروني" autofocus="" pattern=".{6,}" title="أدخل بريد إلكتروني صحيح" required />

    <label for="login_input_password_new" class="sr-only">كلمة المرور</label>
    <input id="login_input_password_new" class="login_input form-control" type="password" name="user_password_new" placeholder="كلمة المرور" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="يجب أن يحتوي على رقم واحد على الأقل وحرف واحد كبير وحرف صغير ، وعلى الأقل 8 أحرف أو أكثر" required autocomplete="off" />

    <label for="login_input_password_repeat" class="sr-only">تأكيد كلمة المرور</label>
    <input id="login_input_password_repeat" class="login_input form-control passwordRepeat" type="password" name="user_password_repeat" placeholder="تأكيد كلمة المرور" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="يجب أن يحتوي على رقم واحد على الأقل وحرف واحد كبير وحرف صغير ، وعلى الأقل 8 أحرف أو أكثر" required autocomplete="off" />
        <!-- backlink -->
        <label>لديك حساب بالفعل؟
      <a href="/">سجل دخولك الان</a></br>
    </label>
        <button type="submit" name="register" value="Register" class="btn btn-lg btn-primary btn-block">تسجيل</button>
        <p class="mt-5 mb-3 text-muted">© 2019-2020</p>
    </form>
</body>
</html>

