<?php include("../includes/php/pages-header.php"); ?>
<?php include("../includes/php/pages-nav.php"); ?>
<!--Breadcrumb to see where are you at-->
<br>
<div class="container">
<div class="row">
<div class="col">
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#notification" role="tab" aria-controls="home" aria-selected="true">الإشعارات</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="profile" aria-selected="false">الإعدادات</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="notification" role="tabpanel" aria-labelledby="notification-tab">
  <!--جميع الإشعارات-->
  <?php
                $query = "SELECT * from `notifications` order by `date` DESC";
                 if(count(fetchAll($query))>0){
                     foreach(fetchAll($query) as $i){
                ?>
              <a style ="
                         <?php
                            if($i['status']=='unread'){
                                echo "font-weight:bold; color:#17a2b8;";
                            }
                         ?>
                         "class="text-right w-100" href="/pages/account_notifications_view.php?id=<?php echo $i['id'] ?>">
                <small><i><?php echo date('F j, Y, g:i a',strtotime($i['date'])) ?></i></small><br/>
                  <?php 
                  
                  if($i['type']=='معلومة'){
                    echo ($i['name'])."<br/>معلومة جديدة لك";
                }else if($i['type']=='إجتماع'){
                    echo ucfirst($i['name'])."<br/>تم تحديد موعد إجتماع جديد";
                }else if($i['type']=='تنويه'){
                  echo ucfirst($i['name'])."<br/>تنوية جديد لك";
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
					 
                     echo '<p>لا يوجد إشعارات حالياً ، لكن عند ظهور إشعار جديد سيكون هنا</p>';
                 }
                     ?>
  
  </div>
  <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
  <!--جميع إعدادات الإشعارات-->
  </div>
</div>
</div>
</div>
</div>
<!-- Page Content -->
<?php include("../includes/php/pages-footer.php"); ?>