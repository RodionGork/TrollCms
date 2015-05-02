<?php

$pageName = $ctx->util->paramGet('param');
$isIframe = !empty($ctx->util->paramGet('iframe'));

$model->text = $ctx->render->loadDataFile($pageName);

if ($model->text === false) {
    $ctx->util->redirect('error404');
    return;
}

if ($isIframe) {
    $ctx->elems->layout = 'empty';
}
