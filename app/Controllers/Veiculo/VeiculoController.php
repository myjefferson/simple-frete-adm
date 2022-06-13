<?php

    namespace App\Controllers\Veiculo;
    use App\Controllers\BaseController;
    use App\Models\VeiculoModel;

    class VeiculoController extends BaseController{

        public function indexPage(){
            //templates
            $header['viewHeaderVeiculo'] = view("template/HeaderVeiculo");

            $data = $this->defaultData();
            $data['titulo'] = "Veiculos | Simple Frete";
            $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/veiculo/veiculo.css").">";
            $data['jsPage'] = "<script src=".base_url("assets/js/dashboard/veiculo/index.veiculo.vue.js")." defer></script>";
            $data['renderPage'] = view("Dashboard/Veiculo/Veiculo", $header);

            echo view("template/Dashboard", $data);
        }

        public function detalhePage(){    
            //templates
            $header['viewHeaderVeiculo'] = view("template/HeaderVeiculo");

            $data = $this->defaultData();
            $data['titulo'] = "Veiculo | Simple Frete";
            $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/veiculo/veiculo.css").">";
            $data['jsPage'] = "<script src=".base_url("assets/js/dashboard/veiculo/detalhe.veiculo.vue.js")." defer></script>";
            $data['renderPage'] = view("Dashboard/Veiculo/DetalheVeiculo");

            //default template for show page
            echo view("template/Dashboard", $data);
        }

        public function cadastroPage(){
            
            $data = $this->defaultData();
            $data['titulo'] = "Cadastro de Veiculos | Simple Frete";
            $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/veiculo/veiculo-cadastro.css").">";
            $data['jsPage'] = "<script src=".base_url("assets/js/dashboard/veiculo/cadastro.veiculo.vue.js")." defer></script>";
            $data['renderPage'] = view("Dashboard/Veiculo/CadastroVeiculo");

            echo view("template/Dashboard", $data);
        }

    }
?>