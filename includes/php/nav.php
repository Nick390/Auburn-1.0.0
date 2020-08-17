<?php if(!isset($_SESSION['user_name'])): header("location: logout.php");?>

      <?php else: ?>

      <?php endif ?>
<!--You can add more pages through this page-->

<div class="d-flex" id="wrapper">

<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
  <div class="sidebar-heading">Auburn </div>
  <div class="list-group list-group-flush">
    <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fas fa-tachometer-alt"></i> لوحة التحكم</a>
    <a href="#" class="list-group-item list-group-item-action bg-light"> <i class="fas fa-cogs"></i> الإعدادات</a>
    <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fas fa-clone"></i> الصفحات</a>
    <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fas fa-pencil-ruler"></i> الموضوع</a>
    <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fas fa-photo-video"></i> المعرض</a>
    <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fas fa-puzzle-piece"></i> الإضافات</a>
    <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fas fa-id-card-alt"></i> الحساب</a>
    <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fas fa-book"></i> دليل المستخدم</a>
  </div>
</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">

  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
  <button type="button" class="btn" id="menu-toggle">
  <span class="navbar-toggler-icon" id="menu-toggle"></span>
  </button>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="dashboard.php">الرئيسية</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../pages/dashboard.php">عرض الموقع</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#"><i class="fas fa-adjust"></i></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#"><i class="fas fa-language"></i></a>
        </li>
      </ul>
      <a href="/index.php?logout"><button class="btn btn-outline-danger my-2 my-sm-0">تسجيل الخروج</button><a/>
    </div>
  </nav>
  <div class="container-fluid">