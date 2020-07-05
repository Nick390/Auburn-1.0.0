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
?>
<!--Breadcrumb to nav back-->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
    <li class="breadcrumb-item active">كافة الفروع</li>
    <li class="breadcrumb-item"><a href="/pages/All-branches.php">الفروع</a></li>
    <li class="breadcrumb-item active" aria-current="page">إضافة فرع</li>
  </ol>
</nav>
<!--A form to add a new branch-->
<form class="was-validated">
    <div class="container">
        <div class="form-group">
            <label>الإسم</label>
            <input type="text" class="form-control" id="lastName" placeholder="مثل، أحمد الوادعي" value="" required />
            <div class="invalid-feedback">
      ادخل إسمك الثنائي وباللغة العربية
    </div>
        </div>
        <div class="form-group">
            <label>رقم الفرع</label>
            <input type="text" class="form-control" id="lastName" placeholder="مثل، 14، 22" value="" required />
            <div class="invalid-feedback">
      ادخل رقم الفرع بدون صفر في البداية
    </div>
        </div>
        <div class="form-group">
            <label>الحي</label>
            <input type="text" class="form-control" id="lastName" placeholder="مثل، الفتح، النصب" value="" required />
            <div class="invalid-feedback">
      ادخل الحي بإسمه الصحيح إذا كان الإسم يحتوي على كسور او همزه قم بكتابة حالتين للفرع مثل النصب/ألنصب
    </div>
        </div>
        <div class="form-group">
            <label>المنطقة</label>
            <input type="text" class="form-control" id="lastName" placeholder="مثل، خميس مشيط،ابها" value="" required />
            <div class="invalid-feedback">
            ادخل المنطقة بإسمه الصحيح إذا كان الإسم يحتوي على كسور او همزه قم بكتابة حالتين للفرع مثل أبها/ابها </div>
        </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">إضافة الفرع</button>
            </div>
    </div>
</form>



<!--نص إضافة معلومات لقاعدة البيانات-->
<INSERT INTO `licenses` (`id`, `sequence`, `branch`, `region`, `date-of-shop-license`,
`date-of-civil-defense`, `permit`) VALUES (NULL, '1', '14', 'خميس مشيط', '2022-05-22', '2020-03-07',
'2020-05-16');>
<?php include('../includes/php/pages-footer.php'); ?>