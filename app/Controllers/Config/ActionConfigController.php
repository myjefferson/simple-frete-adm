<?php

    namespace App\Controllers\Config;
    use App\Controllers\BaseController;
    use App\Models\ConfigModel;

    class ActionConfigController extends BaseController{

        // public function selectAllAction(){
        //     $accessDB = new ConfigModel();
        //     print_r(json_encode(["status" => $accessDB->selectAllConfigsDB()]));
        // }

        // public function selectOneAction($ConfigID = null){
        //     $accessDB = new ConfigModel();
        //     print_r(json_encode(["status" => $accessDB->selectOneConfigDB($ConfigID)]));
        // }

        // public function insertAction(){
        //     $accessDB = new ConfigModel();

        //     if($this->request->getPost('action') == 'insert'){
        //         $dados['foto']              = $this->request->getPost('foto');
        //         $dados['nome']              = $this->request->getPost('nome');
        //         $dados['datanascimento']    = $this->request->getPost('datanascimento');
        //         $dados['cpf']               = $this->request->getPost('cpf');
        //         $dados['cnhcategoria']      = $this->request->getPost('cnhcategoria');
        //         $dados['cnhlocal']          = $this->request->getPost('cnhlocal');
        //         $dados['cnhregistro']       = $this->request->getPost('cnhregistro');
        //         $dados['telefone']          = $this->request->getPost('telefone');
        //         $dados['cep']               = $this->request->getPost('cep');
        //         $dados['endereco']          = $this->request->getPost('endereco');
        //         $dados['cidade']            = $this->request->getPost('cidade');
        //         $dados['estado']            = $this->request->getPost('estado');
        //         $dados['numerocasa']        = $this->request->getPost('numerocasa');
        //         $dados['complemento']       = $this->request->getPost('complemento');
        //         $dados['email']             = $this->request->getPost('email');
        //         $dados['senha']             = $this->request->getPost('senha');

        //         $query = $accessDB->insertMotoristaDB($dados);
        
        //         if($query == "200"){
        //             echo json_encode(["status" => 200]);
        //         }else{
        //             echo json_encode(["status" => 304]);
        //         }
        //     }
        // }

        // public function updateAction(){
        //     $accessDB = new MotoristaModel();

        //     if($this->request->getPost('action') == 'update'){
        //         $dados['motoristaid']       = $this->request->getPost("motoristaid");
                
        //         $dados["foto"]              = $this->request->getPost("foto");
        //         $dados["nome"]              = $this->request->getPost("nome");
        //         $dados["datanascimento"]    = $this->request->getPost("datanascimento");
        //         $dados["cpf"]               = $this->request->getPost("cpf");
        //         $dados["cnhcategoria"]      = $this->request->getPost("cnhcategoria");
        //         $dados["cnhlocal"]          = $this->request->getPost("cnhlocal");
        //         $dados["cnhregistro"]       = $this->request->getPost("cnhregistro");
        //         $dados["telefone"]          = $this->request->getPost("telefone");
        //         $dados["cep"]               = $this->request->getPost("cep");
        //         $dados["endereco"]          = $this->request->getPost("endereco");
        //         $dados["cidade"]            = $this->request->getPost("cidade");
        //         $dados["estado"]            = $this->request->getPost("estado");
        //         $dados["numerocasa"]        = $this->request->getPost("numerocasa");
        //         $dados["complemento"]       = $this->request->getPost("complemento");
        //         $dados["email"]             = $this->request->getPost("email");
        //         $dados["senha"]             = $this->request->getPost("senha");

        //         $query = $accessDB->updateMotoristaDB($dados);
        
        //         //var_dump($query);
        //         if($query == "200"){
        //             echo json_encode(["status" => 200]);
        //         }else{
        //             echo json_encode(["status" => 304]);
        //         }
        //     }
        // }

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