<?php

if (!$ctx->manage->isAdmin()) {
    $ctx->util->redirect('main');
    return;
}

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
    $ctx->elems->scripts[] = '_cm/codemirror';
    $ctx->elems->scripts[] = '_cm/matchbrackets';
    if ($name[0] == '-') {
        $model->mode = 'plain';
    } else {
        $ctx->elems->scripts[] = '_cm/markdown';
        $ctx->elems->scripts[] = '_cm/xml';
        $model->mode = 'md';
    }
    $ctx->elems->styles[] = 'codemirror';
    $ctx->util->changePage('editform');
}

