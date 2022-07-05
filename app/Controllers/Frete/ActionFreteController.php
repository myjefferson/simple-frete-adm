<?php

    namespace App\Controllers\Frete;
    use App\Controllers\BaseController;
    use App\Models\FreteModel;

    class ActionFreteController extends BaseController{

        public function selectAllAction(){
            $accessDB = new FreteModel();
            $situacaoFreteID = (int) $this->request->getGet('situacaoFreteID');
            echo json_encode($accessDB->selectAllFretesDB($situacaoFreteID));
        }

        public function selectOneAction($FreteID = null){
            $accessDB = new FreteModel();
            echo json_encode(["status" => $accessDB->selectOneFreteDB($FreteID)]);
        }

        public function insertAction(){
            $accessDB = new FreteModel();

            if($this->request->getPost('action') == 'insert'){
                $dados['foto']              = $this->request->getPost('foto');
                $dados['nome']              = $this->request->getPost('nome');
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

        public function confirmSolicitacaoAction(){
            $accessDB = new FreteModel();

            if($this->request->getPost('action') == 'confirmSolicitacao'){
                $dados['freteID']           = $this->request->getPost('freteID');
                $dados['situacaoFreteID']   = $this->request->getPost('situacaoFreteID');

                echo json_encode($accessDB->confirmSolicitacaoDB($dados));
            }
        }

        public function confirmPagamentoAction(){
            $accessDB = new FreteModel();

            if($this->request->getPost('action') == 'confirmPagamento'){
                $dados['freteID']           = $this->request->getPost('freteID');
                $dados['situacaoFreteID']   = $this->request->getPost('situacaoFreteID');

                echo json_encode($accessDB->confirmPagamentoDB($dados));
            }
        }

        public function confirmFreteAction(){
            $accessDB = new FreteModel();

            if($this->request->getPost('action') == 'confirmFrete'){
                $frete['freteID']           = $this->request->getPost('freteID');
                $frete['situacaoFreteID']   = $this->request->getPost('situacaoFreteID');
                echo json_encode($accessDB->confirmFreteDB($frete));
            }
        }

        // public function deleteAction($MotoristaID = null){
        //     $accessDB = new MotoristaModel();

        //     if($this->request->getPost('action') == 'delete'){
        //         $query = $accessDB->deleteOneMotoristaDB($MotoristaID);
        
        //         if($query == "200"){
        //             echo json_encode(["status" => $query]);
        //         }else{
        //             echo json_encode(["status" => 304]);
        //         }
        //     }
        // }

    }

?>