<?php

use Pecee\SimpleRouter\SimpleRouter;

require_once 'vendor/autoload.php';

// Define o namespace padrão dos controladores
SimpleRouter::setDefaultNamespace('system\\controllers');

// Define o caminho base do projeto
SimpleRouter::setBasePath('/cursophp_rennova_site');

// Rotas principais
SimpleRouter::get('/', 'SiteController@home');
SimpleRouter::get('/produtos', 'SiteController@produtos');
SimpleRouter::get('/produto/{id}', 'SiteController@produto');
SimpleRouter::get('/carrinho', 'SiteController@carrinho');
SimpleRouter::get('/checkout', 'SiteController@checkout');
SimpleRouter::post('/checkout/processar', 'SiteController@processarPagamento');
SimpleRouter::get('/pagamento/sucesso', 'SiteController@sucesso');
SimpleRouter::get('/pagamento/erro', 'SiteController@erro');

// 🆕 Rota para a página de login
SimpleRouter::get('/login', 'AuthController@login');

// Inicia o roteador
SimpleRouter::start();

