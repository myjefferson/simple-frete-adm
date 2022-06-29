<?php

    namespace App\Models;
    use CodeIgniter\Model;

    class LoginModel extends Model{
        
        public function verifyUserLoginDB($dados){
            $db = db_connect();
            
            $table = $db->table('logins')
            ->select('tipoUsuario, Email, CPF')
            ->where(['Email' => $db->escapeString($dados['email'])])
            ->where(['Senha' => $db->escapeString($dados['senha'])]);
            $select  = $table->get();
            
            $user['tipoUsuario'] = $select->getResultArray()[0]['tipoUsuario'];
            $user['Email'] = $select->getResultArray()[0]['Email'];
            $user['CPF'] = $select->getResultArray()[0]['CPF'];

            if($user['tipoUsuario'] != "" || $user['Email'] != "" || $user['CPF'] != ""){
                if($user['tipoUsuario'] == 'ADMINISTRADOR'){

                    $tableAdm = $db->table('administradores')
                    ->select('AdministradorID, Foto, Nome, CPF, Disponibilidade')
                    ->where(['CPF' => $user['CPF']]);
                    $selectAdm  = $tableAdm->get();

                    session()->set([
                        "" => $selectAdm->getResultArray()[0]['AdministradorID'],
                        "AdministradorID" => $selectAdm->getResultArray()[0]['AdministradorID'],
                        "tipoUsuario" => $user['tipoUsuario'],
                        "Nome" => $selectAdm->getResultArray()[0]['Nome'],
                        "Email" => $user['Email'],
                        "CPF" => $user['CPF'],
                        "Foto" => $selectAdm->getResultArray()[0]['Foto'],
                        "Disponibilidade" => $selectAdm->getResultArray()[0]['Disponibilidade']
                    ]);

                    return json_encode([
                        "status" => 1,
                        "message" => "Usuário Encontrado!",
                        "redirect" => "/dashboard"
                    ]);
                }                
            }else{
                print_r(json_encode([
                    "status" => 0,
                    "message" => "Usuário ou senha incorretos."
                ]));
            }
        }
    }

?>