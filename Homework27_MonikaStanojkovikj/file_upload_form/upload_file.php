<?php
$targetDir="file_uploads/";

if(isset($_FILES['uploadFiles']) && !empty($_FILES['uploadFiles']['name'])){
    // move_uploaded_file($_FILES['uploadFiles']["tmp_name"], $targetDir.$_FILES['uploadFiles']['name']);
    // $filePath = dirname(__FILE__)."/$targetDir".$_FILES['uploadFiles']['name'];

    $tmpPath = $_FILES['uploadFiles']['tmp_name'];
    $tmpName = $_FILES['uploadFiles']['name'];

    $filePath = pathinfo($tmpPath);
    $fileInfo = pathinfo($tmpName);

    $ext = $fileInfo['extension'];
    $filename = $fileInfo['filename'];

    $hashFilename = md5($filename);
    // var_dump($hashFilename);

    $newPath = move_uploaded_file($tmpPath, dirname(__FILE__).DIRECTORY_SEPARATOR.$targetDir.$hashFilename.".".$ext);
    // var_dump($newPath);
    echo "<h2> Uploaded file successully <h2>";
}

