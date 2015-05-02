<?php

if (!$ctx->manage->isAdmin()) {
    $ctx->util->redirect('main');
    return;
}

$fileName = $ctx->util->paramGet('name');

unlink("datab/$fileName");

$ctx->util->redirect('files');
