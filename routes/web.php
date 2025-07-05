<?php

use Pecee\SimpleRouter\SimpleRouter;

use App\Controllers\HomeController;
use App\Controllers\AuthController;
use App\Controllers\DashboardController;

SimpleRouter::get('/', [HomeController::class, 'index']);
SimpleRouter::get('/home', [HomeController::class, 'index']);

// Rotas para produtos e carrinho
SimpleRouter::get('/produtos', [HomeController::class, 'produtos']);
SimpleRouter::get('/produto/{id}', [HomeController::class, 'produto'])
    ->where(['id' => '[0-9]+']);
SimpleRouter::get('/carrinho', [HomeController::class, 'carrinho']);
SimpleRouter::get('/checkout', [HomeController::class, 'checkout']);
SimpleRouter::post('/checkout/processar', [HomeController::class, 'checkoutProcessar']);
SimpleRouter::get('/pagamento/sucesso', [HomeController::class, 'sucesso']);
SimpleRouter::get('/pagamento/erro', [HomeController::class, 'erro']);

// Rota para login e dashboard
SimpleRouter::get('/login', [AuthController::class, 'login']);
SimpleRouter::post('/login', [AuthController::class, 'authenticate']);
SimpleRouter::get('/logout', [AuthController::class, 'logout']);

SimpleRouter::get('/dashboard', [DashboardController::class, 'index']);


// Rotas para categorias, subcategorias e produtos
SimpleRouter::get('/categories', [DashboardController::class, 'categories']);   
SimpleRouter::get('/subcategories', [DashboardController::class, 'subcategories']);
SimpleRouter::get('/products', [DashboardController::class, 'products']);

// Formulário de cadastro e edição de produto
SimpleRouter::get('/create-product', [DashboardController::class, 'createProduct']);
SimpleRouter::post('/salvar-produtos', [DashboardController::class, 'storeProduct']);

SimpleRouter::get('/create-category', [DashboardController::class, 'createCategory']);
SimpleRouter::post('/salvar-categoria', [DashboardController::class, 'storeCategory']);

SimpleRouter::get('/create-subcategory', [DashboardController::class, 'createSubcategory']);
SimpleRouter::post('/create-subcategory', [DashboardController::class, 'storeSubcategory']);   

















