<?php

namespace App\Controllers;

class VeiculosController extends BaseController{
    public function index(){
        $data = $this->defaultData();
        $data['titulo'] = "Veiculos | Simple Frete";
        $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/veiculos/veiculos.css").">";
        $data['renderPage'] = view("Dashboard/Veiculos");

        echo view("template/Dashboard", $data);
    }
}

?>