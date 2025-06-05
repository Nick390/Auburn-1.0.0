<?php
require_once '../includes/source/dp_connect.php';

// Initialize default values
$data = [
    'website_title' => 'Auburn CMS',
    'website_favicon' => '../admin/files/favicon.ico',
    'website_login_icon' => '../admin/files/logo.svg'
];

// Try to get settings from database if connection exists
if (isset($conn) && $conn) {
    $result = $conn->query("SELECT * FROM `settings`");
    if ($result && $result->num_rows > 0) {
        $db_data = $result->fetch_assoc();
        if ($db_data) {
            // Update data with database values, adjusting paths for pages directory
            $data['website_title'] = $db_data['website_title'];
            
            // Handle favicon path - add ../ if it doesn't start with / or ../
            if (isset($db_data['website_favicon'])) {
                $favicon_path = $db_data['website_favicon'];
                if (substr($favicon_path, 0, 1) !== '/' && substr($favicon_path, 0, 3) !== '../') {
                    $favicon_path = '../' . $favicon_path;
                }
                $data['website_favicon'] = $favicon_path;
            }
            
            // Handle login icon path - add ../ if it doesn't start with / or ../
            if (isset($db_data['website_login_icon'])) {
                $login_icon_path = $db_data['website_login_icon'];
                if (substr($login_icon_path, 0, 1) !== '/' && substr($login_icon_path, 0, 3) !== '../') {
                    $login_icon_path = '../' . $login_icon_path;
                }
                $data['website_login_icon'] = $login_icon_path;
            }
        }
    }
}
?>
<html lang="ar"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo htmlspecialchars($data['website_title']); ?> - نسيت كلمة المرور</title>
    <link rel="stylesheet" href="/style/bootstrap.min.css">
    <link rel="shortcut icon" type="image/png" href="<?php echo htmlspecialchars($data['website_favicon']); ?>" />
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
        <img class="mb-4" src="<?php echo htmlspecialchars($data['website_login_icon']); ?>" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">هل نسيت كلمة المرور ؟</h1>
        <p> من فضلك ادخل البريد الإلكتروني الخاص بحسابك و سوف نرسل لك رابط لتغيير كلمة المرور</p>
        <input type="email" name="user-email" id="inputEmail" class="form-control" placeholder="<?php echo $lang['Email Placeholder']; ?>" required="" autofocus="">
        <br>
        <div class="checkbox mb-2">
        <label>إرجع إلي <a href="/">صفحة تسجيل الدخول</a></label>
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