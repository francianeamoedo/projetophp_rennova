<?php
namespace App\Core;

use PDO;
use PDOException;

class Database
{
    private static ?PDO $instance = null;

    private function __construct()
    {}
    private function __clone()
    {}

    public static function getInstance(): PDO
    {
        if (self::$instance === null) {
            $host     = 'localhost';
            $dbname   = 'cursophp_rennova_site';
            $user     = 'root';
            $password = '';
            $charset  = 'utf8mb4';

            $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

            try {
                self::$instance = new PDO($dsn, $user, $password, [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES   => false,
                ]);
            } catch (PDOException $e) {
                die('Erro na conexão com o banco de dados: ' . $e->getMessage());
            }
        }

        return self::$instance;
    }
}