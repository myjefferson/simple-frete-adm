<?php

    namespace App\Controllers;

    class MotoristasController extends BaseController{
        
        public function index(){
            //templates
            $header['viewHeaderMotorista'] = view("template/HeaderMotoristas");

            $data = $this->defaultData();
            $data['titulo'] = "Motoristas | Simple Frete";
            $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/motoristas/motoristas.css").">";
            $data['renderPage'] = view("Dashboard/Motoristas/Motoristas", $header);
            
            //default template for show page
            echo view("template/Dashboard", $data);
        }
    }

?>