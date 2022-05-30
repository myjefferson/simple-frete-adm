<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;


/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */

class BaseController extends Controller
{
	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = [];
	

	/**
	 * Constructor.
	 * 
	 * @param RequestInterface  $request
	 * @param ResponseInterface $response
	 * @param LoggerInterface   $logger
	 */
	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.: $this->session = \Config\Services::session();
	}

	//Default Data
	public function defaultData(){

		$data['jsjQuery'] = "<script src=".base_url("assets/js/jquery/3.6.0/jquery.slim.min.js")."></script>";
		$data['jsVue'] = "<script src=".base_url("assets/js/vue/vue@2.6.14.js")."></script>";
		$data['jsAxios'] = "<script src=".base_url("assets/js/axios/axios.js")."></script>";
		$data['jsBootstrap'] = "
			<script src=".base_url("assets/js/bootstrap/5.1.3/popper.min.js")."></script>
			<script src=".base_url("assets/js/bootstrap/5.1.3/bootstrap.min.js")."></script>
		";
		$data['jsList'] = "<script src=".base_url("assets/js/listjs/2.3.1/list.min.js")."></script>";
		$data['cssBootstrap'] = "<link rel='stylesheet' href=".base_url("assets/css/bootstrap/5.1.3/bootstrap.min.css").">";
		$data['iconify'] = "<script src=".base_url("https://cdnjs.cloudflare.com/ajax/libs/iconify/2.0.0/iconify.min.js")."></script>";
		$data['dashboardStyle'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/dashboard.css").">";
		$data['globalStyles'] = "<link rel='stylesheet' href=".base_url("assets/css/globalStyles/buttons.css").">
								<link rel='stylesheet' href=".base_url("assets/css/globalStyles/root.css").">";
		
		return $data;
	}
}
