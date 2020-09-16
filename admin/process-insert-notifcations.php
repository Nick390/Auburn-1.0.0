<?php
include_once '../includes/source/dp_connect.php';
include_once '../includes/source/session.php';

//if delete button in /admin/submit-a-new-notification.php have been clicked
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $message = $_POST['message'];
    $option = $_POST['option'];
    $level = $_POST['level'];
    //mysqli code
    $conn->query("INSERT INTO `notifications` (`id`, `name`, `type`, `message`, `status`, `level`, `date`) VALUES (NULL, '$name', '$option', '$message', 'unread','$level', CURRENT_TIMESTAMP)") or
        //handle the error
        die($mysqli->error());
    //message
    $_SESSION['message'] = "تم إرسال الإشعار بنجاح";
    $_SESSION['msg_type'] = "success";
    //Then redirect the user to
    header('Location: /admin/submit-a-new-notification.php');
} else {
    $_SESSION['message'] = "تعذر إرسال الرسالة";
    $_SESSION['msg_type'] = "warning";
    //Then redirect the user to
    header('Location: /admin/submit-a-new-notification.php');
}
?>
