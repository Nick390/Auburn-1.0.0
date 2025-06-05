<?php include '../includes/php/header.php'; ?>
<?php include '../includes/php/nav.php'; ?>

<div class="container m-0 p-0">
<div class="row m-0 p-0">
    <div class="col-sm m-0 p-0">
        <h3><?php echo $lang['All Sent Notifications']; ?></h3>
        <p><?php echo $lang['All Sent Notifications Description']; ?></p>
        <p><?php echo $lang['Notification Number'] . ' ' . ($id = $_GET['id']); ?></p>
        <p><a class="text-dark" href="/admin/view-all-notification.php"><i class="fas fa-arrow-alt-circle-right"></i> <?php echo $lang['Go Back']; ?></a></p>
    </div>
</div>
</div>
<?php
$id = $_GET['id'];
$query = "UPDATE `notifications` SET `status` = 'read' WHERE `id` = $id;";

$query = "SELECT * from `notifications` where `id` = '$id';";
$wrok = $conn->query($query);
if ($wrok) {
    foreach (($wrok) as $i) {
        if ($i['type'] == 'معلومة' || $i['type'] == 'Information') {
            echo '
            <div class="table-responsive">
            <table class="table">
            <thead>
              <tr>
              <th scope="col">' . $lang['Sender'] . '</th>
              <th scope="col">' . $lang['Description'] . '</th>
              <th scope="col">' . $lang['Event'] . '</th>
              <th scope="col">' . $lang['Date'] . '</th>
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
              <th scope="col">' . $lang['Sender'] . '</th>
              <th scope="col">' . $lang['Event'] . '</th>
              <th scope="col">' . $lang['Details'] . '</th>
              <th scope="col">' . $lang['Date and Time'] . '</th>
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
