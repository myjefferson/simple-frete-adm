<?php

    namespace App\Controllers;

    class MotoristaCadastroController extends BaseController{

        public function index(){

            $data = $this->defaultData();
            $data['titulo'] = "Cadastro de Motoristas | Simple Frete";
            $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/motoristas/motoristas-cadastro.css").">";
            $data['renderPage'] = view("Dashboard/Motoristas/CadastroMotorista");

            echo view("template/Dashboard", $data);
        }

    }

?>