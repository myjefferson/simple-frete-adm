<?php

    namespace App\Controllers\Frete;
    use App\Controllers\BaseController;

    class FreteController extends BaseController{
        
        public function solicitacaoPage(){            
            //templates
            $header['viewHeaderFrete'] = view("template/HeaderFrete"); 
            $data = $this->defaultData();
            $data['titulo'] = "Solicitações Fretes | Simple Frete";
            $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/frete/frete.css").">";
            $data['jsPage'] = "
                <script src=".base_url("assets/js/dashboard/googleMaps.js")."></script>
                <script src=".base_url("assets/js/dashboard/frete/solicitacao.frete.vue.js")." defer></script>";
            $data['renderPage'] = view("Dashboard/Frete/Solicitacao", $header);
            
            //default template for show page
            echo view("template/Dashboard", $data);
            //verify session from user
			return $this->verifyIfNotLogged();
        }

        public function pagamentoPage(){    
            //templates
            $header['viewHeaderFrete'] = view("template/HeaderFrete");

            $data = $this->defaultData();
            $data['titulo'] = "Pagamentos | Simple Frete";
            $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/frete/frete.css").">";
            $data['jsPage'] = "<script src=".base_url("assets/js/dashboard/frete/pagamento.frete.vue.js")." defer></script>";
            $data['renderPage'] = view("Dashboard/Frete/Pagamento", $header);

            //default template for show page
            echo view("template/Dashboard", $data);
            //verify session from user
			return $this->verifyIfNotLogged();
        }

        public function contratadoPage(){    
            //templates
            $header['viewHeaderFrete'] = view("template/HeaderFrete");

            $data = $this->defaultData();
            $data['titulo'] = "Contratos | Simple Frete";
            $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/frete/frete.css").">";
            $data['jsPage'] = "<script src=".base_url("assets/js/dashboard/frete/contratado.frete.vue.js")." defer></script>";
            $data['renderPage'] = view("Dashboard/Frete/Contratado", $header);

            //default template for show page
            echo view("template/Dashboard", $data);
            //verify session from user
			return $this->verifyIfNotLogged();
        }

        public function andamentoPage(){    
            //templates
            $header['viewHeaderFrete'] = view("template/HeaderFrete");

            $data = $this->defaultData();
            $data['titulo'] = "Em andamento | Simple Frete";
            $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/frete/frete.css").">";
            $data['jsPage'] = "
                            <script src=".base_url("assets/js/dashboard/googleMaps.js")."></script>            
                            <script src=".base_url("assets/js/dashboard/frete/andamento.frete.vue.js")." defer></script>
                        ";
            $data['renderPage'] = view("Dashboard/Frete/Andamento", $header);

            //default template for show page
            echo view("template/Dashboard", $data);
            //verify session from user
			return $this->verifyIfNotLogged();
        }

        public function finalizadoPage(){    
            //templates
            $header['viewHeaderFrete'] = view("template/HeaderFrete");

            $data = $this->defaultData();
            $data['titulo'] = "Finalizados | Simple Frete";
            $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/frete/frete.css").">";
            $data['jsPage'] = "<script src=".base_url("assets/js/dashboard/frete/finalizados.frete.vue.js")." defer></script>";
            $data['renderPage'] = view("Dashboard/Frete/Finalizado", $header);

            //default template for show page
            echo view("template/Dashboard", $data);
            //verify session from user
			return $this->verifyIfNotLogged();
        }

        public function cadastroPage(){
        
            $data = $this->defaultData();
            $data['titulo'] = "Cadastro de Fretes | Simple Frete";
            $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/fretes/fretes.css").">";
            //$data['jsPage'] = "<script src=".base_url("assets/js/dashboard/fretes/fretes.ajax.js")."></script>";
            $data['jsPage'] = "<script src=".base_url("assets/js/dashboard/fretes/cadastro.frete.vue.js")." defer></script>";
            $data['renderPage'] = view("Dashboard/Fretes/CadastroFrete");

            echo view("template/Dashboard", $data);
            //verify session from user
			return $this->verifyIfNotLogged();
        }
    }

?>