<?php
if (isset($_POST["reset-password-submit"])) {

    $selector = $_POST["selector"];
    $validator = $_POST["validator"];
    $userpass = $_POST["validator"];
    $userpassrepeat = $_POST["user-pass-repeat"];

    if (empty($userpass) || empty($userpassrepeat)){
        header("Location: /");
        exit();
    } else if ($userpass !=$userpassrepeat) {
        header("Location: /");
        exit();
    }

    $currentDate = date("U");
    // يوجد خطأ مجهول في الإتصال بقاعدة البيانات
    require '../includes/source/dp_connect.php';

    $sql = "SELECT * FROM pwdReset WHERE pwdResetSelector=? AND pwdResetExpires >= ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "حصل خطأ عند محاولة التأكد من بيانات الرابط المستخدم مع بيانات قاعدة البيانات";
     exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $selector, $selector);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
            echo "يتوجب عليك إعادة تعيين كلمة المرور مرة أخرى";
        exit(); 
        } else {
          $tokenBin = hex2bin($validator);
          $tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);
          if ($tokenCheck === false) {
            echo "يتوجب عليك إعادة تعيين كلمة المرور مرة أخرىٍ";
            exit(); 
          } elseif ($tokenCheck === true){
              $tokenEmail = $row['pwdResetEmail'];
              $sql = "SELECT * FROM users WHERE user_email=?;";
              $stmt = mysqli_stmt_init($conn);
              if(!mysqli_stmt_prepare($stmt, $sql)){
                  echo "There was an error!";
               exit();
              } else {
                  mysqli_stmt_bind_param($stmt, "s" , $tokenEmail);
                  mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);
                  if ($row = mysqli_fetch_assoc($result)) {
                    echo "There was an eroor ! tow";
                    exit(); 
                    } else {
                        $sql = "UPDATE users SET user_password_hash=? WHERE user_email=?";
                        $stmt = mysqli_stmt_init($conn);
                        if(!mysqli_stmt_prepare($stmt, $sql)){
                            echo "There was an error!";
                        exit();
                        } else {
                            $newPwdHash = password_hash($password, PASSWORD_DEFAULT);
                            mysqli_stmt_bind_param($stmt, "ss" , $newPwdHash, $tokenEmail);
                            mysqli_stmt_execute($stmt);

                            $sql = "UPDATE users SET user_password_hash=? WHERE user_email=?";
                            $stmt = mysqli_stmt_init($conn);
                            if(!mysqli_stmt_prepare($stmt, $sql)){
                                echo "حدث خطأ عند محاولة القيام بعملية تشفير كلمة المرور وإضافتها إلى قاعدة البيانات";
                            exit();
                            } else {
                                $newPwdHash = password_hash($password, PASSWORD_DEFAULT);
                                mysqli_stmt_bind_param($stmt, "ss" , $newPwdHash, $tokenEmail);
                                mysqli_stmt_execute($stmt);

                                $sql ="DELETE FROM pwdreset WHERE pwdResetEmail=?";
                                $stmt = mysqli_stmt_init($conn);
                                if(!mysqli_stmt_prepare($stmt, $sql)){
                                echo "حصل خطأ عند محاولة القيام بعملية حذف بيانات محاولة إستعادة كلمة المرور";
                                exit();
                                mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                                mysqli_stmt_execute($stmt);
                                header("Location: /?newpwd=passeordupdated");
                                }
                            }
                        }
                    }
                }
            }
        }
    }
} else {
    header('Location: /');
}
?>