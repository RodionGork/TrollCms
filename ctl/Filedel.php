<?php

$fileName = $ctx->util->paramGet('name');

unlink("datab/$fileName");

$ctx->util->redirect('files');
