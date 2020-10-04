<?php include('../includes/php/header.php'); ?>
<?php include('../includes/php/nav.php'); ?>
<style>
</style>
<div class="container">
<br/>
    <div class="row p-0 m-0">
        <div class="col p-0 m-0">
        <a href="/admin/add_new_user.php"><button class="btn btn-sm btn-primary"><?php echo $lang['Add New User Button'] ?></button></a>
                    </div>
                    </div>
    <br/>
	<div class="row">
        <div class="col-12 col-md-10 col-lg-8">
            <form class="card card-sm">
                <div class="card-body row no-gutters align-items-center p-1 m-1 pr-3">
                    <div class="col-auto">
                        <i class="fas fa-search h4 text-body mb-0"></i>
                    </div>
                        <!--end of col-->
                    <div class="col mr-3 ml-3">
                        <input type="search" placeholder="<?php echo $lang['Search For A User or E-mail']; ?>" class="form-control search-input form-control-lg form-control-borderless" data-table="gallery-list"/>
                    </div>
                                    <!--end of col-->
                </div>
            </form>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col">
<?php
                $query = "SELECT * FROM `users` order by `user_id`";
                $getusersinfo = $conn->query($query);
                 if($getusersinfo){
?>
<table class="table customers-list">
      <thead>
        <tr>
          <th class="border-bottom-0 align-middle"><input type="checkbox" id="select-all" class="ml-2"></th>
          <th class="border-bottom-0 align-middle">#</th>
          <th class="border-bottom-0 align-middle"><?php echo $lang['User Name']; ?></th>
          <th class="align-middle d-none d-sm-block border-bottom-0"><?php echo $lang['E-mail']; ?></th>
          <th class="border-bottom-0 align-middle"><?php echo $lang['Account Date Creation']; ?></th>
        </tr>
      </thead>
      <tbody>
<?php
if ($result = $conn->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["user_id"];
        $field2name = $row["user_name"];
        $field4name = $row["user_email"];
        $field5name = $row["user_date_created"];

        echo ' <tr>
                  <td style="width: 2%;" class="text-right"><input type="checkbox" class="ml-2"></td>
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td class="d-none d-sm-block">'.$field4name.'</td>
                  <td>'.$field5name.'</td>
                </tr>
                ';
    }
?>
    </tbody>
    </table>
<?php
}else{
  echo '<div class="alert alert-danger" role="alert">يوجد مشكلة في قاعدة البيانات</div>';
}
}
?>
</div>
    </div>
    </div>
    <script>
        //Used to select-all by checing the checkbox at the to of the table
        document.getElementById('select-all').onclick = function() {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        for (var checkbox of checkboxes) {
            checkbox.checked = this.checked;
        }
        }
    </script>
    <script>
        (function(document) {
            'use strict';

            var TableFilter = (function(myArray) {
                var search_input;

                function _onInputSearch(e) {
                    search_input = e.target;
                    var tables = document.getElementsByClassName(search_input.getAttribute('data-table'));
                    myArray.forEach.call(tables, function(table) {
                        myArray.forEach.call(table.tBodies, function(tbody) {
                            myArray.forEach.call(tbody.rows, function(row) {
                                var text_content = row.textContent.toLowerCase();
                                var search_val = search_input.value.toLowerCase();
                                row.style.display = text_content.indexOf(search_val) > -1 ? '' : 'none';
                            });
                        });
                    });
                }

                return {
                    init: function() {
                        var inputs = document.getElementsByClassName('search-input');
                        myArray.forEach.call(inputs, function(input) {
                            input.oninput = _onInputSearch;
                        });
                    }
                };
            })(Array.prototype);

            document.addEventListener('readystatechange', function() {
                if (document.readyState === 'complete') {
                    TableFilter.init();
                }
            });

        })(document);
    </script>
<?php include('../includes/php/footer.php'); ?>