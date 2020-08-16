<?php if(!isset($_SESSION['user_name'])): header("location: logout.php");?>

      <?php else: ?>

      <?php endif ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="dashboard.php">بوابة العلاقات الحكومية</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav margin-right">
      <li class="nav-item"><?php echo "<a class='nav-link'> مرحباً بك ".$_SESSION['user_name']." في لوحة التحكم </a>" ?></li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          كافة الملفات
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/pages/All-branches.php">الفروع</a>
          <a class="dropdown-item" href="#">السجلات التجارية</a>
          <a class="dropdown-item" href="/pages/Validity-of-licenses.php">صلاحية الرخص</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pages/profile.php">الملف الشخصي</a>
      </li>
    </ul>
    <a href="/index.php?logout"><button class="btn btn-outline-danger my-2 my-sm-0">تسجيل الخروج</button><a/>
  </div>
</nav>
