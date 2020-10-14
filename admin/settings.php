<?php include('../includes/php/header.php'); ?>

<?php include('../includes/php/nav.php'); ?>
<?php
$result = $conn->query("SELECT * FROM `settings`") or die($conn->error);
$data = $result->fetch_assoc();
?>
<div class="container p-0 m-0">
    <div class="row p-0 m-0">
        <div class="col p-0 m-0">
            <h3><?php echo $lang['Settings']; ?></h3>
            <p class="text-muted"><?php echo $lang['The last update was made in']; ?> <?php echo "{$data['website_modified_date']}"; ?></p>
            <?php

if(isset($_POST['submit'])){

$update = "UPDATE `settings` SET `website_title` = '$_POST[website_title]' , 
 `website_meta` = '$_POST[website_meta]' ,
 `website_favicon` = '$_POST[website_favicon]' ,
 `website_login_icon` = '$_POST[website_login_icon]',
 `website_language` = '$_POST[website_language]' ,
 `website_user_language` = '$_POST[website_user_language]' ,
 `website_admin_user` = '$_POST[website_admin_user]' ,
 `website_admin_password` = '$_POST[website_admin_password]' ,
 `website_timezone` = '$_POST[website_timezone]' ,
 `website_header` = '$_POST[website_header]', `website_modified_date` = CURRENT_TIMESTAMP";

$update_date = mysqli_query($conn, $update);
 if($update_date){
    $success = $lang['The data has been updated'];
    echo '<div class="alert alert-success" role="alert">'.$success.'</div>';
 }else{
    $error = $lang['Unexpected error'];
    echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
 }
}
?>
        </div>
    </div>
</div>
<br/>
<div class="container">
    <div class="row">
        <div class="col">
            <form method="post" name="settings">
            <div class="form-group row">
                <label for="website_title" class="col-sm-2 col-form-label"><?php echo $lang['Site Name']; ?></label>
                <div class="col-sm-5">
                <input type="text" class="form-control" id="website_title" name="website_title" value="<?php echo "{$data['website_title']}"; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="website_meta" class="col-sm-2 col-form-label"><?php echo $lang['Meta Site']; ?></label>
                <div class="col-sm-5">
                <textarea type="textarea" class="form-control" id="website_meta" name="website_meta" rows="3" cols="20"><?php echo "{$data['website_meta']}"; ?></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="website_favicon" class="col-sm-2 col-form-label"><?php echo $lang['Site icon']; ?></label>
                <div class="col-sm-5">
                <input type="text" class="form-control" id="website_favicon" name="website_favicon" value="<?php echo "{$data['website_favicon']}"; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="website_login_icon" class="col-sm-2 col-form-label"><?php echo $lang['Login icon']; ?></label>
                <div class="col-sm-5">
                <input type="text" class="form-control" id="website_Login_icon" name="website_login_icon" value="<?php echo "{$data['website_login_icon']}"; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="website_language" class="col-sm-2 col-form-label"><?php echo $lang['Site language']; ?></label>
                <div class="col-sm-2">
                <select class="custom-select" id="website_language" name="website_language">
                    <option selected ><?php echo "{$data['website_language']}"; ?></option>
                    <option>English</option>
                    <option>العربية</option>
                </select>
            </div>
            </div>

            <div class="form-group row">
                <label for="website_user_language" class="col-sm-2 col-form-label"><?php echo $lang['Admin page language']; ?></label>
                <div class="col-sm-2">
                <select class="custom-select" id="website_user_language" name="website_user_language">
                    <option selected ><?php echo "{$data['website_user_language']}"; ?></option>
                    <option>English</option>
                    <option>العربية</option>
                </select>
            </div>
            </div>

            <div class="form-group row">
                <label for="website_admin_user" class="col-sm-2 col-form-label"><?php echo $lang['Admin username']; ?></label>
                <div class="col-sm-5">
                <input type="text" class="form-control" id="website_admin_user" name="website_admin_user" value="<?php echo "{$data['website_admin_user']}"; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="website_admin_password" class="col-sm-2 col-form-label"><?php echo $lang['Password for admin']; ?></label>
                <div class="col-sm-5">
                <input type="password" class="form-control" id="website_admin_password" name="website_admin_password" value="<?php echo "{$data['website_admin_password']}"; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="website_timezone" class="col-sm-2 col-form-label"><?php echo $lang['TimeZone']; ?></label>
                <div class="col-sm-2">
                <select class="custom-select" id="website_timezone" name="website_timezone">
                    <option selected ><?php echo "{$data['website_timezone']}"; ?></option>
                    <option>UTC-3</option>
                    <option>UTC-4</option>
                </select>
            </div>
            </div>
            
            <div class="form-group row">
                <label for="website_header" class="col-sm-2 col-form-label"><?php echo $lang['Header for all user pages']; ?></label>
                <div class="col-sm-5">
                <textarea type="textarea" class="form-control" id="website_header" name="website_header" rows="3" cols="20"><?php echo "{$data['website_header']}"; ?></textarea>
                </div>
            </div>
            <button class="btn btn-primary" type="submit" name="submit"><?php echo $lang['Edit']; ?></button>
            </form>
        </div>
    </div>
</div>
<?php include('../includes/php/footer.php'); ?>