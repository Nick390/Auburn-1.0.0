<?php include('../includes/php/header.php'); ?>
<?php include('../includes/php/nav.php'); ?>
<?php $mysqli = $conn; ?>
<div class="container m-0 p-0">
        <div class="row m-0 p-0">
        <div class="col-sm m-0 p-0">
        <h3><?php echo $lang['Page Title']?></h3>
		<p><?php echo $lang['Page Info']?></p>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="userfile[]" value="" multiple="">
            <button type="submit" name="submit" class="btn btn-primary"><?php echo $lang['UploadButton'] ?></button>
        </form>
    </div>
        </div>
        <div class="row m-0 p-0 mt-3">
        <div class="col-sm m-0 p-0">
<?php
    $phpFileUploadErrors = array(
    0 => $lang['There is no error, the file uploaded with success'],
    1 => $lang['The uploaded file exceeds the upload_max_filesize directive in php.ini'],
    2 => $lang['The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the html form'],
    3 => $lang['The uploaded file was only partially uploaded'],
    4 => $lang['No file was uploaded'],
    6 => $lang['Missing a temporary folder'],
    7 => $lang['Failed to  write file to disk'],
    8 => $lang['A PHP extension stopped the file upload'],
    );
    if(isset($_FILES['userfile'])){
        $file_array = reArrayFiles($_FILES['userfile']);
        //pre_r($file_array);
        for ($i=0; $i<count($file_array); $i++) { 
            if($file_array[$i]['error']){
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?php echo $file_array[$i]['name'].' - '.$phpFileUploadErrors[$file_array[$i]['error']]?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
<?php
            } else {
                //Extensions that you allowed
                $extensions = array('jpg','png','gif','jpeg','svg','webp','exe','pdf','doc','csv','xlsx','mp3','mp4','rar','zip','ico');

                $file_ext = explode('.',$file_array[$i]['name']);
                //The name fo the file
                $name = $file_ext[0];
                $file_ext = end($file_ext);
                
                if(!in_array($file_ext, $extensions)){
    ?><div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?php echo "{$file_array[$i]['name']} - {$lang['Invalid file extension!']}"?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
<?php
                } else {
                    $img_dir = "files/".$file_array[$i]['name'];
                    move_uploaded_file($file_array[$i]['tmp_name'], $img_dir);
                    
                    $sql ="INSERT IGNORE INTO `uploadmultiplefiles` (`id`, `filename`, `imgdir`, `UploadTimestamp`) VALUES (NULL, '$name', '$img_dir', CURRENT_TIMESTAMP);";
                    $mysqli->query($sql) or die($mysqli->error);

    ?><div class="alert alert-success alert-dismissible fade show" role="alert">
    <?php echo $file_array[$i]['name'].' - '.$phpFileUploadErrors[$file_array[$i]['error']]; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
<?php
                }
            }
        }
    }
    //convers $FILES array to cleaner array when uploading multiple files
    function reArrayFiles( $file_post) {

        $file_ary = array();
        $file_count = count($file_post['name']);
        $file_keys = array_keys($file_post);

        for($i=0; $i<$file_count; $i++){
            foreach($file_keys as $key){
                $file_ary[$i] [$key] = $file_post[$key][$i];
            }
        }
        
        return $file_ary;
    }
    //Same as print_r() surrounded with <pre></pre> HTML tags for better array readability
    function pre_r($array){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
?>

</div>
</div>
</div>
<?php include('../includes/php/footer.php'); ?>