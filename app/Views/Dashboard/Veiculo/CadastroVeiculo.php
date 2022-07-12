
<div id="page-cadastro-veiculo">
    <header class="">
        <h2><b>Cadastro de veículo</b></h2>
        
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

    <div class="form-group row">
        <!-- <div class="mb-3">
            <label for="inputFoto" class="form-label">Foto</label>
            <input type="file" class="form-control" id="inputFoto" v-on:change="inputFoto">
        </div> -->
        <div class="col-md-6">
            <label for="inputMarca" class="form-label">Marca</label>
            <input type="text" class="form-control" id="inputMarca" v-model="inputMarca" require>
        </div>
        <div class="col-md-6">
            <label for="inputModelo" class="form-label">Modelo</label>
            <input type="text" class="form-control" id="inputModelo" v-model="inputModelo" require>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-4">
            <label class="form-label" for="inputCor">Cor</label>
            <input type="text" class="form-control" id="inputCor" v-model="inputCor">
        </div>
        <div class="col-md-4">
            <label class="form-label" for="inputPlaca">Placa</label>
            <input type="text" class="form-control" id="inputPlaca" v-model="inputPlaca" require>
        </div>
        <div class="col-md-4">
            <label class="form-label" for="inputLocalPlaca">Local Placa</label>
            <input type="text" class="form-control" id="inputLocalPlaca" v-model="inputLocalPlaca" require>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-6">
            <label class="form-label" for="inputChassi">Chassi</label>
            <input type="text" class="form-control" id="inputChassi" v-model="inputChassi" require>
        </div>
        <div class="col-md-6">
            <label class="form-label" for="inputRenavan">Renavan</label>
            <input type="text" class="form-control" id="inputRenavan" v-model="inputRenavan" require>
        </div>
    </div>

        <button type="button" @click="insertVeiculo()" class="btn btn-primary cadastrar-veiculo">Cadastrar Veiculo</button>
    </form>
</div>