<?php

	namespace App\Controllers\Login;
	use App\Controllers\BaseController;

	class LoginController extends BaseController{
		public function index(){
			
			//data send
			$data = $this->defaultData();
			$data['titulo'] = "Login | SimpleFrete";
			$data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/login/login.css").">";
			$data['jsPage'] = "<script src=".base_url("assets/js/login-out/login.vue.js")." defer></script>";
			$footer['contentFooter'] = "Simple Frete";		
			
			//loading views
			echo view('template/Head');
			echo view('Login', $data);
			echo view('template/Footer', $footer);
			
			//verify session from user
			return $this->verifyIfLogged();
		}
	}
?>