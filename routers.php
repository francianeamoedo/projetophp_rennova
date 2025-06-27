<?php

use Pecee\SimpleRouter\SimpleRouter;

require_once 'vendor/autoload.php';

// Define o namespace padrão dos controladores
SimpleRouter::setDefaultNamespace('system\\controllers');

// Define o caminho base do projeto
SimpleRouter::setBasePath('/cursophp_rennova_site');

// Rotas principais do fluxo do usuário
SimpleRouter::get('/', 'SiteController@home');                       // Página inicial com visão rápida do produto
SimpleRouter::get('/produtos', 'SiteController@produtos');          // Categorias de produtos
SimpleRouter::get('/produto/{id}', 'SiteController@produto');       // Página do produto
SimpleRouter::get('/carrinho', 'SiteController@carrinho');          // Carrinho de compras
SimpleRouter::get('/checkout', 'SiteController@checkout');          // Página de checkout
SimpleRouter::post('/checkout/processar', 'SiteController@processarPagamento'); // Processa pagamento
SimpleRouter::get('/pagamento/sucesso', 'SiteController@sucesso');  // Página de sucesso
SimpleRouter::get('/pagamento/erro', 'SiteController@erro');        // Página de erro

// Inicia o roteador
SimpleRouter::start();
