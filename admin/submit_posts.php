<?php include('../includes/php/header.php'); ?>
<?php include('../includes/php/nav.php'); ?>
<div class="col">
<br>
<div class="container m-0 p-0">
  <div class="row m-0 p-0">
    <div class="col-sm m-0 p-0">
<?php $mysqli = $conn; ?>
	<?php 

if (isset($_SESSION['message'])):?>
<div class="alert alert-<?=$_SESSION['msg_type']?> alert-dismissible fade show" role="alert">
<?php
echo $_SESSION['message'];
unset($_SESSION['message']);
?>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>

<?php endif ?>
    <form action="/admin/process_send_posts.php" method="post">
        <div class="form-row col-md-12">
            <div class="form-group col-md-12 mb-2">
                <label for="title"><?php echo $lang['Posts title'] ?></label><br>
                <input type="text" name="title" id="title">
            </div>
            <label for="basic-url" class="form-label"><?php echo $lang['Posts url'] ?></label>
            <div class="input-group col-md-12 mb-2">
                <input type="text" class="form-control" name="url" id="basic-url" aria-describedby="basic-addon3">
                <span class="input-group-text" id="basic-addon3"><?php echo "/$DB_HOST:8012/posts"; ?></span>
            </div>
            <div class="input-group col-md-12 mb-2">
                <label for="content"><?php echo $lang['Posts content'] ?></label><br>
                <textarea name="content" id="content" cols="auto" rows="auto"></textarea>
            </div>
            <div class="form-group col-md-12 mb-2">
                <label for="posts-thumbnail"><?php echo $lang['Posts thumbnail'] ?></label>
                <input type="file" class="text-center file-upload" name="posts-thumbnail" id="posts-thumbnail">
            </div>
            <div class="form-group col-md-12 mb-2">
                <label for="tags"><?php echo $lang['Posts tags'] ?></label><br>
                <p class="text-mute mb-0"><?php echo $lang['Posts info'] ?></p>
                <input type="text" name="tags" id="tags">
            </div>
            
            <div class="form-group col-md-12 mb-2">
                <hr>
                <button name="submit" class="btn btn-outline-success" type="submit"><?php echo $lang['Posts button submit'] ?></button>

                <button href="all_posts.php" name="cancel" class="btn btn-outline-info" id="float-left"><?php echo $lang['Posts button cancel'] ?></button>
            </div>
        </div>
    </form>
    </div>
  </div>
</div>
<script src="/ckeditor/ckeditor.js"></script>
<script>
	CKEDITOR.replace('content');
</script>
<?php include('../includes/php/footer.php'); ?>