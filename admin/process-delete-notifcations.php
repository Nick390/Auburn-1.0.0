<?php
include_once '../includes/source/dp_connect.php';
include_once '../includes/source/session.php';

//if delete button in /admin/view-all-notification.php have been clicked
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    //mysqli code
    $conn->query("DELETE FROM `notifications` WHERE id=$id") or
        //handle the error
        die($mysqli->error());
    //message
    $_SESSION['message'] = "تم حذف الإشعار لدى جميع المستخدمين بنجاح";
    $_SESSION['msg_type'] = "danger";
    //Then redirect the user to
    header("location: /admin/view-all-notification.php");
}

?>
