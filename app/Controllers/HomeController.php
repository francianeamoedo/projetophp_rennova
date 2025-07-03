<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        require_once __DIR__ . '/../Views/home.php';
    }

    public function produtos()
    {
        require_once __DIR__ . '/../Views/produtos.php';
    }
}