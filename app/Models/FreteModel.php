<?php

    namespace App\Models;
    use CodeIgniter\Model;

    class FreteModel extends Model{
        
        public function insertFreteDB($dados){
            
            $db = db_connect();

            $insert = $db->table('fretes')->insert([

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

        public function selectAllFretesDB(int $SituacaoFreteID = null){
            $db = db_connect();
            
            $table = $db->table('fretes')
            ->select('*')
            ->join('situacoesfrete', 'situacoesfrete.SituacaofreteID = fretes.SituacaofreteID')
            ->join('tipocargas', 'tipocargas.TipoCargaID = fretes.TipoCargaID');
            $select  = $table->get();

            foreach ($select->getResult() as $row) {
                $query[] = [

                    "FreteID"           => $row->FreteID,
                    "VeiculoID"         => $row->VeiculoID,
                    "MotoristaID"       => $row->MotoristaID,
                    "ClienteID"         => $row->ClienteID,
                    "TipoCargaID"       => $row->TipoCargaID,
                    "enderecoOrigem"    => $row->enderecoOrigem,
                    "enderecoDestino"   => $row->enderecoDestino,
                    "valorTotal"        => $row->valorTotal,
                    "DescricaoCarga"    => $row->DescricaoCarga,
                    "DescricaoFrete"    => $row->DescricaoFrete,
                    "Disponibilidade"   => $row->Disponibilidade,
                
                ];
            }

            return $this->returnResponse( $select, $query );
        }

        public function selectOneFreteDB($FreteID = null){

            $db = db_connect();

            $table = $db->table('fretes')->where('FreteID', $FreteID);
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
    }

?>