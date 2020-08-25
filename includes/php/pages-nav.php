<?php if(!isset($_SESSION['user_name'])): header("location: logout.php");?>

      <?php else: ?>

      <?php endif ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="/">
    <img src="/images/favicon.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
      Auburn
  </a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown">
	<!--New code Start-->
		<a class="nav-link m-0 p-0 ml-3 active" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		            <?php
                $query = "SELECT * from `notifications` where `status` = 'unread' order by `date` DESC";
                if(count(fetchAll($query))>0){
                ?>
                <span class="badge badge-pill badge-danger"><?php echo count(fetchAll($query)); ?></span>
              <?php
                }
                    ?>
		<span style="font-size:26px;">
          <i class="fas fa-bell"></i>
         </span> 
    
              </a>
		<div class="dropdown-menu notification-style" aria-labelledby="dropdown01">
		<div class="container">
		  <div class="row">
				<div class="col-sm">
				  <p class="m-0 p-0 notification-text"> الإشعارات</p>
				</div>
				<div class="col-sm">
				  <a class="text-secondary notification-logo" href="/pages/account_notifications.php"><i class="fas fa-cog pr-2"></i></a>
				</div>
            </div>
         </div>
               <div class="dropdown-divider"></div>
		
                <?php
                $query = "SELECT * from `notifications` order by `date` DESC";
                 if(count(fetchAll($query))>0){
                     foreach(fetchAll($query) as $i){
                ?>
              <a style ="
                         <?php
                            if($i['status']=='unread'){
                                echo "font-weight:900; color:#17a2b8;";
                            }
                         ?>
                         "class="dropdown-item text-right text-wrap" href="/pages/account_notifications_view.php?id=<?php echo $i['id'] ?>">
                <small><i><?php echo date('F j, Y, g:i a',strtotime($i['date'])) ?></i></small><br/>
                  <?php 
                if($i['type']=='معلومة'){
                  echo ($i['name'])."<br/>معلومة جديدة";
              }else if($i['type']=='إجتماع'){
                  echo ucfirst($i['name'])."<br/>تم تحديد موعد إجتماع جديد";
              }else if($i['type']=='تحذير'){
                echo ucfirst($i['name'])."<br/>تحذير مهم للغاية لك";
            }else if($i['type']=='إنذار'){
              echo ucfirst($i['name'])."<br/>إنذار جديد لك";
          }
                  ?>
                </a>
              <div class="dropdown-divider"></div>
                <?php
                     }
                 }else{
					 
                     echo '<a class="dropdown-item text-right text-wrap" href="#">لا يوجد إشعارات حالياً ، لكن عند ظهور إشعار جديد سيكون هنا</a>';
                 }
                     ?>
            </div>
    </li>
      <li class="nav-item dropdown">
        <a class="nav-link active p-0 m-0 ml-2" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <li class="nav-item dropdown">
        <a class="nav-link m-0 p-0 ml-3 active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span style="font-size:26px;">
        <i class="fas fa-th"></i>
           </span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/pages/All-branches.php"><i class="fas fa-store-alt"></i>
                  كافة الفروع</a>
          <a class="dropdown-item" href="#"><i class="fas fa-copy"></i>
                  السجلات التجارية </a>
          <a class="dropdown-item" href="/pages/Validity-of-licenses.php"><i class="fas fa-clock"></i>
                    صلاحية الرخص</a>
                    <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
                  عرض كافة الخدمات</a>
        </div>
      </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-alt"></i>
          <?php echo "مرحباً ".$_SESSION['user_name']?>
          </a>
          <div class="dropdown-menu ml-0 mr-0 pl-0 pr-0" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/pages/profile.php">الملف الشخصي</a>
          <a class="dropdown-item" href="/index.php?logout">تسجيل الخروج<a/>
          </div>
        </li>
    </ul>
  </div>
</nav>