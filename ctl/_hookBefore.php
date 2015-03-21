<?php
date_default_timezone_set('UTC');

array_splice($ctx->elems->styles, 0, 0, array('bootstrap.min', 'bootstrap-theme.min'));
array_splice($ctx->elems->scripts, 0, 0, array('jquery.min', 'bootstrap.min'));
