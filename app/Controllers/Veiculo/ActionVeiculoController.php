<?php

    namespace App\Controllers\Veiculo;
    use App\Controllers\BaseController;
    use App\Models\VeiculoModel;

    class ActionVeiculoController extends BaseController{

        public function selectAllAction(){
            $accessDB = new VeiculoModel();
            $query = $accessDB->selectAllVeiculosDB();

            if($query != "304"){
                echo json_encode(["status" => $query]);
            }else{
                echo json_encode(["status" => 304]);
            }
        }

        public function selectOneAction($VeiculoID = null){
            $accessDB = new VeiculoModel();
            $query = $accessDB->selectOneVeiculoDB($VeiculoID);

            if($query != "304"){
                echo json_encode(["status" => $query]);
            }else{
                echo json_encode(["status" => 304]);
            }
        }

        public function insertVeiculo(){
            $accessDB = new VeiculoModel();

            if($this->request->getPost('action') == 'insert'){
                
                $dados['foto']          = $this->request->getPost('foto');
                $dados['marca']         = $this->request->getPost('marca');
                $dados['modelo']        = $this->request->getPost('sobrenome');
                $dados['cor']           = $this->request->getPost('cor');
                $dados['placa']         = $this->request->getPost('placa');
                $dados['localplaca']    = $this->request->getPost('localplaca');
                $dados['chassi']        = $this->request->getPost('chassi');
                $dados['renavan']       = $this->request->getPost('renavan');

                $query = $accessDB->insertVeiculoDB($dados);
        
                if($query == "200"){
                    echo json_encode(["status" => 200]);
                }else{
                    echo json_encode(["status" => 304]);
                }
            }
        }
    }

?>