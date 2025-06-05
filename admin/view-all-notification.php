<?php include '../includes/php/header.php'; ?>
<?php include '../includes/php/nav.php'; ?>

<div class="container m-0 p-0">
    <div class="row m-0 p-0">
        <div class="col-sm m-0 p-0">
            <h3><?php echo $lang['All Sent Notifications']; ?></h3>
            <p><?php echo $lang['All Sent Notifications Description']; ?></p>
            <?php if (isset($_SESSION['message'])): ?>
<div class="alert alert-<?= $_SESSION['msg_type'] ?> alert-dismissible fade show" role="alert">
<?php
echo $_SESSION['message'];
unset($_SESSION['message']);
?>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>
        </div>
    </div>
</div>

<!--جميع الإشعارات-->
<?php
$query = "SELECT * from `notifications` order by `date` DESC";
echo '<table class="table table-sm customers-list mt-3">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">' . $lang['Notification Type'] . '</th>
    <th scope="col">' . $lang['Notification Content'] . '</th>
    <th scope="col">' . $lang['User Rank Sent To'] . '</th>
    <th scope="col">' . $lang['Publish Date Time'] . '</th>
    <th scope="col"></th>
    <th scope="col"></th>
  </tr>
</thead>
<tbody>';
if ($result = $conn->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
        $field2name = $row["type"];
        $field3name = $row["message"];
        $field4name = $row["level"];
        $field5name = $row["date"];

        echo ' <tr>
        <td>' .$field1name .'</td> 
        <td>' .$field2name .'</td> 
        <td>' .$field3name .'</td> 
        <td>' .$field4name .'</td>
        <td>' .$field5name .'</td>
        <td class="pr-0 pl-0"><a href="/admin/view-notifications.php?id=' .$field1name .'"><button type="button" class="btn btn-info">' . $lang['More'] . '
        </button></a></td>
        <td class="pr-0 pl-0"><a href="/admin/process-delete-notifcations.php?delete=' .$field1name .'"><button type="button" class="btn btn-danger">' . $lang['Delete'] . '</button></a></td>
            </tr>';
    }
    echo '</tbody>
        </table>';
} else {
    echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            ' . $lang['No Notifications Sent'] . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            ';
    echo '<div class="alert alert-danger" role="alert">' . $lang['Database Problem'] . '</div>';
}
?>
<?php include '../includes/php/footer.php'; ?>
