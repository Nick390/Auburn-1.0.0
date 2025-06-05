<?php include('../includes/php/header.php'); ?>

<?php include('../includes/php/nav.php'); 


// include the configs / constants for the database connection
require_once("../includes/source/db.php");

// load the registration class
require_once("../admin/process_add_new_user.php");

// create the registration object. when this object is created, it will do all registration stuff automatically
// so this single line handles the entire registration process.
$registration = new Registration();
?>
<div class="container m-0 p-0">
    <div class="row m-0 p-0">
        <div class="col-sm m-0 p-0">
            <h3 class="inline"><?php echo $lang['Add New User Title'] ?></h3>
            <p class="block mt-2"><?php echo $lang['Add New User Title Description'] ?></p>
        </div>
    </div>
</div>
<div class="container p-0 m-0 mt-2">
	<div class="row justify-content-right">
        <div class="col-12 col-md-10 col-lg-8">
                            
<form method="post" action="/admin/add_new_user.php" name="registerform" class="form-signin">
       
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
    <div class="form-row">
    <div class="form-group col-md-12">
    <label><?php echo $lang['Required Fields Notice']; ?></label>
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
    <label for="user_first_name"><?php echo $lang['First Name']; ?></label>
    <input id="user_first_name" class="form-control" type="text" name="user_first_name" autofocus="off" />
    </div>
    <div class="form-group col-md-6">
    <!-- the email input field uses a HTML5 email type check -->
    <label for="user_last_name"><?php echo $lang['Last Name']; ?></label>
    <input id="user_last_name" class="form-control" type="text" name="user_last_name" autofocus="off" />
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
    <label for="login_input_username"><?php echo $lang['Username Placeholder']; ?> <p class="text-danger d-inline">*</p></label>
    <input id="login_input_username" class="login_input form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" autofocus="off" title="<?php echo $lang['Username Title']; ?>" required />
    </div>
    <div class="form-group col-md-6">
    <!-- the email input field uses a HTML5 email type check -->
    <label for="login_input_email"><?php echo $lang['Email Placeholder']; ?> <p class="text-danger d-inline">*</p></label>
    <input id="login_input_email" class="login_input form-control" type="email" name="user_email" autofocus="" pattern=".{6,}" title="<?php echo $lang['Email Title']; ?>" autofocus="off" required />
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
    <label for="login_input_password_new"><?php echo $lang['Password Placeholder']; ?> <p class="text-danger d-inline">*</p></label>
    <input id="login_input_password_new" class="login_input form-control" type="password" name="user_password_new"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="<?php echo $lang['Password Title']; ?>" required autocomplete="off" />
    </div>

    <div class="form-group col-md-6">
    <label for="login_input_password_repeat"><?php echo $lang['Confirm Password Placeholder']; ?> <p class="text-danger d-inline">*</p></label>
    <input id="login_input_password_repeat" class="login_input form-control passwordRepeat" type="password" name="user_password_repeat" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="<?php echo $lang['Password Title']; ?>" required autocomplete="off" />
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
    <label for="user_Address"><?php echo $lang['Address']; ?></label>
    <input type="text" class="form-control" name="user_address" id="user_address">
  </div>
  <div class="form-group col-md-6">
    <label for="user_address2"><?php echo $lang['Address 2']; ?></label>
    <input type="text" class="form-control" name="user_address2" id="user_address2">
  </div>
  </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity"><?php echo $lang['City']; ?></label>
      <input type="text" name="user_city" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState"><?php echo $lang['State']; ?></label>
      <input type="text" name="user_state" class="form-control" id="inputState">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip"><?php echo $lang['Postal Code']; ?></label>
      <input type="text" name="user_zip_code" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-3">
    <label for="user_birthday"><?php echo $lang['Birth Date']; ?></label>
    <input type="date" name="user_birthday" class="form-control" id="user_birthday">
    </div>

    <div class="form-group col-md-3">
      <label for="user_role"><?php echo $lang['Role']; ?></label>
      <select id="user_role" name="user_role" class="form-control">
        <option selected>user</option>
        <option>admin</option>
        <option>super admin</option>
      </select>
    </div>
  </div>
        <button type="submit" name="register" value="Register" class="btn btn-primary"><?php echo $lang['Add New User Button Text']; ?></button>
    </form>
        </div>
    </div>
</div>
<?php include('../includes/php/footer.php'); ?>