<?php

namespace App\Controllers;

class DashboardController
{
    
    public function index()
    {

         session_start();
         if (!isset($_SESSION['user'])) {
             header('Location: login');
             exit;
        }

        // Renderiza a view do dashboard
        require_once __DIR__ . '/../Views/admin/dashboard.php';
    }

    public function categories()
    {
        // session_start();
        // if (!isset($_SESSION['user'])) {
        //     header('Location: login');
        //     exit;
        // }

        // Renderiza a view de categorias
        require_once __DIR__ . '/../Views/admin/categories.php';
    }   

    public function subcategories()
    {
        // session_start();
        // if (!isset($_SESSION['user'])) {
        //     header('Location: login');
        //     exit;
        // }

        // Renderiza a view de subcategorias
        require_once __DIR__ . '/../Views/admin/subcategories.php';
    }

    public function products()
    {
        // session_start();
        // if (!isset($_SESSION['user'])) {
        //     header('Location: login');
        //     exit;
        // }

        // Renderiza a view de produtos
        require_once __DIR__ . '/../Views/admin/products.php';
    }


        public function createCategory() {
    require_once __DIR__ . '/../Views/admin/create-category.php';
}


public function storeCategory() {
    // Exemplo simples de salvamento (ajuste conforme seu banco)
    $nome = $_POST['nome'] ?? '';
    $descricao = $_POST['descricao'] ?? '';
    $ativo = $_POST['ativo'] ?? 1;

    // Salvar no banco aqui...

    header('Location: /categories');
    exit;
}


public function createSubcategory()
{
    // Aqui você pode futuramente carregar as categorias do banco para um <select>
    require_once __DIR__ . '/../Views/admin/create-subcategory.php';
}

public function storeSubcategory()
{
    // Sanitização simples dos dados recebidos via POST
    $nome = trim($_POST['nome'] ?? '');
    $categoria = trim($_POST['categoria'] ?? '');
    $descricao = trim($_POST['descricao'] ?? '');
    $ativo = isset($_POST['ativo']) ? intval($_POST['ativo']) : 1;

    // Validação básica
    if ($nome === '' || $categoria === '') {
        // Redireciona com erro (exemplo com query string)
        header("Location: /create-subcategory?erro=1");
        exit;
    }

    // TODO: salvar no banco de dados

    // Redireciona para a lista de subcategorias após salvar
    header("Location: /subcategories");
    exit;
}





    public function createProduct()
    {
        // session_start();
        // if (!isset($_SESSION['user'])) {
        //     header('Location: login');
        //     exit;
        // }

        // Renderiza a view de criação de produto
        require_once __DIR__ . '/../Views/admin/create-product.php';
    }






}


    
    

// End of DashboardController.php