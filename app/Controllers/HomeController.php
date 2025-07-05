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
    public function produto($id)
    {
        // Aqui você pode carregar o produto com base no ID
        // Exemplo: buscar no banco de dados ou em um array de produtos
        // Para fins de exemplo, vamos apenas simular um produto
        require_once __DIR__ . '/../Views/creme_facial_com_acido_hialuronico.php';
    }
    public function carrinho()
    {
        require_once __DIR__ . '/../Views/carrinho.php';
    }
    public function checkout()
    {
        require_once __DIR__ . '/../Views/checkout.php';
    }
    public function checkoutProcessar()
    {
        // Lógica para processar o checkout
        // Exemplo: Redirecionar para a página de sucesso
        header('Location: /pagamento/sucesso');
    }
    public function sucesso()
    {
        require_once __DIR__ . '/../Views/sucesso.php';
    }
    public function erro()
    {
        require_once __DIR__ . '/../Views/erro.php';
    }

}