<?php

	namespace App\Controllers\Login;
	use App\Controllers\BaseController;

	class LoginController extends BaseController{
		public function index(){
			//data send
			$data = $this->defaultData();
			$data['titulo'] = "Login | SimpleFrete";
			$data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/login/login.css").">";
			$data['jsPage'] = "<script src=".base_url("assets/js/login/login.vue.js")." defer></script>";
			$footer['contentFooter'] = "Simple Frete";		
			
			//loading views
			echo view('template/Head');
			echo view('Login', $data);
			echo view('template/Footer', $footer);
		}
		
		public function usuario(){
			if(session()->has('usuario')){
				echo "Usuario logado";
			}else{
				echo "Não existe usuário logado";
			}
			echo view('template/Head');
		}

		public function login(){

			

			session()->set([
				'usuario' => 'Jefferson',
				'email' => 'jcsjeffrey@gmail.com'
			]);
		}

		public function logout(){
			session()->destroy();
			return redirect()->to(site_url("/"));
		}
	}
?>