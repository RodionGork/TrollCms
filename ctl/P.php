<?php

$pageName = $ctx->util->paramGet('param');

$model->text = $ctx->render->loadDataFile($pageName);

if ($model->text === false) {
    $ctx->util->redirect('error404');
    return;
}

