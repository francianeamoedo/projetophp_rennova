<?php
namespace App\Controllers;

use App\Models\Product;

class HomeController
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = new Product();
    }

    public function index()
    {
        $productsWithPromo = $this->productModel->all_by_promotion(8);
        require_once __DIR__ . '/../Views/home.php';
    }

    public function produtos()
    {
        $productsActives = $this->productModel->all_actives();
        require_once __DIR__ . '/../Views/produtos.php';
    }

    public function produto($id)
    {
        if ($id) {
            $product = $this->productModel->find($id);
        }

        require_once __DIR__ . '/../Views/creme_facial_com_acido_hialuronico.php';
    }
    public function carrinho()
    {
        require_once __DIR__ . '/../Views/carrinho.php';
    }

    public function carrinhoPost()
    {
        $product_id       = $_POST['product_id'] ?? null;
        $quantity_product = isset($product_id) ? $_POST['quantity_product_' . $product_id] : 1;
        $product_selected = null;

        if ($product_id) {
            $product_selected = $this->productModel->find($product_id);
        }

        require_once __DIR__ . '/../Views/carrinho.php';
    }

    public function checkout()
    {
        $product_id       = $_POST['product_id'] ?? null;
        $quantity_product = isset($product_id) ? $_POST['quantity_product_' . $product_id] : 1;
        $product_selected = null;

        if ($product_id) {
            $product_selected = $this->productModel->find($product_id);
        }

        require_once __DIR__ . '/../Views/checkout.php';
    }

    public function checkoutProcessar()
    {
        // Lógica para processar o checkout
        $_SESSION['checkout_data'] = [
            'product_id' => $_POST['product_id'] ?? null,
            'quantity'   => $_POST['quantity'] ?? 1,
        ];
        $_SESSION['checkout_data']['total_price'] = $_POST['total_price'] ?? 0;
        redirect('/pagamento/sucesso');
    }

    public function sucesso()
    {
        $product_id  = $_SESSION['checkout_data']['product_id'] ?? null;
        $quantity    = $_SESSION['checkout_data']['quantity'] ?? 1;
        $total_price = $_SESSION['checkout_data']['total_price'] ?? 0;

        unset($_SESSION['checkout_data']);

        if ($product_id) {
            $product_selected = $this->productModel->find($product_id);
        }

        require_once __DIR__ . '/../Views/sucesso.php';
    }

    public function erro()
    {
        require_once __DIR__ . '/../Views/erro.php';
    }

}
