<?php

require_once __DIR__ . '/vendor/autoload.php';

use Pecee\SimpleRouter\SimpleRouter;

// Define o namespace padrão dos controladores
SimpleRouter::setDefaultNamespace('system\\controllers');

// Define o caminho base do projeto (ajuste conforme sua pasta no navegador)
SimpleRouter::setBasePath('/projetophp_rennova'); // ou /cursophp_rennova_site se for o nome certo

// Rotas principais
SimpleRouter::get('/', 'SiteController@home');
SimpleRouter::get('/produtos', 'SiteController@produtos');
SimpleRouter::get('/produto/{id}', 'SiteController@produto');
SimpleRouter::get('/carrinho', 'SiteController@carrinho');
SimpleRouter::get('/checkout', 'SiteController@checkout');
SimpleRouter::post('/checkout/processar', 'SiteController@processarPagamento');
SimpleRouter::get('/pagamento/sucesso', 'SiteController@sucesso');
SimpleRouter::get('/pagamento/erro', 'SiteController@erro');

// Rota para login e dashboard
SimpleRouter::get('/login', 'AuthController@login');
SimpleRouter::get('/dashboard', 'DashboardController@index');

// Inicia o roteador
SimpleRouter::start();


