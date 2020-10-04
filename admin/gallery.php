<?php include('../includes/php/header.php'); ?>
<?php include('../includes/php/nav.php'); ?>
<?php $mysqli = $conn; ?>

<div class="container">
    <br/>
	<div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form class="card card-sm">
                                <div class="card-body row no-gutters align-items-center p-1 m-1 pr-3">
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body mb-0"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col mr-3 ml-3">
                                        <input type="search" placeholder="<?php echo $lang['Search For A File Using Its Name Or Format'] ?>" class="form-control search-input form-control-lg form-control-borderless" data-table="gallery-list"/>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
    </div>
                        <!--end of col-->
    <br/>
    <div class="row">
        <div class="col">
        <a href="/admin/UploadMultipleFiles.php"><button class="btn btn-sm btn-primary"><?php echo $lang['Upload New File Button'] ?></button></a>
                    </div>
                    </div>
    <br/>
</div>
<br/>
<table class="table gallery-list">
  <thead>
    <tr>
      <th class="border-bottom-0 align-middle"><input type="checkbox" id="select-all" class="ml-2" title="<?php echo $lang['Checkbox Title']?>"></th>
      <th class="border-bottom-0"></th>
      <th class="d-none d-sm-block border-bottom-0"><?php echo $lang['File']?></th>
      <th class="border-bottom-0 align-middle"><?php echo $lang['URL']?></th>
      <th class="d-none d-sm-block border-bottom-0"><?php echo $lang['Uplode Date']?></th>
    </tr>
  </thead>
  <tbody>
<?php
//Display files from mysqli using php
    $result = $mysqli->query("SELECT * FROM `uploadmultiplefiles` ORDER BY `UploadTimestamp` DESC") or die($mysqli->error);

    while ($data = $result->fetch_assoc()){
?>



    <tr>
      <td style="width: 2%;" class="text-right"><input type="checkbox" class="form-check-input"></td>
      <td><?php echo "<img class='border border-dark' src='{$data['imgdir']}' alt='{$data['filename']}' height='64px';
    width='64px';>"; ?></td>
      <td class="d-none d-sm-block"><?php echo "{$data['filename']}"; ?></td>
      <td class="align-middle"><input type="text" value="<?php echo "$DB_HOST:8012/admin/{$data['imgdir']}"; ?>" class="next-input" style="width:100%;"></td>
      <td class="d-none d-sm-block"><small class="text-muted"><?php echo "{$data['UploadTimestamp']}"; ?></small></td>
    </tr>
  
    <?php 
    }

?>
</tbody>
</table>

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
//Used to search a table
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