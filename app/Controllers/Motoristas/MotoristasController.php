<?php

    namespace App\Controllers\Motoristas;
    use App\Controllers\BaseController;
    use App\Models\MotoristaModel;

    class MotoristasController extends BaseController{
        
        public function indexPage(){
            //templates
            $header['viewHeaderMotorista'] = view("template/HeaderMotoristas");

            $data = $this->defaultData();
            $data['titulo'] = "Motoristas | Simple Frete";
            $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/motoristas/motoristas.css").">";
            $data['jsPage'] = "<script src=".base_url("assets/js/dashboard/motoristas/index.motoristas.vue.js")." defer></script>";
            $data['renderPage'] = view("Dashboard/Motoristas/Motoristas", $header);

            //default template for show page
            echo view("template/Dashboard", $data);
        }

        public function detalhesPage(){    
            //templates
            $header['viewHeaderMotorista'] = view("template/HeaderMotoristas");

            $data = $this->defaultData();
            $data['titulo'] = "Motorista | Simple Frete";
            $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/motoristas/motoristas.css").">";
            $data['jsPage'] = "<script src=".base_url("assets/js/dashboard/motoristas/detalhes.motorista.vue.js")." defer></script>";
            $data['renderPage'] = view("Dashboard/Motoristas/DetalhesMotorista");

            //default template for show page
            echo view("template/Dashboard", $data);
        }

        public function cadastroPage(){
        
            $data = $this->defaultData();
            $data['titulo'] = "Cadastro de Motoristas | Simple Frete";
            $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/motoristas/motoristas-cadastro.css").">";
            //$data['jsPage'] = "<script src=".base_url("assets/js/dashboard/motoristas/motoristas.ajax.js")."></script>";
            $data['jsPage'] = "<script src=".base_url("assets/js/dashboard/motoristas/cadastro.motorista.vue.js")." defer></script>";
            $data['renderPage'] = view("Dashboard/Motoristas/CadastroMotorista");

            echo view("template/Dashboard", $data);
        }
    }

?>