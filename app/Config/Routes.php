<?php

/*use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 
$routes->get('/', 'Home::index');
$routes->get('/', 'Pages::index') ;
*/
use CodeIgniter\Config\BaseConfig;

$routes->get('/', 'Home::index');
$routes->get('/Teste', 'Teste::index');
$routes->get('voltar', 'Infor::Voltar');
$routes->post('infor', 'Infor::PegarInfo');
$routes->get('mostrar', 'Infor::MostrarInfo');
$routes->post('editar', 'Infor::EditarInfo');
$routes->get('excluir/ExcluirInfo', 'Infor::ExcluirInfo');
$routes->get('editar', 'Infor::EditarInfo');
$routes->get('editarInfo', 'Infor::Info');
$routes->post('editarInfo/editar', 'Infor::EditarInfo');
$routes->get('mostrar', 'Infor::MostrarInfo');

