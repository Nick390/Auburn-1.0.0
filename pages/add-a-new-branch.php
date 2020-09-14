<?php include('../includes/php/pages-header.php'); ?>
<?php include('../includes/php/pages-nav.php'); ?>
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
<div class="container">
    <?php
//نص إرسال النموذج
if(isset($_POST['submit'])) {

      $JobNumber = $_POST['JobNumber'];
      $BranchNumber = $_POST['BranchNumber'];
      $Neighborhood = $_POST['Neighborhood'];
      $Region = $_POST['Region'];

      //نص إضافة معلومات لقاعدة البيانات
      $result ="INSERT INTO `add_a_new_branch` (`ID`, `JobNumber`, `BranchNumber`, `Neighborhood`, `Region`, `TimeStamp`) VALUES (NULL, '$JobNumber', '$BranchNumber', '$Neighborhood', '$Region', CURRENT_TIMESTAMP);";
      //نص الملاحضات في حالة وجود خطئ
      if(performQuery($result)){
        echo('<div class="alert alert-success text-right" role="alert">
        تم إضافة الفرع بنجاح
        </div>');
      }else{
      header('Location:');
      echo('<div class="alert alert-danger text-right" role="alert">
      يوجد مشكلة لم يتم إضافة الفرع إلى النظام حاول مره أخرى لاحقاً
      </div>');

      }
}
?>
</div>
<!--A form to add a new branch-->
<form class="needs-validation" autocomplete="off" novalidate method="post" action"" method="post">
    <div class="container">
        <div class="form-group">
            <label>الرقم الوظيفي</label>
            <input type="text" class="form-control" id="JobNumber" Name="JobNumber" placeholder="مثل، 12345" required />
            <div class="invalid-feedback">
      ادخل رقمك الوظيفي باللغة الإنجليزيه
    </div>
        </div>
        <div class="form-group">
            <label>رقم الفرع</label>
            <input type="text" class="form-control" id="BranchNumber" Name="BranchNumber" placeholder="مثل، 14، 22" required />
            <div class="invalid-feedback">
      ادخل رقم الفرع بدون صفر في البداية
    </div>
        </div>
        <div class="form-group">
            <label>الحي</label>
            <input type="text" class="form-control" id="Neighborhood" Name="Neighborhood" placeholder="مثل، الفتح، النصب" required />
            <div class="invalid-feedback">
      ادخل الحي بإسمه الصحيح إذا كان الإسم يحتوي على كسور او همزه قم بكتابة حالتين للفرع مثل النصب/ألنصب
    </div>
        </div>
        <div class="form-group">
              <label for="Region">المنطقة</label>
              <select name="Region" class="form-control" required>
                  <option>خميس مشيط</option>
                  <option>جيزان</option>
                  <option>ابها</option>
                  <option>نجران</option>
                  <option>بيشة</option>
                  <option>وادي الدواسر</option>
                  <option>الباحه</option>
                  <option>تنومة</option>
                  <option>النماص</option>
                  <option>محايل عسير</option>
              </select>
              </div>
            <!--<label>المنطقة</label>
            <input type="text" class="form-control" id="Region" Name="Region" placeholder="مثل، خميس مشيط،ابها" required />
            <div class="invalid-feedback">
            ادخل المنطقة بإسمه الصحيح إذا كان الإسم يحتوي على كسور او همزه قم بكتابة حالتين للفرع مثل أبها/ابها </div>
        </div>-->
            <div class="form-group">
                <button type="submit" class="btn btn-primary" Name="submit">إضافة الفرع</button>
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
<?php include('../includes/php/pages-footer.php'); ?>