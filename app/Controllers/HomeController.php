<?php

namespace App\Controllers;

class HomeController extends BaseController{
    
    public function index(){
        $data = $this->defaultData();
        $data['titulo'] = "Home | Simple Frete";
        $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/home/home.css").">"; 
        $data['renderPage'] = view("Dashboard/Home");
        $data['jsPage'] = "<script src=".base_url("assets/js/dashboard/index.home.vue.js")." defer></script>";
        echo view("template/Dashboard.php", $data);
        //verify session from user
		return $this->verifyIfNotLogged();
    }
    
}

?>