<?php

$dir = opendir('./datab');
$files = array();
while (true) {
    $f = readdir($dir);
    if ($f === false) {
        break;
    }
    if ($f[0] != '.') {
        $files[] = $f;
    }
}
closedir($dir);
$model->files = $files;

