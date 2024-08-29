<?php

// Create new stance of ourRouteCollection class
//PT-BR Cria nova postura da classe ourRouteCollection
# $routes = Services::routes();

// Load the system's routing the first, so tha the app and ENVIROUMENT
// can overwride as needed
//PT-BR Carrega primeiro o roteamento do sistema, para que o app e o AMBIENTE
//PT-BRpode sobrescrever conforme necessário

if (is_file(SYSTEMPATH. 'Config/Routes.php')) {
    require SYSTEMPATH. 'Config/Routes.php';
} 

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;
/**
 * @var RouteCollection $routes
 * */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
# 
# $routes->setAutoRoute(true);

$routes->match(['get','post'], 'noticias/inserir' ,'Noticias::inserir');
$routes->match(['get','post'], 'noticias/gravar' ,'Noticias::gravar');
$routes->match(['get','post'], 'noticias/editar/(:num)' ,'Noticias::editar/$1');
$routes->match(['get','post'], 'noticias/excluir/(:num)' ,'Noticias::excluir/$1');
//$routes->get('login', 'Usuarios::index'); // Corrigir: Deve ser habilitada se em produção
$routes->get('login', 'Usuarios::index'); // Inpotante
$routes->get('usuarios/criar', 'Usuarios::criar');
$routes->post('usuarios/gravar', 'Usuarios::gravar');

$routes->get('usuarios/logout', 'Usuarios::logout'); //Impotante
$routes->post('/usuarios/login', 'Usuarios::login'); // Corrigir detalhe na url
$routes->get('noticias', 'Noticias::index');
$routes->get('noticias/(:segment)','Noticias::item/$1');
$routes->get('limparCache', 'Pages::limparCache');
$routes->get('adicionarCache', 'Pages::adicionarCache');
$routes->get('subtrairCache', 'Pages::subtrairCache');

$routes->get('/', 'Pages::mostrar');
$routes->get('(:any)', 'Pages::mostrar/$1');



#$routes->get('pages', [Pages::class, 'index']);
#$routes->get('pages', [Pages::class, 'mostrar']);
#$routes->get('(:segment)', [Pages::class, 'mostrar']);
