<?php

    namespace App\Controllers\Motorista;
    use App\Controllers\BaseController;
    use App\Models\MotoristaModel;

    class MotoristaController extends BaseController{
        
        public function indexPage(){
            //templates
            $header['viewHeaderMotorista'] = view("template/HeaderMotorista");

            $data = $this->defaultData();
            $data['titulo'] = "Motoristas | Simple Frete";
            $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/motorista/motorista.css").">";
            $data['jsPage'] = "<script src=".base_url("assets/js/dashboard/motorista/index.motorista.vue.js")." defer></script>";
            $data['renderPage'] = view("Dashboard/Motorista/Motorista", $header);

            //default template for show page
            echo view("template/Dashboard", $data);
        }

        public function detalhePage(){    
            //templates
            $header['viewHeaderMotorista'] = view("template/HeaderMotorista");

            $data = $this->defaultData();
            $data['titulo'] = "Motorista | Simple Frete";
            $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/motorista/motorista.css").">";
            $data['jsPage'] = "<script src=".base_url("assets/js/dashboard/motorista/detalhes.motorista.vue.js")." defer></script>";
            $data['renderPage'] = view("Dashboard/Motorista/DetalheMotorista");

            //default template for show page
            echo view("template/Dashboard", $data);
        }

        public function cadastroPage(){
        
            $data = $this->defaultData();
            $data['titulo'] = "Cadastro de Motoristas | Simple Frete";
            $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/motorista/motorista-cadastro.css").">";
            $data['jsPage'] = "<script src=".base_url("assets/js/dashboard/motorista/cadastro.motorista.vue.js")." defer></script>";
            $data['renderPage'] = view("Dashboard/Motorista/CadastroMotorista");

            echo view("template/Dashboard", $data);
        }
    }

?>