<?php include('../includes/php/pages-header.php'); ?>
<?php include('../includes/php/pages-nav.php'); ?>
<hr>
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
      <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6 id="upload-a-picture">تحميل صورة مختلفة ...</h6>
        <input type="file" class="text-center center-block file-upload">
      </div></hr><br>          
        </div><!--/col-3-->
    	<div class="col-sm-9">              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <h4>إدارة وتعديل الملف الشخصي</h4>
                <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>الاسم الاول</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="<?php echo $lang['First Name Placeholder']; ?>" title="<?php echo $lang['First Name Title']; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>الإسم الأخير</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="<?php echo $lang['Last Name Placeholder']; ?>" title="<?php echo $lang['Last Name Title']; ?>">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>رقم الجوال</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="<?php echo $lang['Phone Placeholder']; ?>" title="<?php echo $lang['Phone Title']; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>البريد الإلكتروني</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="<?php echo $lang['Email Form Title']; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>كلمه المرور</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="<?php echo $lang['Password Placeholder']; ?>" title="<?php echo $lang['Password Form Title']; ?>" autocomplete="new-password">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>تأكيد كلمة المرور</h4></label>
                              <input type="password" class="form-control" name="password2" id="password2" placeholder="<?php echo $lang['Confirm Password Placeholder']; ?>" title="<?php echo $lang['Confirm Password Form Title']; ?>" autocomplete="new-password">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> حفظ</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> إعادة تعيين</button>
                            </div>
                      </div>
              	</form>
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
</div>
</div>
<br>
<?php include('../includes/php/pages-footer.php'); ?>
<script>
        // Wait for jQuery to be loaded
        if (typeof jQuery !== 'undefined') {
            $(document).ready(function() {
                var readURL = function(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('.avatar').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                }

                $(".file-upload").on('change', function(){
                    readURL(this);
                });
            });
        } else {
            console.log('jQuery is not loaded');
        }
</script>