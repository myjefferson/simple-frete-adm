<?php

namespace App\Controllers;

class HomeController extends BaseController{
    
    public function index(){
        //load template Dashboard with loadPage corresponding
        $data = $this->defaultData();
        $data['titulo'] = "Home | Simple Frete";
        $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/home/home.css").">";
        $data['loadPage'] = view("Dashboard/Home");

        echo view("template/Dashboard.php", $data);
    }
}

?>