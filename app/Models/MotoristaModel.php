<?php

    namespace App\Models;
    use CodeIgniter\Model;

    class MotoristaModel extends Model{

        public function selectAllMotoristasDB(){
            $db = db_connect();

            $table = $db->table('motoristas')
            ->select('
                motoristas.MotoristaID,
                Foto,
                Nome,
                dataNascimento,
                CPF,
                CNHCategoria,
                CNHLocal,
                CNHNumeroRegistro,
                Telefone,
                CEP,
                Endereco,
                Cidade,
                Estado,
                Bairro,
                NumeroCasa,
                fretes.SituacaoFreteID
            ')
            ->join('fretes', 'fretes.MotoristaID = motoristas.MotoristaID', 'left');
            $select  = $table->get();

            foreach ($select->getResult() as $row) {
                $query[] = [
                    "MotoristaID"       => $row->MotoristaID,
                    "Foto"              => $row->Foto,
                    "Nome"              => $row->Nome,
                    "dataNascimento"    => $row->dataNascimento,
                    "CPF"               => $row->CPF,
                    "CNHCategoria"      => $row->CNHCategoria,
                    "CNHLocal"          => $row->CNHLocal,
                    "CNHNumeroRegistro" => $row->CNHNumeroRegistro,
                    "Telefone"          => $row->Telefone,
                    "CEP"               => $row->CEP,
                    "Endereco"          => $row->Endereco,
                    "Cidade"            => $row->Cidade,
                    "Estado"            => $row->Estado,
                    "Bairro"            => $row->Bairro,
                    "NumeroCasa"        => $row->NumeroCasa,
                    "SituacaoFreteID"   => $row->SituacaoFreteID
                ];
            }

            return $this->returnResponse( $select, $query );
        }

        public function selectOneMotoristaDB($MotoristaID){
            $db = db_connect();

            $table = $db->table('motoristas')
            ->select('
                motoristas.MotoristaID,
                Foto,
                Nome,
                dataNascimento,
                CPF,
                CNHCategoria,
                CNHLocal,
                CNHNumeroRegistro,
                Telefone,
                CEP,
                Endereco,
                Cidade,
                Estado,
                Bairro,
                NumeroCasa,
                SituacaoFreteID
            ')
            ->join('fretes', 'fretes.MotoristaID = motoristas.MotoristaID', 'left')
            ->where('motoristas.MotoristaID', $MotoristaID);
            $select  = $table->get();

            foreach ($select->getResult() as $row) {
                $query = [
                    "MotoristaID"       => $row->MotoristaID,
                    "Foto"              => $row->Foto,
                    "Nome"              => $row->Nome,
                    "dataNascimento"    => $row->dataNascimento,
                    "CPF"               => $row->CPF,
                    "CNHCategoria"      => $row->CNHCategoria,
                    "CNHLocal"          => $row->CNHLocal,
                    "CNHNumeroRegistro" => $row->CNHNumeroRegistro,
                    "Telefone"          => $row->Telefone,
                    "CEP"               => $row->CEP,
                    "Endereco"          => $row->Endereco,
                    "Cidade"            => $row->Cidade,
                    "Estado"            => $row->Estado,
                    "Bairro"            => $row->Bairro,
                    "NumeroCasa"        => $row->NumeroCasa,
                    "SituacaoFreteID"   => $row->SituacaoFreteID
                ];
            }

            return $this->returnResponse( $select, $query );
        }

        public function insertMotoristaDB($dados){
            $db = db_connect();

            //Create Motorista
            $motorista = [
                "Nome"              => $db->escapeString($dados["nome"]),
                "dataNascimento"    => $db->escapeString($dados["datanascimento"]),
                "CPF"               => $db->escape(intval($dados["cpf"]), false),
                "CNHLocal"          => $db->escapeString($dados["cnhlocal"]),
                "CNHCategoria"      => $db->escapeString($dados["cnhcategoria"]),
                "CNHNumeroRegistro" => $db->escapeString($dados["cnhregistro"]),
                "Telefone"          => $db->escapeString($dados["telefone"]),
                "CEP"               => $db->escapeString($dados["cep"]),
                "Endereco"          => $db->escapeString($dados["endereco"]),
                "Cidade"            => $db->escapeString($dados["cidade"]),
                "Estado"            => $db->escapeString($dados["estado"]),
                "Bairro"            => $db->escapeString($dados["bairro"]),
                "NumeroCasa"        => $db->escapeString($dados["numerocasa"]),
                "Complemento"       => $db->escapeString($dados["complemento"]),
                "Disponibilidade"   => 1,
                "dataCriacao"       => date("Y-m-d H:i:s")
            ];   

            if($dados['foto'] != ""){
                $motorista["Foto"]  = $db->escapeString($dados["foto"]);
            }  
            $insert = $db->table('motoristas')->insert($motorista);

            //Create Login
            $login = [
                "tipoUsuario"   => "MOTORISTA",
                "CPF"           => $db->escape(intval($dados["cpf"]), false),
                "Email"         => $db->escapeString($dados["email"]),
                "Senha"         => $db->escapeString($dados["senha"]),
                "dataCriacao"   => date("Y-m-d H:i:s")
            ];
            $insert = $db->table('logins')->insert($login);

            return $this->returnResponse($insert, 200 );
        }

        public function updateMotoristaDB($dados){
            $db = db_connect();

            $update = $db->table('motoristas')->set([
                "Nome"              => $db->escapeString($dados["nome"]),
                "dataNascimento"    => $db->escapeString($dados["datanascimento"]),
                "CPF"               => $db->escape(intval($dados["cpf"]), false),
                "CNHCategoria"      => $db->escapeString($dados["cnhcategoria"]),
                "CNHLocal"          => $db->escapeString($dados["cnhlocal"]),
                "CNHNumeroRegistro" => $db->escapeString($dados["cnhregistro"]),
                "Telefone"          => $db->escapeString($dados["telefone"]),
                "CEP"               => $db->escapeString($dados["cep"]),
                "Endereco"          => $db->escapeString($dados["endereco"]),
                "Cidade"            => $db->escapeString($dados["cidade"]),
                "Estado"            => $db->escapeString($dados["estado"]),
                "Bairro"            => $db->escapeString($dados["bairro"]),
                "NumeroCasa"        => $db->escapeString($dados["numerocasa"]),
                "Complemento"       => $db->escapeString($dados["complemento"]),
                "Disponibilidade"   => 1,
                "dataModificacao"   => date("Y-m-d H:i:s")

            ], false);

            if($dados['foto'] != ""){
                $update->set([
                    "Foto"  => $db->escapeString($dados["foto"])
                ]); 
            }           

            $update->where('MotoristaID', $db->escape( intval($dados["motoristaid"])) )->update();

            return $this->returnResponse( $update, $dados );
        }

        public function deleteOneMotoristaDB($MotoristaID){
            $db = db_connect();

            $insert = $db->table('motoristas')->delete(
                ['MotoristaID' => $MotoristaID
            ]);

            return $this->returnResponse( $insert, 200 );
        }
    }

?>