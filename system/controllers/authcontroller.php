<?php
// system/controllers/DashboardController.php

namespace Franc\Franc\system\controllers;

class DashboardController
{
    public function index(): void
    {
        include __DIR__ . '/../../views/dashboard.php';
    }
}

