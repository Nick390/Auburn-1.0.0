<?php include('../includes/php/pages-header.php'); ?>
<?php include('../includes/php/pages-nav.php'); ?>
<!--Breadcrumb to see where are you at-->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">الرئيسية</li>
  </ol>
</nav>
<!--نموذج يجب إزالتة بعد ربط قاعدة البيانات حيث ان قاعدة البيانات يجب ان تتوفر على هذه البيانات-->
<div class="container">
  <div class="row">
    <div class="col">
    <table class="table table-dark">
    جديد الرخص
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">الفرع</th>
      <th scope="col">الدفاع المدني</th>
      <th scope="col">المحل</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>35</td>
      <td class="bg-danger">21/11/2020</td>
      <td class="bg-success">22/12/2020</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>40</td>
      <td class="bg-warning">21/11/2020</td>
      <td class="bg-success">22/12/2020</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>225</td>
      <td class="bg-success">21/11/2020</td>
      <td class="bg-success">22/12/2020</td>
    </tr>
  </tbody>
</table>
    </div>
    
    <div class="col">
    <table class="table table-dark">
    جديد التعاميم
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">تاريخ التعميم</th>
      <th scope="col">اهمية التعميم</th>
      <th scope="col">نص التعميم</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>10/03/2020</td>
      <td>مهم جداً</td>
      <td><button type="button" class="btn btn-danger btn-sm">المزيد</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>12/03/2020</td>
      <td>عادي</td>
      <td><button type="button" class="btn btn-warning btn-sm">المزيد</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>15/03/2020</td>
      <td>مهم</td>
      <td><button type="button" class="btn btn-success btn-sm">المزيد</button></td>
    </tr>
  </tbody>
</table>
    </div>
  </div>
</div>
    <?php include('../includes/php/pages-footer.php'); ?>