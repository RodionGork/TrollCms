<?php

$pwd = $ctx->util->paramGet('param');

$ctx->util->plainOutput($ctx->manage->hashPassword($pwd));

