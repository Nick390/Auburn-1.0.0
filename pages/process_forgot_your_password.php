<?php
if (isset($_POST["reset-request-submit"])) {

    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "create-new-password.php?selector=". $selector ."&validator=" . bin2hex($token);

    $expires = date("U") + 1800;
    //للإتصال بقاعدة البيانات
    require_once('../includes/source/dp_connect.php');
    $userEmail = $_POST["user-email"];
    $sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error!";
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt);
    }
    // لإضافة بيانات طلب إستعادة كلمة المرور إلى قاعدة البيانات
    $sql ="INSERT INTO pwdReset (`pwdResetEmail`, `pwdResetSelector`, `pwdResetToken`, `pwdResetExpires`
    ) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "There was an error!";
     exit();
    } else {
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector,$expires);
        mysqli_stmt_execute($stmt);
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    $to = $userEmail;
    
    $subject ='إعادة تعيين كلمة المرور';
    $message ='<p>إستلمنا طلب إعادة كلمة المرور منك الرجاء النقر على الرابط التالي وإذا كنت لم تقم بذلك الرجاء تجاهل الرسالة</p></br>';
    $message .= '<p>إليك رابط إعادة تعيين كلمة المرور:</p></br>';
    $message .= '<p><a href="' . $url . '">' . $url .'</a></p>';

    $headers = "From: mmtuts <alwaleed.alwabel@herfy.com>\r\n";
    $headers .= "Reply-To: alwaleed.alwabel@herfy.com\r\n";
    $headers .= "Content-type: text/html\r\n";

    mail($to, $subject, $message, $headers);
    header("Location: ../pages/form_forgot_your_password.php?reset=success");
} else {
    header("Location: /");
}