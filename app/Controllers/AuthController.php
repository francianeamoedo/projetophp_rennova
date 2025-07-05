<?php
namespace App\Controllers;

class AuthController
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

    protected function isAuthenticated()
    {
        return isset($_SESSION['user']);
    }

    protected function redirectIfNotAuthenticated()
    {
        if (!$this->isAuthenticated()) {
            header('Location: /login');
            exit;
        }
    }

    public function login()
    {
        // Se já estiver logado, redireciona para o dashboard
        if ($this->isAuthenticated()) {
            header('Location: /dashboard');
            exit;
        }
        
        require_once __DIR__ . '/../Views/admin/login.php';
    }

    public function authenticate()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: /login');
            exit;
        }



        // Validação básica - substitua por consulta ao banco de dados
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        if ($this->validateCredentials($username, $password)) {
            $_SESSION['user'] = $username;
            $_SESSION['last_activity'] = time();
            header('Location: /dashboard');
            exit;
        }

        header('Location: /login?error=invalid_credentials');
    }

    protected function validateCredentials($username, $password)
    {
        // Exemplo básico - substitua por consulta ao banco de dados
        // e verificação segura de senha (password_verify)
        $validUsers = [
            'admin' => password_hash('password', PASSWORD_BCRYPT)
        ];

        return isset($validUsers[$username]) && 
               password_verify($password, $validUsers[$username]);
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
        header('Location: /login');
        exit;
    }

    public function dashboard()
    {
        $this->redirectIfNotAuthenticated();
        require_once __DIR__ . '/../Views/admin/dashboard.php';
    }

}