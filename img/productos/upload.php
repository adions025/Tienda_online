<?php

$uploaddir = '/moixero-home/tdiw/tdiw-j6/public_html/img/productos/';
$uploadfile = $uploaddir . basename($_FILES['fileToUpload']['name']);

/*
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $_FILES["fileToUpload"]["name"])) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
*/

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Upload failed";
}
?>


<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>