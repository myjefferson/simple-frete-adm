<?php

    namespace App\Controllers\Motoristas;
    use App\Controllers\BaseController;
    use App\Models\MotoristaModel;

    class AlterarMotoristaController extends BaseController{

        public function index(){

            $data = $this->defaultData();
            $data['titulo'] = "Alterar Motorista | Simple Frete";

        }

        public function alterarMotorista(){
            $accessDB = new MotoristaModel();

            if($this->request->getPost('action') == 'update'){
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

                $query = $accessDB->accessDataBase($dados);
        
                if($query == "200"){
                    echo json_encode(["status" => 200]);
                }else{
                    echo json_encode(["status" => 304]);
                }
            }
        }

    }

?>