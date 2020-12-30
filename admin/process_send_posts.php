<?php
include_once '../includes/source/dp_connect.php';
include_once '../includes/source/session.php';

//if submit button in /admin/send_posts.php have been clicked
if (isset($_POST['submit'])) {
    $posts_title = $_POST['posts_title'];
    $posts_url = $_POST['posts_url'];
    $posts_content = $_POST['posts_content'];
    $posts_thumbnail = $_POST['posts_thumbnail'];
    $posts_author = $_POST['posts_author'];
    $posts_tags = $_POST['posts_tags'];
//if posts titl empty
    if (empty($_POST['posts_title'])) {
        $_SESSION['message'] = "لا يمكن ان يكون الموضوع فارغ";
        $_SESSION['msg_type'] = "warning";
        header('Location: /admin/submit_posts.php');
//if posts url empty    
    }elseif (empty($_POST['posts_url'])) {
        $_SESSION['message'] = "لا يمكن ان يكون الرابط فارغ";
        $_SESSION['msg_type'] = "warning";
        header('Location: /admin/submit_posts.php');
//if posts author empty
    }elseif (empty($_POST['posts_author'])) {
        $_SESSION['message'] = "يجب تحديد المؤلف";
        $_SESSION['msg_type'] = "warning";
        header('Location: /admin/submit_posts.php');

    }else{

    //mysqli code
    $conn->query("INSERT INTO `posts` (`id`, `posts_title`, `posts_url`, `posts_content`, `posts_thumbnail`, `posts_author`, `posts_tags`,`date`) VALUES (NULL, '$posts_title', '$posts_url', '$posts_content', '$posts_thumbnail', '$posts_author', '$posts_tags', CURRENT_TIMESTAMP)") or
        //handle the error
        die($mysqli->error());
    //message
    $_SESSION['message'] = "تم نشر المقال بنجاح";
    $_SESSION['msg_type'] = "success";
    //Then redirect the user to
    header('Location: /admin/submit_posts.php');
    }
} else {
    $_SESSION['message'] = "تعذر نشر المقال";
    $_SESSION['msg_type'] = "warning";
    //Then redirect the user to
    header('Location: /admin/submit_posts.php');
}
?>