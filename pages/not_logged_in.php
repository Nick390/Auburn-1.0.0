<?php
require_once 'includes/source/dp_connect.php';

// Initialize default values
$data = [
    'website_title' => 'Auburn CMS',
    'website_favicon' => 'admin/files/favicon.ico',
    'website_login_icon' => 'admin/files/logo.svg'
];

// Try to get settings from database if connection exists
if (isset($conn) && $conn) {
    $result = $conn->query("SELECT * FROM `settings`");
    if ($result && $result->num_rows > 0) {
        $db_data = $result->fetch_assoc();
        if ($db_data) {
            // Update data with database values
            $data['website_title'] = $db_data['website_title'];
            
            // Use database paths as-is since we're in the root directory
            if (isset($db_data['website_favicon'])) {
                $data['website_favicon'] = $db_data['website_favicon'];
            }
            
            if (isset($db_data['website_login_icon'])) {
                $data['website_login_icon'] = $db_data['website_login_icon'];
            }
        }
    }
}
?>
<html lang="ar">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo htmlspecialchars($data['website_title']); ?> - تسجيل الدخول</title>
  <link rel="stylesheet" href="style/bootstrap.min.css">
  <link rel="shortcut icon" type="image/png" href="<?php echo htmlspecialchars($data['website_favicon']); ?>" />
  <link rel="stylesheet" href="style/login.css">
</head>
<body class="text-center">
    <!-- login form box -->
  <form method="post" action="index.php" name="loginform" class="form-signin" autocomplete="off">

      <img class="mb-4" src="<?php echo htmlspecialchars($data['website_login_icon']); ?>" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">الرجاء تسجيل الدخول</h1>
      <?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>

      <label for="login_input_username" class="sr-only">إسم المستخدم</label>

      <input id="login_input_username" class="login_input form-control" type="text" name="user_name" required placeholder="<?php echo $lang['Username Placeholder']; ?>" />

      <label for="login_input_password" class="sr-only">>كلمة المرور</label>
      
      <input id="login_input_password" class="login_input form-control" type="password" name="user_password" autocomplete="off" placeholder="<?php echo $lang['Password Placeholder']; ?>" required />

      <div class="checkbox mb-3">
        <div class="row">
          <div class="col">
            <label>
              <input type="checkbox" value="remember-me">
                 تذكرني
             </label>
          </div>
          <div class="col">
            <label><a href="pages/forgot-your-password.php">نسيت كلمة المرور؟</a></label>
          </div>
        </div>
      </div>
      <label>ليس لديك حساب؟ <a href="pages/register.php">انشىء حساب جديد</a></label>

      <button type="submit" name="login" value="Log in" class="btn btn-lg btn-primary btn-block">تسجيل الدخول</button>
      <p class="mt-5 mb-3 text-muted">© 2019-2020</p>
  </form>
</body>
</html>

