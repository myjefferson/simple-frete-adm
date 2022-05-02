<?php

namespace App\Controllers;

class HomeController extends BaseController{
    
    public function index(){
        $data = $this->defaultData();
        $data['titulo'] = "Home | Simple Frete";
        $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/home/home.css").">";
        $data['renderPage'] = view("Dashboard/Home");

        echo view("template/Dashboard.php", $data);
    }
}

?>