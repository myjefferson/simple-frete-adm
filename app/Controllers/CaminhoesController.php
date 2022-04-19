<?php

namespace App\Controllers;

class CaminhoesController extends BaseController{
    public function index(){
        $data = $this->defaultData();
        $data['titulo'] = "Caminhões | Simple Frete";
        $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/caminhoes/caminhoes.css").">";
        $data['loadPage'] = view("Dashboard/Caminhoes");

        //load template Dashboard with loadPage corresponding
        echo view("template/Dashboard", $data);
    }
}

?>