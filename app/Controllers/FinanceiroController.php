<?php

namespace App\Controllers;

class FinanceiroController extends BaseController{
    public function index(){
        $data = $this->defaultData();
        $data['titulo'] = "Financeiro | Simple Frete";
        $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/financeiro/financeiro.css").">";
        $data['loadPage'] = view("Dashboard/Financeiro");

        echo view("template/Dashboard", $data);
    }
}

?>