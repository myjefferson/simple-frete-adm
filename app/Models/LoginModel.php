<?php

    namespace App\Models;
    use CodeIgniter\Model;

    class LoginModel extends Model{
        
        public function verifyUserLoginDB($dados){
            $db = db_connect();
            
            $table = $db->table('logins')
            ->select('UsuarioID, Email, CPF')
            ->where(['Email' => $db->escapeString($dados['email'])])
            ->where(['Senha' => $db->escapeString($dados['senha'])]);
            $select  = $table->get();


            foreach ($select->getResult() as $row) {
                $query[] = [

                    "UsuarioID" => $row->UsuarioID,
                    "Email"     => $row->Email,
                    "CPF"       => $row->CPF
                
                ];
            }

            return $query;
        }
    }

?>