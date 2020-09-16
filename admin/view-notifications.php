<?php include '../includes/php/header.php'; ?>
<?php include '../includes/php/nav.php'; ?>
<?php include_once '../includes/source/function.php'; ?>

<div class="container m-0 p-0">
<div class="row m-0 p-0">
    <div class="col-sm m-0 p-0">
        <h3>جميع الإشعارات التي تم إرسالها</h3>
        <p>في هذه الصفحة ستجد كافة الإشعارات التي تم إرسالها لكافة المستخدمين</p>
        <p><?php echo 'إشعار رقم ' . ($id = $_GET['id']); ?></p>
        <p><a class="text-dark" href="/admin/view-all-notification.php"><i class="fas fa-arrow-alt-circle-right"></i> عد إلى الخلف</a></p>
    </div>
</div>
</div>
<?php
$id = $_GET['id'];
$query = "UPDATE `notifications` SET `status` = 'read' WHERE `id` = $id;";
performQuery($query);
$query = "SELECT * from `notifications` where `id` = '$id';";
if (count(fetchAll($query)) > 0) {
    foreach (fetchAll($query) as $i) {
        if ($i['type'] == 'معلومة') {
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
            ' .
                ucfirst($i['name']) .
                '</th><td>' .
                $i['message'] .
                '</td><td>' .
                $i['type'] .
                '</td><td>' .
                $i['date'] .
                '</td></tr>
            </tbody>
          </table>
          </div>
          ';
        } else {
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
            ' .
                ucfirst($i['name']) .
                '</th><td>' .
                $i['type'] .
                '</td><td>' .
                $i['message'] .
                '</td><td>' .
                $i['date'] .
                '</td></tr>
            </tbody>
          </table>
          </div>
          ';
        }
    }
}
?>
<?php include '../includes/php/footer.php'; ?>
