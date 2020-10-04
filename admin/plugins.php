<?php include('../includes/php/header.php'); ?>
<?php include('../includes/php/nav.php'); ?>
<!--هذه الصفحة مجرد شكل فقط ولكن تحتاج إلى عنصر echo من أجل ربطها في نظام الترجمة-->
<style>
    #medialogo{
            width: 64px;
            height: 64px;
        }
    .inline{
        display: inline;
    }
    .block{
        display: block;
    }
</style>
            <div class="container p-0 m-0">
    <br/>
    <div class="row p-0 m-0">
        <div class="col p-0 m-0">
        <button type="button" class="btn btn-primary inline btn-sm"><?php echo $lang['PluginUpload'] ?></button>
                    </div>
                    </div>
    <br/>
	<div class="row justify-content-right">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form class="card card-sm">
                                <div class="card-body row no-gutters align-items-center p-1 m-1 pr-3">
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body mb-0"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col mr-3 ml-3">
                                        <input type="search" placeholder="<?php echo $lang['Search For A Plugin'] ?>" class="form-control search-input form-control-lg form-control-borderless" data-table="plugins-list"/>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
    </div>
                        <!--end of col-->
    <br/>
</div>
<br/>
<table class="table table-sm plugins-list mt-3 text-right">
    <thead>
        <tr>
          <th style="width: 2%;" class="text-right" scope="col"><input type="checkbox" id="select-all" class="ml-2" title="<?php echo $lang['PluginTableCheckboxTitle'] ?>"></th>
          <th style="width: 20%;" scope="col" class="text-right"><?php echo $lang['PluginTableTitle'] ?></th>
          <th style="width: 60%;" scope="col" class="text-right"><?php echo $lang['PluginTableDescription'] ?></th>
        </tr>
    </thead>
    <tbody>

<!--سطر الإضافات-->

        <tr>
            <td style="width: 2%;" class="text-right"><input type="checkbox" class="ml-2"></td>
            <td style="width: 20%;" class="text-right">
                <div class="container p-0 m-0">
                    <div class="row p-0 m-0">
                        <div class="col-sm p-0 m-0">
                            <div class="media">
                                    <img src="https://cdn.shopify.com/s/files/1/0036/0415/2432/files/2.svg?v=1570147471" class="ml-3 border border-dark" alt="ويلا سوق" id="medialogo">
                                <div class="media-body">
                                    <h4 class="mt-0">الإشعارات</h4>
                                    <a href="#" class="border-left border-dark pl-1"> <?php echo $lang['PluginDeactivateButton'] ?></a>
                                    <a href="#" class="border-left border-dark pl-1"> <?php echo $lang['PluginSettingsButton'] ?></a>
                                    <a href="#"> <?php echo $lang['PluginEditButton'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
            <td style="width: 60%;" class="text-right">وصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافة</td>
        </tr>
        <tr>
            <td style="width: 2%;" class="text-right"><input type="checkbox" class="ml-2"></td>
            <td style="width: 20%;" class="text-right">
                <div class="container p-0 m-0">
                    <div class="row p-0 m-0">
                        <div class="col-sm p-0 m-0">
                            <div class="media">
                                    <img src="https://cdn.shopify.com/s/files/1/0036/0415/2432/files/2.svg?v=1570147471" class="ml-3 border border-dark" alt="ويلا سوق" id="medialogo">
                                <div class="media-body">
                                    <h4 class="mt-0">الإشعارات</h4>
                                    <a href="#" class="border-left border-dark pl-1"> <?php echo $lang['PluginDeactivateButton'] ?></a>
                                    <a href="#" class="border-left border-dark pl-1"> <?php echo $lang['PluginSettingsButton'] ?></a>
                                    <a href="#"> <?php echo $lang['PluginEditButton'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
            <td style="width: 60%;" class="text-right">وصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافة</td>
        </tr>
        <tr>
            <td style="width: 2%;" class="text-right"><input type="checkbox" class="ml-2"></td>
            <td style="width: 20%;" class="text-right">
                <div class="container p-0 m-0">
                    <div class="row p-0 m-0">
                        <div class="col-sm p-0 m-0">
                            <div class="media">
                                    <img src="https://cdn.shopify.com/s/files/1/0036/0415/2432/files/2.svg?v=1570147471" class="ml-3 border border-dark" alt="ويلا سوق" id="medialogo">
                                <div class="media-body">
                                    <h4 class="mt-0">الإشعارات</h4>
                                    <a href="#" class="border-left border-dark pl-1"> <?php echo $lang['PluginDeactivateButton'] ?></a>
                                    <a href="#" class="border-left border-dark pl-1"> <?php echo $lang['PluginSettingsButton'] ?></a>
                                    <a href="#"> <?php echo $lang['PluginEditButton'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
            <td style="width: 60%;" class="text-right">وصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافة</td>
        </tr>
        <tr>
            <td style="width: 2%;" class="text-right"><input type="checkbox" class="ml-2"></td>
            <td style="width: 20%;" class="text-right">
                <div class="container p-0 m-0">
                    <div class="row p-0 m-0">
                        <div class="col-sm p-0 m-0">
                            <div class="media">
                                    <img src="https://cdn.shopify.com/s/files/1/0036/0415/2432/files/2.svg?v=1570147471" class="ml-3 border border-dark" alt="ويلا سوق" id="medialogo">
                                <div class="media-body">
                                    <h4 class="mt-0">الإشعارات</h4>
                                    <a href="#" class="border-left border-dark pl-1"> <?php echo $lang['PluginDeactivateButton'] ?></a>
                                    <a href="#" class="border-left border-dark pl-1"> <?php echo $lang['PluginSettingsButton'] ?></a>
                                    <a href="#"> <?php echo $lang['PluginEditButton'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
            <td style="width: 60%;" class="text-right">وصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافة</td>
        </tr>
        <tr>
            <td style="width: 2%;" class="text-right"><input type="checkbox" class="ml-2"></td>
            <td style="width: 20%;" class="text-right">
                <div class="container p-0 m-0">
                    <div class="row p-0 m-0">
                        <div class="col-sm p-0 m-0">
                            <div class="media">
                                    <img src="https://cdn.shopify.com/s/files/1/0036/0415/2432/files/2.svg?v=1570147471" class="ml-3 border border-dark" alt="ويلا سوق" id="medialogo">
                                <div class="media-body">
                                    <h4 class="mt-0">الإشعارات</h4>
                                    <a href="#" class="border-left border-dark pl-1"> <?php echo $lang['PluginDeactivateButton'] ?></a>
                                    <a href="#" class="border-left border-dark pl-1"> <?php echo $lang['PluginSettingsButton'] ?></a>
                                    <a href="#"> <?php echo $lang['PluginEditButton'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
            <td style="width: 60%;" class="text-right">وصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافة</td>
        </tr>
        <tr>
            <td style="width: 2%;" class="text-right"><input type="checkbox" class="ml-2"></td>
            <td style="width: 20%;" class="text-right">
                <div class="container p-0 m-0">
                    <div class="row p-0 m-0">
                        <div class="col-sm p-0 m-0">
                            <div class="media">
                                    <img src="https://cdn.shopify.com/s/files/1/0036/0415/2432/files/2.svg?v=1570147471" class="ml-3 border border-dark" alt="ويلا سوق" id="medialogo">
                                <div class="media-body">
                                    <h4 class="mt-0">الإشعارات</h4>
                                    <a href="#" class="border-left border-dark pl-1"> <?php echo $lang['PluginDeactivateButton'] ?></a>
                                    <a href="#" class="border-left border-dark pl-1"> <?php echo $lang['PluginSettingsButton'] ?></a>
                                    <a href="#"> <?php echo $lang['PluginEditButton'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
            <td style="width: 60%;" class="text-right">وصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافةوصف الإضافة</td>
        </tr>
    </tbody>
</table>
<script>
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