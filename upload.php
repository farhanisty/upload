<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
    echo json_encode(["status" => "berhasil"]);
}

?>