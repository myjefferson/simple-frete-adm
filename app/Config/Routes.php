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
$routes->setDefaultController('LoginController');
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

//Login
$routes->get('/', 			'Login\LoginController::index');
$routes->get('/logout', 	'Login\LoginController::logout');

//Login - ActionDB
$routes->post('/action/login', 	'Login\ActionLoginController::login');
$routes->get('/action/logout', 	'Login\ActionLoginController::logout');

//Home
$routes->get('/dashboard', 'HomeController::index');

//---------------------------------------------------------------------

//Motorista - Pages
$routes->get('/dashboard/motorista', 							'Motorista\MotoristaController::indexPage');
$routes->get('/dashboard/motorista/cadastro', 					'Motorista\MotoristaController::cadastroPage');
$routes->get('/dashboard/motorista/detalhe-motorista/(:num)',	'Motorista\MotoristaController::detalhePage/$1');

//Motorista - ActionDB
$routes->get('/action/motorista/all-motoristas', 				'Motorista\ActionMotoristaController::selectAllAction');
$routes->get('/action/motorista/detalhe-motorista/(:num)',		'Motorista\ActionMotoristaController::selectOneAction/$1');
$routes->post('/action/motorista/cadastrar', 					'Motorista\ActionMotoristaController::insertAction');
$routes->post('/action/motorista/alterar/(:num)', 				'Motorista\ActionMotoristaController::updateAction/$1');
$routes->post('/action/motorista/excluir/(:num)', 				'Motorista\ActionMotoristaController::deleteAction/$1');

//---------------------------------------------------------------------

//Veiculo - Pages
$routes->get('/dashboard/veiculo', 								'Veiculo\VeiculoController::indexPage');
$routes->get('/dashboard/veiculo/cadastro', 					'Veiculo\VeiculoController::cadastroPage');
$routes->get('/dashboard/veiculo/detalhe-veiculo/(:num)',		'Veiculo\VeiculoController::detalhePage/$1');

//Veiculo - ActionDB
$routes->get('/action/veiculo/all-veiculos', 					'Veiculo\ActionVeiculoController::selectAllAction');
$routes->get('/action/veiculo/detalhe-veiculo/(:num)',			'Veiculo\ActionVeiculoController::selectOneAction/$1');
$routes->post('/action/veiculo/cadastrar', 						'Veiculo\ActionVeiculoController::insertVeiculo');
$routes->post('/action/veiculo/alterar/(:num)', 				'Veiculo\ActionVeiculoController::updateAction/$1');
$routes->post('/action/veiculo/excluir/(:num)', 				'Veiculo\ActionVeiculoController::deleteAction/$1');

//--------------------------------------------------------------------

//Frete - Pages - Solicitacao
$routes->get('/dashboard/frete/solicitacao',			'Frete\FreteController::solicitacaoPage');
$routes->get('/dashboard/frete/aguardo-pagamento',		'Frete\FreteController::pagamentoPage');
$routes->get('/dashboard/frete/contratado',				'Frete\FreteController::contratadoPage');
$routes->get('/dashboard/frete/em-andamento',			'Frete\FreteController::andamentoPage');
$routes->get('/dashboard/frete/finalizado',				'Frete\FreteController::finalizadoPage');
$routes->get('/dashboard/frete/cadastro', 				'Frete\FreteController::cadastroPage');

//Frete - ActionDB
$routes->post('/action/frete/confirmFrete', 	'Frete\ActionFreteController::confirmFreteAction');
$routes->get('/action/frete/all-fretes', 		'Frete\ActionFreteController::selectAllAction');
$routes->get('/action/frete/tipo-cargas', 		'Frete\ActionFreteController::selectAllCargasAction');



//pendentes - vvvvvv
$routes->get('/action/frete/detalhe-frete/(:num)', 'Frete\ActionFreteController::selectOneAction/$1');
$routes->post('/action/frete/cadastrar', 'Frete\ActionFreteController::insertVeiculo');

//--------------------------------------------------------------------

//Financeiro - Pages
$routes->get('/dashboard/financeiro', 'FinanceiroController::index');

//--------------------------------------------------------------------

//Configurações - Pages
$routes->get('/dashboard/config', 'Config\ConfigController::index');

//Configurações - ActionDB
$routes->post('/action/config/update', 	'Config\ActionConfigController::updateAction');


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
