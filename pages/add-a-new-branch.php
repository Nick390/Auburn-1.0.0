<?php include('../includes/php/pages-header.php'); ?>
<?php include('../includes/php/pages-nav.php'); ?>
<?php
//نص الإتصال بقاعدة البيانات
require_once '../includes/source/dp_connect.php';
//نص إرسال النموذج
if(isset($_POST['signup-btn'])) {

      $username = $_POST['user-name'];
      $email = $_POST['user-email'];
      $password = $_POST['user-pass'];

      $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    try {
      $SQLInsert = "INSERT INTO users (username, password, email, to_date)
                   VALUES (:username, :password, :email, now())";

      $statement = $conn->prepare($SQLInsert);
      $statement->execute(array(':username' => $username, ':password' => $hashed_password, ':email' => $email));

      if($statement->rowCount() == 1) {
        header('location: /index.html');
      }
    }
    catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }

}
<input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
?>
<!--نص إضافة معلومات لقاعدة البيانات-->
INSERT INTO `licenses` (`id`, `sequence`, `branch`, `region`, `date-of-shop-license`,
`date-of-civil-defense`, `permit`) VALUES (NULL, '1', '14', 'خميس مشيط', '2022-05-22', '2020-03-07',
'2020-05-16');
<?php include('../includes/php/pages-footer.php'); ?>