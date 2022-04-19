<?php

namespace App\Controllers;

class LoginAdmController extends BaseController{
	public function index(){
		//data send
		$head = array(
			'titulo' => "Login | SimpleFrete",
			'jsBootstrap' => "<link rel='stylesheet' href=".base_url("assets/css/bootstrap/5.1.3/bootstrap.min.css").">",
			'cssBootstrap' => "<script src=".base_url()."></script>",
			'cssPage' => "<link rel='stylesheet' href=".base_url("assets/css/login/login.css").">",
			'globalStyles' => "
								<link rel='stylesheet' href=".base_url("assets/css/globalStyles/buttons.css").">
							  "
		);
		
		$footer['contentFooter'] = "Simple Frete";

		//loading views
		echo view('template/Head', $head);
		echo view('LoginAdm');
		echo view('template/Footer', $footer);
	}
}
