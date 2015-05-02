<?php

if ($ctx->manage->isAdmin()) {
    $ctx->manage->logout();
}

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    return;
}

$username = $ctx->util->paramPost('username');
$password = $ctx->util->paramPost('password');

if ($ctx->manage->login($username, $password)) {
    $ctx->util->redirect('main');
}

