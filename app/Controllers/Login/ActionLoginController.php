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
                print_r($accessDB->verifyUserLoginDB($data));
            }
        }

        public function logout(){
            session()->destroy();
			die(header("Location: /"));
        }
    }
?>