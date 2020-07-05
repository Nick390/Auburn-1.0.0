<?php include('../includes/php/pages-header.php'); ?>
<?php include('../includes/php/pages-nav.php'); ?>
<!--Breadcrumb to nav back-->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
    <li class="breadcrumb-item active">كافة الفروع</li>
    <li class="breadcrumb-item active">الفروع</li>
  </ol>
</nav>
<!--Add the text that you would like to appear on this page-->
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>تنبية!</strong> كل الكلمات التي تكتبها في البحث يتم تسجيلها لتطوير.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="container">
    <br/>
	<div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form class="card card-sm">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="إبحث عن رقم فرع، حي، منطقة...">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-success" type="submit">بحث</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>
</div>
<br/>
<!--نموذج يجب إزالتة بعد ربط قاعدة البيانات حيث ان قاعدة البيانات يجب ان تتوفر على هذه البيانات-->
<nav class="navbar navbar-dark bg-dark">
    <a href="add-a-new-branch.php"><button class="btn btn-sm btn-primary">إضافة فرع جديد</button></a>
</nav>
<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">رقم الفرع</th>
      <th scope="col">الحي</th>
      <th scope="col">المنطقة</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>14</td>
      <td>ذلالة</td>
      <td>المنطقة</td>
      <td><button type="button" class="btn btn-primary btn-sm">عرض الملفات</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>14</td>
      <td>ذلالة</td>
      <td>المنطقة</td>
      <td><button type="button" class="btn btn-primary btn-sm">عرض الملفات</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>14</td>
      <td>ذلالة</td>
      <td>المنطقة</td>
      <td><button type="button" class="btn btn-primary btn-sm">عرض الملفات</button></td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>14</td>
      <td>ذلالة</td>
      <td>المنطقة</td>
      <td><button type="button" class="btn btn-primary btn-sm">عرض الملفات</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>14</td>
      <td>ذلالة</td>
      <td>المنطقة</td>
      <td><button type="button" class="btn btn-primary btn-sm">عرض الملفات</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>14</td>
      <td>ذلالة</td>
      <td>المنطقة</td>
      <td><button type="button" class="btn btn-primary btn-sm">عرض الملفات</button></td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>14</td>
      <td>ذلالة</td>
      <td>المنطقة</td>
      <td><button type="button" class="btn btn-primary btn-sm">عرض الملفات</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>14</td>
      <td>ذلالة</td>
      <td>المنطقة</td>
      <td><button type="button" class="btn btn-primary btn-sm">عرض الملفات</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>14</td>
      <td>ذلالة</td>
      <td>المنطقة</td>
      <td><button type="button" class="btn btn-primary btn-sm">عرض الملفات</button></td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>14</td>
      <td>ذلالة</td>
      <td>المنطقة</td>
      <td><button type="button" class="btn btn-primary btn-sm">عرض الملفات</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>14</td>
      <td>ذلالة</td>
      <td>المنطقة</td>
      <td><button type="button" class="btn btn-primary btn-sm">عرض الملفات</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>14</td>
      <td>ذلالة</td>
      <td>المنطقة</td>
      <td><button type="button" class="btn btn-primary btn-sm">عرض الملفات</button></td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>14</td>
      <td>ذلالة</td>
      <td>المنطقة</td>
      <td><button type="button" class="btn btn-primary btn-sm">عرض الملفات</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>14</td>
      <td>ذلالة</td>
      <td>المنطقة</td>
      <td><button type="button" class="btn btn-primary btn-sm">عرض الملفات</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>14</td>
      <td>ذلالة</td>
      <td>المنطقة</td>
      <td><button type="button" class="btn btn-primary btn-sm">عرض الملفات</button></td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>14</td>
      <td>ذلالة</td>
      <td>المنطقة</td>
      <td><button type="button" class="btn btn-primary btn-sm">عرض الملفات</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>14</td>
      <td>ذلالة</td>
      <td>المنطقة</td>
      <td><button type="button" class="btn btn-primary btn-sm">عرض الملفات</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>14</td>
      <td>ذلالة</td>
      <td>المنطقة</td>
      <td><button type="button" class="btn btn-primary btn-sm">عرض الملفات</button></td>
    </tr>
  </tbody>
</table>
<?php include('../includes/php/pages-footer.php'); ?>
