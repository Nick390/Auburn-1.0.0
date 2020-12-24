<?php
include_once '../includes/source/dp_connect.php';
include_once '../includes/source/session.php';

//if submit button in /admin/send_posts.php have been clicked
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $tags = $_POST['tags'];

    //mysqli code
    $conn->query("INSERT INTO `posts` (`id`, `title`, `content`, `tags`,`date`) VALUES (NULL, '$title', '$content', '$tags', CURRENT_TIMESTAMP)") or
        //handle the error
        die($mysqli->error());
    //message
    $_SESSION['message'] = "تم نشر المقال بنجاح";
    $_SESSION['msg_type'] = "success";
    //Then redirect the user to
    header('Location: /admin/submit_posts.php');
} else {
    $_SESSION['message'] = "تعذر نشر المقال";
    $_SESSION['msg_type'] = "warning";
    //Then redirect the user to
    header('Location: /admin/submit_posts.php');
}
?>