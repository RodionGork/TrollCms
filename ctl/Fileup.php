<?php

$fileInfo = $_FILES['upload'];
$fileName = $fileInfo['name'];
$tempFile = $fileInfo['tmp_name'];

move_uploaded_file($tempFile, "datab/$fileName");

$ctx->util->redirect('files');
