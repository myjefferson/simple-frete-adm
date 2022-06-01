<?php

    namespace App\Controllers\Fretes;
    use App\Controllers\BaseController;
    use App\Models\FreteModel;

    class FretesController extends BaseController{
        
        public function indexPage(){
            //templates
            $header['viewHeaderFrete'] = view("template/HeaderFretes");

            $data = $this->defaultData();
            $data['titulo'] = "Fretes | Simple Frete";
            $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/fretes/fretes.css").">";
            $data['jsPage'] = "<script src=".base_url("assets/js/dashboard/fretes/index.fretes.vue.js")." defer></script>";
            $data['renderPage'] = view("Dashboard/Fretes/Fretes", $header);

            //default template for show page
            echo view("template/Dashboard", $data);
        }

        public function detalhesPage(){    
            //templates
            $header['viewHeaderFrete'] = view("template/HeaderFretes");

            $data = $this->defaultData();
            $data['titulo'] = "Frete | Simple Frete";
            $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/fretes/fretes.css").">";
            $data['jsPage'] = "<script src=".base_url("assets/js/dashboard/fretes/detalhes.frete.vue.js")." defer></script>";
            $data['renderPage'] = view("Dashboard/Fretes/DetalhesFrete");

            //default template for show page
            echo view("template/Dashboard", $data);
        }

        public function cadastroPage(){
        
            $data = $this->defaultData();
            $data['titulo'] = "Cadastro de Fretes | Simple Frete";
            $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/fretes/fretes-cadastro.css").">";
            //$data['jsPage'] = "<script src=".base_url("assets/js/dashboard/fretes/fretes.ajax.js")."></script>";
            $data['jsPage'] = "<script src=".base_url("assets/js/dashboard/fretes/cadastro.frete.vue.js")." defer></script>";
            $data['renderPage'] = view("Dashboard/Fretes/CadastroFrete");

            echo view("template/Dashboard", $data);
        }
    }

?>