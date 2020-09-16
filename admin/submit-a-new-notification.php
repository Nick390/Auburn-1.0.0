<?php include('../includes/php/header.php'); ?>
<?php include('../includes/php/nav.php'); ?>
<?php include("../includes/source/function.php"); ?>
<style>
#cke_message{
	display: block;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
</style>
<div class="col">
<br>
<div class="container m-0 p-0">
  <div class="row m-0 p-0">
    <div class="col-sm m-0 p-0">
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
		  <h3>مرحباً بك في صفحة إرسال الإشعارات للمستخدمين</h3>
		<p>الرجاء تعبئة البيانات التالية ومن ثم أنقر على إرسال</p>
        <form method="post" class="form-inline" action="/admin/process-insert-notifcations.php">
		<div class="form-row">
		<div class="form-group col-md-12 mb-2">
		  <label for="name" class="col-sm-2 col-form-label">إسم المرسل</label>
		  <input name="name"class="form-control col-sm-3" type="text" placeholder="الإسم" required>
		  </div>
		  <div class="form-group col-md-12 mb-2">
		  <label class="col-sm-2 col-form-label" for="message">نص الرسالة</label><br>
		  <textarea name="message" class="form-control" placeholder="الرسالة" cols="30" rows="1" required></textarea>
          </div>
		  <div class="form-group col-md mb-2">
		  <label class="col-sm-2 col-form-label" for="option">نوع الحدث</label>
		  <select class="form-control col-sm-3" name="option" required>
			<option value=""></option>
			<option>إجتماع</option>
			<option>تحذير</option>
			<option>تنويه</option>
			<option>معلومة</option>
			</select>
			</div>
			<div class="form-group col-md">
			<label class="col-sm-2 col-form-label" for="level">الرتبة</label>
			<select class="form-control col-sm-3" name="level" required>
			<option value=""></option>
			<option value="user">user</option>
			<option value="admin">admin</option>
			<option value="super-admin">super-admin</option>
			</select>
			</div>
			<div class="form-group col-md-6 mt-2">
			<label class="col-sm-8 col-form-label"></label>
			<button name="submit" class="btn btn-outline-success col-sm-2" type="submit">إرسال</button>
			</div>
			</form>
			</div>
    </div>
  </div>
</div>
<script src="/ckeditor/ckeditor.js"></script>
<script>
	CKEDITOR.replace('message');
</script>
<?php include('../includes/php/footer.php'); ?>
