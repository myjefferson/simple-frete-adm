<?php

    namespace App\Models;
    use CodeIgniter\Model;

    class VeiculoModel extends Model{
        
        public function insertVeiculoDB($dados){
            
            $db = db_connect();

            $insert = $db->table('veiculos')->insert([

                "Foto"              => $db->escapeString(strval($dados["foto"])),
                "Marca"             => $db->escapeString(strval($dados["marca"])),
                "Modelo"            => $db->escapeString(strval($dados["modelo"])),
                "Cor"               => $db->escapeString($dados["cor"]),
                "Placa"             => $db->escapeString(intval($dados["placa"])),
                "localPlaca"        => $db->escapeString($dados["localplaca"]),
                "Chassi"            => $db->escapeString($dados["chassi"]),
                "Renavan"           => $db->escapeString($dados["renavan"]),
                "Disponibilidade"   => 1,
                "dataCriacao"       => date("Y-m-d H:i:s"),
                "dataModificacao"   => date("Y-m-d H:i:s")

            ]);

            return $this->returnResponse( $insert, 200 );

        }

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

        public function deleteOneVeiculoDB($VeiculoID){
            $db = db_connect();

            $insert = $db->table('veiculos')->delete(
                ['VeiculoID' => $VeiculoID
            ]);

            return $this->returnResponse( $insert, 200 );
        }
    }

?>