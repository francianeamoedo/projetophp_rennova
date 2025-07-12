<?php
namespace App\Controllers;

use App\Core\BaseController;

class AuthController extends BaseController
{
    public function login()
    {
        // Se já estiver logado, redireciona para o dashboard
        if ($this->isAuthenticated()) {
            redirect('/dashboard');
        }

        require_once __DIR__ . '/../Views/admin/login.php';
    }

    public function authenticate()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            redirect('/login');
        }

        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        if ($this->validateCredentials($username, $password)) {
            $_SESSION['user']          = $username;
            $_SESSION['last_activity'] = time();

            redirect('/dashboard');
        }

        redirect('/login?error=invalid_credentials');
    }

    protected function validateCredentials($username, $password)
    {
        // autenticacao simples para fins de demonstração
        return $username === 'admin' && $password === 'admin';
    }

    public function logout()
    {
        $_SESSION = [];
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        session_destroy();

        redirect('/login');
    }

}