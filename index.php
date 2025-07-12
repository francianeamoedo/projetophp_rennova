<?php

require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/app/helpers/utils.php';

use Pecee\SimpleRouter\SimpleRouter;

$_SERVER['REQUEST_URI'] = str_replace('/projetophp_rennova', '', $_SERVER['REQUEST_URI']);

SimpleRouter::setDefaultNamespace('App\Controllers');

require_once __DIR__ . '/routes/web.php';

SimpleRouter::start();