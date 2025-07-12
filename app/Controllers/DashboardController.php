<?php
namespace App\Controllers;

use App\Core\BaseController;

class DashboardController extends BaseController
{
    public function __construct()
    {
        parent::__construct();

        $this->redirectIfNotAuthenticated();
    }

    public function index()
    {
        require_once __DIR__ . '/../Views/admin/dashboard.php';
    }
}