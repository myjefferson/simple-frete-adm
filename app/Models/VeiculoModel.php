<?php

    namespace App\Models;
    use CodeIgniter\Model;

    class VeiculoModel extends Model{

        public function selectAllVeiculosDB(){
            $db = db_connect();

            $table = $db->table('veiculos');
            $select  = $table->get();

            foreach ($select->getResult() as $row) {
                $query[] = [

                    "VeiculoID"   => $row->VeiculoID,
                    "Foto"        => $row->Foto,
                    "Marca"       => $row->Marca,
                    "Modelo"      => $row->Modelo,
                    "Cor"         => $row->Cor,
                    "Placa"       => $row->Placa,
                    "localPlaca"  => $row->localPlaca,
                    "Chassi"      => $row->Chassi,
                    "Renavan"     => $row->Renavan
                
                ];
            }

            return $this->returnResponse( $select, $query );
        }

        public function selectOneVeiculoDB($VeiculoID = null){
            $db = db_connect();

            $table = $db->table('veiculos')->where('VeiculoID', $VeiculoID);
            $select  = $table->get();

            foreach ($select->getResult() as $row) {
                $query[] = [

                    "Foto"        => $row->Foto,
                    "Marca"       => $row->Marca,
                    "Modelo"      => $row->Modelo,
                    "Cor"         => $row->Cor,
                    "Placa"       => $row->Placa,
                    "localPlaca"  => $row->localPlaca,
                    "Chassi"      => $row->Chassi,
                    "Renavan"     => $row->Renavan
                
                ];
            }

            return $this->returnResponse( $select, $query );
        }
        
        public function insertVeiculoDB($dados){
            $db = db_connect();

            $insert = $db->table('veiculos')->insert([

                "Foto"              => $db->escapeString(strval($dados["foto"])),
                "Marca"             => $db->escapeString($dados["marca"]),
                "Modelo"            => $db->escapeString($dados["modelo"]),
                "Cor"               => $db->escapeString($dados["cor"]),
                "Placa"             => $db->escapeString($dados["placa"]),
                "localPlaca"        => $db->escapeString($dados["localplaca"]),
                "Chassi"            => $db->escapeString($dados["chassi"]),
                "Renavan"           => $db->escapeString($dados["renavan"]),
                "Disponibilidade"   => 1,
                "dataCriacao"       => date("Y-m-d H:i:s"),
                "dataModificacao"   => date("Y-m-d H:i:s")

            ]);

            return $this->returnResponse( $insert, 200 );
        }     
        
        public function updateVeiculoDB($dados){
            $db = db_connect();

            $update = $db->table('veiculos')->set([

                "Marca"             => $db->escapeString($dados["marca"]),
                "Modelo"            => $db->escapeString($dados["modelo"]),
                "Cor"               => $db->escapeString($dados["cor"]),
                "Placa"             => $db->escapeString($dados["placa"]),
                "localPlaca"        => $db->escapeString($dados["localplaca"]),
                "Chassi"            => $db->escapeString($dados["chassi"]),
                "Renavan"           => $db->escapeString($dados["renavan"]),
                "Disponibilidade"   => 1,
                "dataModificacao"   => date("Y-m-d H:i:s")

            ], false);

            if($dados['foto'] != ""){
                $update->set([
                    "Foto"  => $db->escapeString($dados["foto"])
                ]); 
            }           

            $update->where('VeiculoID', $db->escape( intval($dados["veiculoid"])) )->update();
            return $this->returnResponse( $update, $dados );
        }

        public function deleteOneVeiculoDB($VeiculoID){
            $db = db_connect();

            $insert = $db->table('veiculos')->delete(
                ['VeiculoID' => $VeiculoID
            ]);

            return $this->returnResponse( $insert, 200 );
        }
    }

?>