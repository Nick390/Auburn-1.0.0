<?php
// include the configs / constants for the database connection
require_once '../includes/source/db.php';

// load the registration class
require_once 'Registration.php';

// create the registration object. when this object is created, it will do all registration stuff automatically
$registration = new Registration();

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

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo htmlspecialchars($data['website_title']); ?> - تسجيل جديد</title>
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="shortcut icon" type="image/png" href="<?php echo htmlspecialchars($data['website_favicon']); ?>" />
    <link rel="stylesheet" href="../style/signup.css">
  </head>
  <body class="text-center">
      <!-- register form -->
    <form method="post" action="register.php" name="registerform" class="form-signin">
        <img class="mb-4" src="<?php echo htmlspecialchars($data['website_login_icon']); ?>" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">تسجيل حساب جديد</h1>
       
        <?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
        echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';

        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo '<div class="alert alert-success" role="alert">'.$message.'</div>';
        }
    }
}
?>

    <!-- the user name input field uses a HTML5 pattern check -->
    <label for="login_input_username" class="sr-only">إسم المستخدم</label>
    <input id="login_input_username" class="login_input form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" placeholder="<?php echo $lang['Username Placeholder']; ?>" autofocus="off" title="<?php echo $lang['Username Title']; ?>" required />

    <!-- the email input field uses a HTML5 email type check -->
    <label for="login_input_email" class="sr-only">البريد الالكتروني</label>
    <input id="login_input_email" class="login_input form-control" type="email" name="user_email" placeholder="<?php echo $lang['Email Placeholder']; ?>" autofocus="" pattern=".{6,}" title="<?php echo $lang['Email Title']; ?>" required />

    <label for="login_input_password_new" class="sr-only">كلمة المرور</label>
    <input id="login_input_password_new" class="login_input form-control" type="password" name="user_password_new" placeholder="<?php echo $lang['Password Placeholder']; ?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="<?php echo $lang['Password Title']; ?>" required autocomplete="off" />

    <label for="login_input_password_repeat" class="sr-only">تأكيد كلمة المرور</label>
    <input id="login_input_password_repeat" class="login_input passwordRepeat form-control" type="password" name="user_password_repeat" placeholder="<?php echo $lang['Confirm Password Placeholder']; ?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="<?php echo $lang['Password Title']; ?>" required autocomplete="off" />
        <!-- backlink -->
        <label>لديك حساب بالفعل؟
      <a href="../index.php">سجل دخولك الان</a></br>
    </label>
        <button type="submit" name="register" value="Register" class="btn btn-lg btn-primary btn-block">تسجيل</button>
        <p class="mt-5 mb-3 text-muted">© 2019-2020</p>
    </form>
</body>
</html>

