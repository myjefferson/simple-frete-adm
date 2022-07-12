<?php

    namespace App\Controllers\Motorista;
    use App\Controllers\BaseController;
    use App\Models\MotoristaModel;

    class ActionMotoristaController extends BaseController{

        public function selectAllAction(){
            $accessDB = new MotoristaModel();
            print_r(json_encode($accessDB->selectAllMotoristasDB()));
        }

        public function selectOneAction($MotoristaID = null){
            $accessDB = new MotoristaModel();
            print_r(json_encode($accessDB->selectOneMotoristaDB($MotoristaID)));
        }

        public function insertAction(){
            $accessDB = new MotoristaModel();

            if($this->request->getPost('action') == 'insert'){
                $dados["nome"]              = $this->request->getPost("nome");
                $dados["datanascimento"]    = $this->request->getPost("datanascimento");
                $dados["cpf"]               = $this->request->getPost("cpf");
                $dados["cnhcategoria"]      = $this->request->getPost("cnhcategoria");
                $dados["cnhlocal"]          = $this->request->getPost("cnhlocal");
                $dados["cnhregistro"]       = $this->request->getPost("cnhregistro");
                $dados["telefone"]          = $this->request->getPost("telefone");
                $dados["cep"]               = $this->request->getPost("cep");
                $dados["endereco"]          = $this->request->getPost("endereco");
                $dados["cidade"]            = $this->request->getPost("cidade");
                $dados["estado"]            = $this->request->getPost("estado");
                $dados["bairro"]            = $this->request->getPost("bairro");
                $dados["numerocasa"]        = $this->request->getPost("numerocasa");
                $dados["complemento"]       = $this->request->getPost("complemento");
                $dados["email"]             = $this->request->getPost("email");
                $dados["senha"]             = $this->request->getPost("senha");

                $dados["foto"] = "";
                if(!empty($_FILES["foto"])){
                    $ext = strtolower(substr($_FILES['foto']['name'],-4));
                    $new_name = 'motorista-'.date("Y.m.d-H.i.s") . $ext;
                    $dados["foto"] = $new_name;
                    $dir = './upload/motoristas/';
                    move_uploaded_file($_FILES['foto']['tmp_name'], $dir.$new_name);
                }

                print_r(json_encode($accessDB->insertMotoristaDB($dados)));
            }
        }

        public function updateAction(){
            $accessDB = new MotoristaModel();

            if($this->request->getPost('action') == 'update'){
                $dados['motoristaid']       = $this->request->getPost("motoristaid");
                
                $dados["nome"]              = $this->request->getPost("nome");
                $dados["datanascimento"]    = $this->request->getPost("datanascimento");
                $dados["cpf"]               = $this->request->getPost("cpf");
                $dados["cnhcategoria"]      = $this->request->getPost("cnhcategoria");
                $dados["cnhlocal"]          = $this->request->getPost("cnhlocal");
                $dados["cnhregistro"]       = $this->request->getPost("cnhregistro");
                $dados["telefone"]          = $this->request->getPost("telefone");
                $dados["cep"]               = $this->request->getPost("cep");
                $dados["endereco"]          = $this->request->getPost("endereco");
                $dados["cidade"]            = $this->request->getPost("cidade");
                $dados["estado"]            = $this->request->getPost("estado");
                $dados["bairro"]            = $this->request->getPost("bairro");
                $dados["numerocasa"]        = $this->request->getPost("numerocasa");
                $dados["complemento"]       = $this->request->getPost("complemento");
                $dados["email"]             = $this->request->getPost("email");
                $dados["senha"]             = $this->request->getPost("senha");
                
                $dados["foto"] = "";
                if(!empty($_FILES["foto"])){
                    $ext = strtolower(substr($_FILES['foto']['name'],-4));
                    $new_name = 'motorista-'.date("Y.m.d-H.i.s") . $ext;
                    $dados["foto"] = $new_name;
                    $dir = './upload/motoristas/';
                    move_uploaded_file($_FILES['foto']['tmp_name'], $dir.$new_name);
                }

                print_r(json_encode($accessDB->updateMotoristaDB($dados)));
            }
        }

        public function deleteAction($MotoristaID = null){
            $accessDB = new MotoristaModel();

            if($this->request->getPost('action') == 'delete'){
                $query = $accessDB->deleteOneMotoristaDB($MotoristaID);
        
                if($query == "200"){
                    echo json_encode(["status" => $query]);
                }else{
                    echo json_encode(["status" => 304]);
                }
            }
        }

    }

?>