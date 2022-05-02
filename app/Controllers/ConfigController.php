<?php

namespace App\Controllers;

class ConfigController extends BaseController{
    public function index(){
        $data = $this->defaultData();
        $data['titulo'] = "Configurações | Simple Frete";
        $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/config/config.css").">";
        $data['renderPage'] = view("Dashboard/Config");

        echo view("template/Dashboard", $data);
    }
}

?>