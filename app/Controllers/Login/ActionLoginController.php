<?php

    namespace App\Controllers\Login;
    use App\Controllers\BaseController;
    use App\Models\LoginModel;

    class ActionLoginController extends BaseController{

        public function login(){

            if($this->request->getPost('action') == 'login'){
                $data['email'] = $this->request->getPost('email');
                $data['senha'] = $this->request->getPost('senha');
                
                $accessDB = new LoginModel();
                $dataUser = $accessDB->verifyUserLoginDB($data);

                if($dataUser[0]['UsuarioID'] != "" || $dataUser[0]['Email'] != "" || $dataUser[0]['CPF'] != ""){
                    session()->set([
                        "UsuarioID" => $dataUser['UsuarioID'],
                        "Email" => $dataUser['Email'],
                        "CPF" => $dataUser['CPF'],
                    ]);

                    print_r(json_encode([
                        "status" => 1,
                        "message" => "Usuário Encontrado!",
                        "redirect" => "/dashboard"
                    ]));
                }else{
                    print_r(json_encode([
                        "status" => 0,
                        "message" => "Usuário ou senha incorretos."
                    ]));
                }
            }
        }

        public function verifySession(){

        }
    }
?>