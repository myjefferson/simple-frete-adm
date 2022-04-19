<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class MotoristasController extends BaseController{
    
    public function index(){
        $data = $this->defaultData();
        $data['titulo'] = "Motoristas | Simple Frete";
        $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/motoristas/motoristas.css").">";
        $data['loadPage'] = view("Dashboard/Motoristas");

        //load template Dashboard with loadPage corresponding
        echo view("template/Dashboard", $data);
    }
}

?>