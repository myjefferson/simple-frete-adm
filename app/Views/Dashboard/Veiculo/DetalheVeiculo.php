<?=  
    $viewHeaderMotorista;

    
    //Load functions VueJS
    $jsPage;
?>

<div id="page-detalhes-veiculo">
    <header class="">
        <h2><b>Detalhes do veículo</b></h2>
        
        <!-- <div class="dropdown">
            <button class="btn btn-secondary" type="button" id="dropdownNotifications" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="iconify" data-icon="mi:notification"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownNotifications">
                <li>
                    <a class="dropdown-item" href="#">Notificação</a>
                </li>
            </ul>
        </div> -->
    </header>
 
    <button type="button" class="btn btn-primary" @click="deleteVeiculo()">Apagar</button>
        <div class="form-group row">
            <!-- <div class="col-md-3">
                <label for="inputFoto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="inputFoto" v-on:change="inputFoto">
            </div> -->
            <div class="col-md-6">
                <label for="inputMarca" class="form-label">Marca</label>
                <input type="text" class="form-control" id="inputMarca" v-model="inputMarca">
            </div>
            <div class="col-md-6">
                <label for="inputModelo" class="form-label">Modelo</label>
                <input type="text" class="form-control" id="inputModelo" v-model="inputModelo">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-4">
                <label class="form-label" for="inputCor">Cor</label>
                <input type="text" class="form-control" id="inputCor" v-model="inputCor">
            </div>
            <div class="col-md-4">
                <label class="form-label" for="inputPlaca">Placa</label>
                <input type="text" class="form-control" id="inputPlaca" v-model="inputPlaca">
            </div>
            <div class="col-md-4">
                <label class="form-label" for="inputLocalPlaca">Local Placa</label>
                <input type="text" class="form-control" id="inputLocalPlaca" v-model="inputLocalPlaca">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-6">
                <label class="form-label" for="inputChassi">Chassi</label>
                <input type="text" class="form-control" id="inputChassi" v-model="inputChassi">
            </div>
            <div class="col-md-6">
                <label class="form-label" for="inputRenavan">Renavan</label>
                <input type="text" class="form-control" id="inputRenavan" v-model="inputRenavan">
            </div>
        </div>
        <button type="button" class="btn btn-primary" @click="updateVeiculo()">Salvar alterções</button>
    </div>
</div>