<?php include("../includes/php/pages-header.php"); ?>
<?php include("../includes/php/pages-nav.php"); ?>
<!--Breadcrumb to see where are you at-->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
    <li class="breadcrumb-item"><a href="/pages/account_notifications.php">الإشعارات</a></li>
    <li class="breadcrumb-item active"><?php echo 'إشعار رقم '.$i['id']?></li>
  </ol>
</nav>
<br>
<?php
$id = $_GET['id'];

$query ="UPDATE `notifications` SET `status` = 'read' WHERE `id` = $id;";
performQuery($query);

$query = "SELECT * from `notifications` where `id` = '$id';";
if(count(fetchAll($query))>0){
    foreach(fetchAll($query) as $i){
        if($i['type']=='معلومة'){
            echo '
            <div class="table-responsive">
            <table class="table">
            <thead>
              <tr>
              <th scope="col">المرسل</th>
              <th scope="col">الوصف</th>
              <th scope="col">الحدث</th>
              <th scope="col">التاريخ</th>
            </tr>
            <tbody>
            <tr>
              <th>
            '.ucfirst($i['name']).'</th><td>'.$i['message'].'</td><td>'.$i['type'].'</td><td>'.$i['date'].'</td></tr>
            </tbody>
          </table>
          </div>
          ';
        }else{
            echo '
            <div class="table-responsive">
            <table class="table">
            <thead>
              <tr>
              <th scope="col">المرسل</th>
              <th scope="col">الحدث</th>
              <th scope="col">التفاصيل</th>
              <th scope="col">التاريخ والوقت</th>
            </tr>
            <tbody>
            <tr>
              <th>
            '.ucfirst($i['name']).'</th><td>'.$i['type'].'</td><td>'.$i['message'].'</td><td>'.$i['date'].'</td></tr>
            </tbody>
          </table>
          </div>
          ';
        }
    }
}
?>
<!-- Page Content -->
<?php include("../includes/php/pages-footer.php"); ?>