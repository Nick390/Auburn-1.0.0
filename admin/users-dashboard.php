<?php include('../includes/php/header.php'); ?>
<?php include('../includes/php/nav.php'); ?>
<div class="container m-0 p-0">
    <div class="row m-0 p-0">
        <div class="col-sm m-0 p-0">
            <h3>حسابات المستخدمين</h3>
            <p>في هذه الصفحة ستجد كافة المعلومات عن كافة المستخدمين</p>
        </div>
    </div>
</div>
<div class="container">
    <br/>
	<div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form class="card card-sm">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body mb-0"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col mr-3 ml-3">
                                        <input type="search" placeholder="إبحث عن رقم فرع، حي، منطقة..." class="form-control search-input form-control-lg form-control-borderless" data-table="customers-list"/>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>
</div>

<?php
                $query = "SELECT * FROM `users` order by `user_id`";
                 if(count(fetchAll($query))>0)

echo '<table class="table table-sm customers-list mt-3">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">إسم المستخدم</th>
          <th scope="col">كلمة المرور</th>
          <th scope="col">البريد الإلكتروني</th>
          <th scope="col">تاريخ ووقت إنشاء الحساب</th>
        </tr>
      </thead>
      <tbody>';

if ($result = $conn->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["user_id"];
        $field2name = $row["user_name"];
        $field3name = $row["user_password_hash"];
        $field4name = $row["user_email"];
        $field5name = $row["user_date_created"];

        echo ' <tr>
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td>
                  <td>'.$field5name.'</td>
                </tr>
                ';
    }
    echo'</tbody>
         </table>';
}else{
  echo '<div class="alert alert-danger" role="alert">يوجد مشكلة في قاعدة البيانات</div>';
}
?>
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