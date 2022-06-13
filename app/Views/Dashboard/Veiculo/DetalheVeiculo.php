<?=  
    $viewHeaderMotorista;

    
    //Load functions VueJS
    $jsPage;
?>

<div id="page-detalhes-veiculo">
    <header class="">
        <h2><b>Motorista</b></h2>
        
        <div class="dropdown">
            <button class="btn btn-secondary" type="button" id="dropdownNotifications" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="iconify" data-icon="mi:notification"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownNotifications">
                <li>
                    <a class="dropdown-item" href="#">Notificação</a>
                </li>
            </ul>
        </div>
    </header>

        <div class="row">
            <button type="button" class="btn btn-primary" v-on:click="deleteMotorista()">Apagar</button>
            <form>
            <div class="mb-3">
                <label for="inputFoto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="inputFoto" v-on:change="inputFoto">
            </div>
            <div class="mb-3">
                <label for="inputMarca" class="form-label">Marca</label>
                <input type="text" class="form-control" id="inputMarca" v-model="inputMarca" require>
            </div>
            <div class="mb-3">
                <label for="inputModelo" class="form-label">Modelo</label>
                <input type="text" class="form-control" id="inputModelo" v-model="inputModelo" require>
            </div>
            <div class="mb-3 form-check">
                <label class="form-label" for="inputCor">Cor</label>
                <input type="text" class="form-control" id="inputCor" v-model="inputCor">
            </div>
            <div class="mb-3 form-check">
                <label class="form-label" for="inputPlaca">Placa</label>
                <input type="text" class="form-control" id="inputPlaca" v-model="inputPlaca" require>
            </div>
            <div class="mb-3 form-check">
                <label class="form-label" for="inputLocalPlaca">Local Placa</label>
                <input type="text" class="form-control" id="inputLocalPlaca" v-model="inputLocalPlaca" require>
            </div>
            <div class="mb-3 form-check">
                <label class="form-label" for="inputChassi">Chassi</label>
                <input type="text" class="form-control" id="inputChassi" v-model="inputChassi" require>
            </div>
            <div class="mb-3 form-check">
                <label class="form-label" for="inputRenavan">Renavan</label>
                <input type="text" class="form-control" id="inputRenavan" v-model="inputRenavan" require>
            </div>

            <button type="button" class="btn btn-primary" @click="updateMotorista()">Salvar alterções</button>
        </form>
    </div>
</div>