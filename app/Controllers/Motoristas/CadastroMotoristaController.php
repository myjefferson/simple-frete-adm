<?php

    // Define o agrupamento da classe
    namespace App\Controllers\Motoristas;
    // Traz para uso o BaseController, semelhante ao import
    use App\Controllers\BaseController;
    use App\Models\MotoristaModel;

    class CadastroMotoristaController extends BaseController{

        public function index(){
            
            $data = $this->defaultData();
            $data['titulo'] = "Cadastro de Motoristas | Simple Frete";
            $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/motoristas/motoristas-cadastro.css").">";
            //$data['jsPage'] = "<script src=".base_url("assets/js/dashboard/motoristas/motoristas.ajax.js")."></script>";
            $data['jsPage'] = "<script src=".base_url("assets/js/dashboard/motoristas/cadastro.motoristas.vue.js")." defer></script>";
            $data['renderPage'] = view("Dashboard/Motoristas/CadastroMotorista");

            echo view("template/Dashboard", $data);
        }

        public function cadastrarMotorista(){
            $accessDB = new MotoristaModel();

            if($this->request->getPost('action') == 'insert'){
                $dados['foto']              = $this->request->getPost('foto');
                $dados['nome']              = $this->request->getPost('nome');
                $dados['sobrenome']         = $this->request->getPost('sobrenome');
                $dados['datanascimento']    = $this->request->getPost('datanascimento');
                $dados['cpf']               = $this->request->getPost('cpf');
                $dados['cnhcategoria']      = $this->request->getPost('cnhcategoria');
                $dados['cnhlocal']          = $this->request->getPost('cnhlocal');
                $dados['cnhregistro']       = $this->request->getPost('cnhregistro');
                $dados['telefone']          = $this->request->getPost('telefone');
                $dados['cep']               = $this->request->getPost('cep');
                $dados['endereco']          = $this->request->getPost('endereco');
                $dados['cidade']            = $this->request->getPost('cidade');
                $dados['estado']            = $this->request->getPost('estado');
                $dados['numerocasa']        = $this->request->getPost('numerocasa');
                $dados['complemento']       = $this->request->getPost('complemento');
                $dados['email']             = $this->request->getPost('email');
                $dados['senha']             = $this->request->getPost('senha');

                $query = $accessDB->insertMotoristaDB($dados);
        
                if($query == "200"){
                    echo json_encode(["status" => 200]);
                }else{
                    echo json_encode(["status" => 304]);
                }
            }
        }
    }

?>