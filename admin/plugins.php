<?php include('../includes/php/header.php'); ?>
<?php include('../includes/php/nav.php'); ?>
<?php include_once '../includes/source/function.php';?>
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
<div class="container m-0 p-0">
    <div class="row m-0 p-0">
        <div class="col-sm m-0 p-0">
            <h3 class="inline"><?php echo $lang['PluginPageTitle'] ?></h3>  <button type="button" class="btn btn-secondary inline btn-sm"><?php echo $lang['PluginUpload'] ?></button>
            <p class="block mt-2"><?php echo $lang['PluginPageDescription'] ?></p>
        </div>
    </div>
</div>
<table class="table table-sm customers-list mt-3 text-right">
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
<?php include('../includes/php/footer.php'); ?>