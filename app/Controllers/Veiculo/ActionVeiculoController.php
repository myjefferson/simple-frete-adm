<?php

    namespace App\Controllers\Veiculo;
    use App\Controllers\BaseController;
    use App\Models\VeiculoModel;

    class ActionVeiculoController extends BaseController{

        public function selectAllAction(){
            $accessDB = new VeiculoModel();
            print_r(json_encode($accessDB->selectAllVeiculosDB()));
        }

        public function selectOneAction(int $VeiculoID = null){
            $accessDB = new VeiculoModel();
            print_r(json_encode($accessDB->selectOneVeiculoDB($VeiculoID)));
        }

        public function insertVeiculo(){
            $accessDB = new VeiculoModel();

            if($this->request->getPost('action') == 'insert'){
                
                $dados['foto']          = $this->request->getPost('foto');
                $dados['marca']         = $this->request->getPost('marca');
                $dados['modelo']        = $this->request->getPost('modelo');
                $dados['cor']           = $this->request->getPost('cor');
                $dados['placa']         = $this->request->getPost('placa');
                $dados['localplaca']    = $this->request->getPost('localplaca');
                $dados['chassi']        = $this->request->getPost('chassi');
                $dados['renavan']       = $this->request->getPost('renavan');

                $dados["foto"] = "";
                if(!empty($_FILES["foto"])){
                    $ext = strtolower(substr($_FILES['foto']['name'],-4));
                    $new_name = 'veiculo-'.date("Y.m.d-H.i.s") . $ext;
                    $dados["foto"] = $new_name;
                    $dir = './upload/veiculos/';
                    move_uploaded_file($_FILES['foto']['tmp_name'], $dir.$new_name);
                }

                print_r(json_encode($accessDB->insertVeiculoDB($dados)));
            }
        }

        public function updateAction(){
            $accessDB = new VeiculoModel();

            if($this->request->getPost('action') == 'update'){
                $dados['veiculoid']       = $this->request->getPost("veiculoid");
                
                $dados['marca']         = $this->request->getPost('marca');
                $dados['modelo']        = $this->request->getPost('modelo');
                $dados['cor']           = $this->request->getPost('cor');
                $dados['placa']         = $this->request->getPost('placa');
                $dados['localplaca']    = $this->request->getPost('localplaca');
                $dados['chassi']        = $this->request->getPost('chassi');
                $dados['renavan']       = $this->request->getPost('renavan');
                
                $dados["foto"] = "";
                if(!empty($_FILES["foto"])){
                    $ext = strtolower(substr($_FILES['foto']['name'],-4));
                    $new_name = 'veiculo-'.date("Y.m.d-H.i.s") . $ext;
                    $dados["foto"] = $new_name;
                    $dir = './upload/veiculos/';
                    move_uploaded_file($_FILES['foto']['tmp_name'], $dir.$new_name);
                }

                print_r(json_encode($accessDB->updateVeiculoDB($dados)));
            }
        }

        public function deleteAction($VeiculoID = null){
            $accessDB = new VeiculoModel();

            if($this->request->getPost('action') == 'delete'){
                $query = $accessDB->deleteOneVeiculoDB($VeiculoID);
        
                if($query == "200"){
                    echo json_encode(["status" => $query]);
                }else{
                    echo json_encode(["status" => 304]);
                }
            }
        }
    }

?>