<?php if(!isset($_SESSION['user_name'])): header("location: logout.php");?>

      <?php else: ?>

      <?php endif ?>
<!--You can add more pages through this page-->

<div class="d-flex" id="wrapper">

<!-- Sidebar -->

<div class="bg-light border-right navbar-light" id="sidebar-wrapper">
  <div class="sidebar-heading"><a class="navbar-brand" href="/admin/dashboard.php">Auburn </a></div>
  
  <div class="list-group list-group-flush">
    <a href="/admin/dashboard.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-tachometer-alt"></i> لوحة التحكم</a>
    <a href="#" class="list-group-item list-group-item-action bg-light"> <i class="fas fa-cogs"></i> الإعدادات</a>
    <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fas fa-clone"></i> الصفحات</a>
    <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fas fa-pencil-ruler"></i> الموضوع</a>
    <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fas fa-photo-video"></i> المعرض</a>
    <a class="list-group-item list-group-item-action bg-light" data-toggle="collapse" href="#dropdown-lvl1"><i class="fas fa-puzzle-piece"></i> الإضافات
    <i class="fas fa-caret-down ico-margin"></i></a>
						<!-- Dropdown level 1 -->
						<div id="dropdown-lvl1" class="panel-collapse collapse">
							<div class="panel-body">
								<ul class="nav navbar-nav">
									<li><a class="list-group-item list-group-item-action bg-light" href="/admin/submit-a-new-notification.php">إرسال إشعار جديد</a></li>
                </ul>
              </div>
            </div>
    <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fas fa-newspaper"></i> المنشورات</a>
    <a href="/admin/users-dashboard.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-users"></i> المستخدمين</a>
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
          <a class="nav-link" href="../pages/dashboard.php" target="_blank">عرض الموقع</a>
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
  <div class="container">
  <div class="row m-2">