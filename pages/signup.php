<?php

require_once '../includes/source/dp_connect.php';

if(isset($_POST['signup-btn'])) {

      $username = $_POST['user-name'];
      $email = $_POST['user-email'];
      $password = $_POST['user-pass'];
      //new code start
      $email_query = "SELECT * FROM users WHERE email='$email' ";
      $email_query_run = mysqul_query($conn, $email_query);
      if(mysqli_num_rows($email_query_run) > 0){
        $_SESSION['status'] = "البريد مسجل لدى مستخدم سابقاً الرجاء تسجيل الدخول";
        header('location: /index.html');
      }else{
      //new code end

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
}

?>