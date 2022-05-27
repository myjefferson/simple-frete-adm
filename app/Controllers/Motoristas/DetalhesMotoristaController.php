<?php

    // Define o agrupamento da classe
    namespace App\Controllers\Motoristas;
    // Traz para uso o BaseController, semelhante ao import
    use App\Controllers\BaseController;
    use App\Models\MotoristaModel;

    class CadastroMotoristaController extends BaseController{

        public function index(){
            
            $data = $this->defaultData();
            $data['titulo'] = "Motorista | Simple Frete";
            $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/motoristas/motoristas-cadastro.css").">";
            $data['jsPage'] = "<script src=".base_url("assets/js/dashboard/motoristas/motoristas.vue.js")." defer></script>";
            $data['renderPage'] = view("Dashboard/Motoristas/CadastroMotorista");

            
            $accessDB = new MotoristaModel();
    
            $query = $accessDB->accessDataBase("queryvazia");
    
            if($query != "304"){
                echo json_encode(["status" => $query]);
            }else{
                echo json_encode(["status" => 304]);
            }

            echo view("template/Dashboard", $data);
        }
    }

?>