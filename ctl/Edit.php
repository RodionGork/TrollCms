<?php

$name = $ctx->util->paramGet('param');

if (empty($name)) {
    $dir = opendir('./data');
    $files = array();
    while (true) {
        $f = readdir($dir);
        if ($f === false) {
            break;
        }
        if ($f[0] != '.') {
            if ($f[0] == '_') {
                $f[0] = '-';
            }
            $files[] = substr($f, 0, strpos($f, '.'));
        }
    }
    closedir($dir);
    $model->files = $files;
    $ctx->util->changePage('editlist');
} else {
    $model->text = $ctx->render->loadDataFilePlain($name);
    $model->name = $name;
    $ctx->util->changePage('editform');
}

