<?php

$data = file_get_contents('data/_styles.txt');

$ctx->util->plainOutput($data, 'text/css');
