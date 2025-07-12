<?php

use App\Controllers\AuthController;
use App\Controllers\CategoryController;
use App\Controllers\DashboardController;
use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\SubcategoryController;
use Pecee\SimpleRouter\SimpleRouter;

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
SimpleRouter::post('/logout', [AuthController::class, 'logout']);

SimpleRouter::get('/dashboard', [DashboardController::class, 'index']);

// Rotas para categorias, subcategorias e produtos
SimpleRouter::get('/categories', [CategoryController::class, 'index']);
SimpleRouter::get('/categories/create', [CategoryController::class, 'create']);
SimpleRouter::get('/categories/update/{id}', [CategoryController::class, 'update']);
SimpleRouter::post('/categories/store', [CategoryController::class, 'store']);
SimpleRouter::delete('/categories/delete/{id}', [CategoryController::class, 'delete']);

SimpleRouter::get('/subcategories', [SubcategoryController::class, 'index']);
SimpleRouter::get('/subcategories/create', [SubcategoryController::class, 'create']);
SimpleRouter::get('/subcategories/update/{id}', [SubcategoryController::class, 'update']);
SimpleRouter::post('/subcategories/store', [SubcategoryController::class, 'store']);
SimpleRouter::delete('/subcategories/delete/{id}', [SubcategoryController::class, 'delete']);

SimpleRouter::get('/products', [ProductController::class, 'index']);
SimpleRouter::get('/products/create', [ProductController::class, 'create']);
SimpleRouter::get('/products/update/{id}', [ProductController::class, 'update']);
SimpleRouter::post('/products/store', [ProductController::class, 'store']);
SimpleRouter::delete('/products/delete/{id}', [ProductController::class, 'delete']);