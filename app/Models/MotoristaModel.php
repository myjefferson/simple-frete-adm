<?php

    namespace App\Models;
    use CodeIgniter\Model;
use phpDocumentor\Reflection\Types\Array_;

    class MotoristaModel extends Model{

        //protected $DBSystem = '';
        
        public function insertMotoristaDB($dados){
            
            $db = db_connect();

            $insert = $db->table('motoristas')->insert([

                'tipoUsuario'       => 'MOTORISTA',
                'Foto'              => $db->escape($dados['foto']),
                'Nome'              => $db->escape($dados['nome']),
                'Sobrenome'         => $db->escape($dados['sobrenome']),
                'dataNascimento'    => $db->escape($dados['datanascimento']),
                'CPF'               => $db->escape(intval($dados['cpf'])),
                'CNHCategoria'      => $db->escape($dados['cnhcategoria']),
                'CNHLocal'          => $db->escape($dados['cnhlocal']),
                'CNHNumeroRegistro' => $db->escape($dados['cnhregistro']),
                'Telefone'          => $db->escape($dados['telefone']),
                'CEP'               => $db->escape($dados['cep']),
                'Endereco'          => $db->escape($dados['endereco']),
                'Cidade'            => $db->escape($dados['cidade']),
                'Estado'            => $db->escape($dados['estado']),
                'NumeroCasa'        => $db->escape($dados['numerocasa']),
                'Complemento'       => $db->escape($dados['complemento']),
                'Disponibilidade'   => 1,
                'dataCriacao'       => date("Y-m-d H:i:s"),
                'dataModificacao'   => date("Y-m-d H:i:s")

            ]);

            if($insert){
                return "200";
            }else{
                return "304";
            }

        }

        public function selectAllMotoristasDB(){

            $db = db_connect();

            $table = $db->table('motoristas');
            $select  = $table->get();

            foreach ($select->getResult() as $row) {
                $query[] = [
                    "motorista" => [
                        "MotoristaID"       => $row->MotoristaID,
                        "tipoUsuario"       => $row->tipoUsuario,
                        "Nome"              => $row->Nome,
                        "Sobrenome"         => $row->Sobrenome,
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
                    ]
                ];
            }

            if($select){
                return $query;
            }else{
                return "304";
            }
        }
    }

?>