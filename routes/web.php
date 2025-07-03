<?php

use Pecee\SimpleRouter\SimpleRouter;
use App\Controllers\HomeController;

SimpleRouter::get('/', [HomeController::class, 'index']);
SimpleRouter::get('/home', [HomeController::class, 'index']);
SimpleRouter::get('/produtos', [HomeController::class, 'produtos']);