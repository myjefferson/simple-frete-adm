<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('LoginAdmController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// get('directory/url', 'Folder\ControllerName::index')

$routes->get('/', 'LoginAdmController::index');
$routes->get('/dashboard', 'HomeController::index');

//---------------------------------------------------------------------

//Motoristas - Pages
$routes->get('/dashboard/motoristas', 							'Motoristas\MotoristasController::indexPage');
$routes->get('/dashboard/motoristas/cadastro', 					'Motoristas\MotoristasController::cadastroPage');
$routes->get('/dashboard/motoristas/detalhes-motorista/(:num)',	'Motoristas\MotoristasController::detalhesPage/$1');

//Motoristas - ActionsDB
$routes->get('/action/motoristas/all-motoristas', 						'Motoristas\ActionsMotoristasController::selectAllAction');
$routes->get('/action/motoristas/detalhes-motorista/(:num)',	'Motoristas\ActionsMotoristasController::selectOneAction/$1');
$routes->post('/action/motoristas/cadastrar', 					'Motoristas\ActionsMotoristasController::insertAction');
$routes->post('/action/motoristas/alterar/(:num)', 				'Motoristas\ActionsMotoristasController::updateAction/$1');
$routes->post('/action/motoristas/excluir/(:num)', 				'Motoristas\ActionsMotoristasController::deleteAction/$1');

//---------------------------------------------------------------------

//Veiculos - Pages
$routes->get('/dashboard/veiculos', 							'Veiculos\VeiculosController::indexPage');
$routes->get('/dashboard/veiculos/cadastro', 					'Veiculos\VeiculosController::cadastroPage');
$routes->get('/dashboard/veiculos/detalhes-veiculo/(:num)',	'Veiculos\VeiculosController::detalhesPage/$1');

//Veiculos - ActionsDB
$routes->get('/action/veiculos/all-veiculos', 					'Veiculos\ActionsVeiculosController::selectAllAction');
$routes->get('/action/veiculos/detalhes-veiculo/(:num)',		'Veiculos\ActionsVeiculosController::selectOneAction/$1');
$routes->post('/action/veiculos/cadastrar', 					'Veiculos\ActionsVeiculosController::insertVeiculo');


//--------------------------------------------------------------------

//Financeiro
$routes->get('/dashboard/financeiro', 'FinanceiroController::index');

//--------------------------------------------------------------------

//Configurações
$routes->get('/dashboard/config', 'ConfigController::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
