<?php

    namespace App\Controllers\Veiculos;
    use App\Controllers\BaseController;
    use App\Models\VeiculoModel;

    class VeiculosController extends BaseController{

        public function indexPage(){
            //templates
            $header['viewHeaderVeiculo'] = view("template/HeaderVeiculos");

            $data = $this->defaultData();
            $data['titulo'] = "Veiculos | Simple Frete";
            $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/veiculos/veiculos.css").">";
            $data['jsPage'] = "<script src=".base_url("assets/js/dashboard/veiculos/index.veiculos.vue.js")." defer></script>";
            $data['renderPage'] = view("Dashboard/Veiculos/Veiculos", $header);

            echo view("template/Dashboard", $data);
        }

        public function detalhesPage(){    
            //templates
            $header['viewHeaderVeiculo'] = view("template/HeaderVeiculos");

            $data = $this->defaultData();
            $data['titulo'] = "Veiculo | Simple Frete";
            $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/veiculos/veiculos.css").">";
            $data['jsPage'] = "<script src=".base_url("assets/js/dashboard/veiculos/detalhes.veiculo.vue.js")." defer></script>";
            $data['renderPage'] = view("Dashboard/Veiculos/DetalhesVeiculo");

            //default template for show page
            echo view("template/Dashboard", $data);
        }

        public function cadastroPage(){
            
            $data = $this->defaultData();
            $data['titulo'] = "Cadastro de Veiculos | Simple Frete";
            $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/veiculos/veiculos-cadastro.css").">";
            $data['jsPage'] = "<script src=".base_url("assets/js/dashboard/veiculos/cadastro.veiculo.vue.js")." defer></script>";
            $data['renderPage'] = view("Dashboard/Veiculos/CadastroVeiculo");

            echo view("template/Dashboard", $data);
        }

    }
?>