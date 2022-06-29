<?php

namespace App\Controllers\Config;
use App\Controllers\BaseController;

class ConfigController extends BaseController{
    public function index(){
        //template
        $header['viewHeaderConfig'] = view("template/HeaderConfig");

        $data = $this->defaultData();
        $data['titulo'] = "Configurações | Simple Frete";
        $data['cssPage'] = "<link rel='stylesheet' href=".base_url("assets/css/dashboard/config/config.css").">";
        $data['jsPage'] = "<script src=".base_url("assets/js/dashboard/index.config.vue.js")." defer></script>";
        $data['renderPage'] = view("Dashboard/Config", $header);
        echo view("template/Dashboard", $data);
        //verify session from user
		return $this->verifyIfNotLogged();
    }
}

?>