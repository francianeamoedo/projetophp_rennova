<?php
namespace App\Core;

class BaseController
{
    public function __construct()
    {
        $this->startSession();
    }

    protected function startSession()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    protected function isAuthenticated(): bool
    {
        return isset($_SESSION['user']);
    }

    protected function redirectIfNotAuthenticated(): void
    {
        if (! $this->isAuthenticated()) {
            redirect('/login');
        }
    }
}