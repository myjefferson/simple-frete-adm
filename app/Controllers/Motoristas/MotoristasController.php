<?php

    namespace App\Controllers\Motoristas;
    use App\Controllers\BaseController;
    use App\Models\MotoristaModel;

    class MotoristasController extends BaseController{
        
        public function index(){
            //templates
            $header['viewHeaderMotorista'] = view("template/HeaderMotoristas");

            $data = $this->defaultData();
            $data['titulo'] = "Motoristas | Simple Frete";
            $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/motoristas/motoristas.css").">";
            $data['jsPage'] = "<script src=".base_url("assets/js/dashboard/motoristas/motoristas.vue.js")." defer></script>";
            $data['renderPage'] = view("Dashboard/Motoristas/Motoristas", $header);

            //default template for show page
            echo view("template/Dashboard", $data);
        }

        public function selectAllMotoristas(){
            $accessDB = new MotoristaModel();
            $query = $accessDB->selectAllMotoristasDB();

            if($query != "304"){
                echo json_encode(["status" => $query]);
            }else{
                echo json_encode(["status" => 304]);
            }
        }
    }

?>