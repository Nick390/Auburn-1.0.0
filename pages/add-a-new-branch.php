<?php include('../includes/php/pages-header.php'); ?>
<?php include('../includes/php/pages-nav.php'); ?>
<?php
//نص الإتصال بقاعدة البيانات
require_once '../includes/source/dp_connect.php';
//نص إرسال النموذج
//النموذج الواقعي غير متصل مع النموذج الذي يرسل إلى قاعدة البيانات يحتاج إلى إصلاح
if(isset($_POST['submit'])) {

      $JobNumber = $_POST['JobNumber'];
      $BranchNumber = $_POST['BranchNumber'];
      $Neighborhood = $_POST['Neighborhood'];
      $Region = $_POST['Region'];

    try {
      $SQLInsert = "INSERT INTO `add-a-new-branch` (`ID`, `JobNumber`, `BranchNumber`, `Neighborhood`, `Region`) VALUES (NULL, 'JobNumber', 'BranchNumber', 'Neighborhood', 'Region');";

      $statement = $conn->prepare($SQLInsert);
      $statement->execute(array(':JobNumber' => $JobNumber, ':BranchNumber' => $BranchNumber, ':Neighborhood' => $Neighborhood, ':Region' => $Region));

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
<!--ملاحظة عند إضافة فرع جديد-->
<div class="container">
    <h4>إضافة فرع جديد</h4>
    <hr>
    <div class="alert alert-warning" role="alert">
    <strong>تنبية! </strong>
    بإضافة فرع جديد يجب أن تتأكد انه غير موجود في النظام حيث أن إضافة فرع موجود سيسبب تداخل الملفات
    </div>
    </div>
    
<!--A form to add a new branch-->
<form class="needs-validation" autocomplete="off" novalidate>
    <div class="container">
        <div class="form-group">
            <label>الرقم الوظيفي</label>
            <input type="text" class="form-control" id="JobNumber" placeholder="مثل، 12345" value="" required />
            <div class="invalid-feedback">
      ادخل رقمك الوظيفي باللغة الإنجليزيه
    </div>
        </div>
        <div class="form-group">
            <label>رقم الفرع</label>
            <input type="text" class="form-control" id="BranchNumber" placeholder="مثل، 14، 22" value="" required />
            <div class="invalid-feedback">
      ادخل رقم الفرع بدون صفر في البداية
    </div>
        </div>
        <div class="form-group">
            <label>الحي</label>
            <input type="text" class="form-control" id="Neighborhood" placeholder="مثل، الفتح، النصب" value="" required />
            <div class="invalid-feedback">
      ادخل الحي بإسمه الصحيح إذا كان الإسم يحتوي على كسور او همزه قم بكتابة حالتين للفرع مثل النصب/ألنصب
    </div>
        </div>
        <div class="form-group">
            <label>المنطقة</label>
            <input type="text" class="form-control" id="Region" placeholder="مثل، خميس مشيط،ابها" value="" required />
            <div class="invalid-feedback">
            ادخل المنطقة بإسمه الصحيح إذا كان الإسم يحتوي على كسور او همزه قم بكتابة حالتين للفرع مثل أبها/ابها </div>
        </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">إضافة الفرع</button>
            </div>
    </div>
</form>
<!--سكربت لإظهار العناصر باللون الأحمر في حالة عدم إدخال بيانات-->
<script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>

<!--نص إضافة معلومات لقاعدة البيانات-->
<INSERT INTO `licenses` (`id`, `sequence`, `branch`, `region`, `date-of-shop-license`,
`date-of-civil-defense`, `permit`) VALUES (NULL, '1', '14', 'خميس مشيط', '2022-05-22', '2020-03-07',
'2020-05-16');>
<?php include('../includes/php/pages-footer.php'); ?>