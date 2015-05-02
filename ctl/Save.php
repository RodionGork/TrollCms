<?php

if (!$ctx->manage->isAdmin()) {
    $ctx->util->redirect('main');
    return;
}

$name = $ctx->util->paramPost('name');
$text = $ctx->util->paramPost('text');

$ctx->render->saveDataFile($name, $text);

$ctx->util->redirect('edit');

