<?php

    namespace App\Models;
    use CodeIgniter\Model;

    class MotoristaModel extends Model{

        public function selectAllMotoristasDB(){
            $db = db_connect();

            $table = $db->table('motoristas');
            $select  = $table->get();

            foreach ($select->getResult() as $row) {
                $query[] = [
                    "MotoristaID"       => $row->MotoristaID,
                    "tipoUsuario"       => $row->tipoUsuario,
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
                    "NumeroCasa"        => $row->NumeroCasa
                ];
            }

            return $this->returnResponse( $select, $query );
        }

        public function selectOneMotoristaDB($MotoristaID){
            $db = db_connect();

            $table = $db->table('motoristas')->where('MotoristaID', $MotoristaID);
            $select  = $table->get();

            foreach ($select->getResult() as $row) {
                $query[] = [
                    "MotoristaID"       => $row->MotoristaID,
                    "tipoUsuario"       => $row->tipoUsuario,
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
                    "NumeroCasa"        => $row->NumeroCasa
                ];
            }

            return $this->returnResponse( $select, $query );
        }

        public function insertMotoristaDB($dados){
            $db = db_connect();

            $insert = $db->table('motoristas')->insert([

                "tipoUsuario"       => "MOTORISTA",
                "Foto"              => $db->escapeString(strval($dados["foto"])),
                "Nome"              => $db->escapeString(strval($dados["nome"])),
                "dataNascimento"    => $db->escapeString($dados["datanascimento"]),
                "CPF"               => $db->escapeString(intval($dados["cpf"])),
                "CNHCategoria"      => $db->escapeString($dados["cnhcategoria"]),
                "CNHLocal"          => $db->escapeString($dados["cnhlocal"]),
                "CNHNumeroRegistro" => $db->escapeString($dados["cnhregistro"]),
                "Telefone"          => $db->escapeString($dados["telefone"]),
                "CEP"               => $db->escapeString($dados["cep"]),
                "Endereco"          => $db->escapeString($dados["endereco"]),
                "Cidade"            => $db->escapeString($dados["cidade"]),
                "Estado"            => $db->escapeString($dados["estado"]),
                "NumeroCasa"        => $db->escapeString($dados["numerocasa"]),
                "Complemento"       => $db->escapeString($dados["complemento"]),
                "Disponibilidade"   => 1,
                "dataCriacao"       => date("Y-m-d H:i:s"),
                "dataModificacao"   => date("Y-m-d H:i:s")

            ]);

            return $this->returnResponse( $insert, 200 );
        }

        public function updateMotoristaDB($dados){
            $db = db_connect();

            $update = $db->table('motoristas')->set([

                "Foto"              => $db->escapeString($dados["foto"]),
                "Nome"              => $db->escapeString($dados["nome"]),
                "dataNascimento"    => $db->escapeString($dados["datanascimento"]),
                "CPF"               => $db->escapeString($dados["cpf"]),
                "CNHCategoria"      => $db->escapeString($dados["cnhcategoria"]),
                "CNHLocal"          => $db->escapeString($dados["cnhlocal"]),
                "CNHNumeroRegistro" => $db->escapeString($dados["cnhregistro"]),
                "Telefone"          => $db->escapeString($dados["telefone"]),
                "CEP"               => $db->escapeString($dados["cep"]),
                "Endereco"          => $db->escapeString($dados["endereco"]),
                "Cidade"            => $db->escapeString($dados["cidade"]),
                "Estado"            => $db->escapeString($dados["estado"]),
                "NumeroCasa"        => $db->escapeString($dados["numerocasa"]),
                "Complemento"       => $db->escapeString($dados["complemento"]),
                "Disponibilidade"   => 1,
                "dataModificacao"   => date("Y-m-d H:i:s")

            ], false)->where('MotoristaID', $db->escape( intval($dados["motoristaid"])) )->update();

            return $this->returnResponse( true, $dados );
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