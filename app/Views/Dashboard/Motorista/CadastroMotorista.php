
<div id="page-cadastro-motorista">
    <header class="menu-motorista">
        <div class="row">
            <div class="col-12">
                <ul class="menu">
                    <li>
                        <h2><b>Cadastro de Motorista</b></h2>
                    </li>
                    <li>
                        <div class="dropdown notifications">
                            <button class="btnDf on-button-white" type="button" id="dropdownNotifications" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="iconify" data-icon="mi:notification"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownNotifications">
                                <li>
                                    <a class="dropdown-item" href="#">Action</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container-sm">
        <div class="form-group row">
            <div class="col-md-6 button-foto">
                <button onclick="handleAdicionarFoto()">
                    <img alt="" src="<?=base_url("assets/images/avatar.png")?>" id="img-preview">
                    <div class="info-foto">
                        <div>
                            <span class="iconify" data-icon="material-symbols:add-photo-alternate-outline"></span>
                            <p>Escolher foto</p>
                        </div>
                    </div>
                </button>
                <input type="file" class="form-control" id="inputFoto" @change="previewFoto()">
            </div>
            <div class="col-md-6 data-right">
                <div class="row">
                    <div class="col-md-12">    
                        <label for="inputNome" class="form-label">Nome completo</label>
                        <input type="text" class="form-control" id="inputNome" v-model="inputNome" require>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="inputDataNascimento">Data de nascimento</label>
                        <input type="text" class="form-control" id="inputDataNascimento" v-model="inputDataNascimento">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="inputCPF">CPF</label>
                        <input type="text" class="form-control" id="inputCPF" v-model="inputCPF" require>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-4">
                <label class="form-label" for="inputCNHCategoria">CNH (Categoria)</label>
                <input type="text" class="form-control" id="inputCNHCategoria" v-model="inputCNHCategoria" require>
            </div>
            <div class="col-md-4">
                <label class="form-label" for="inputCNHLocal">CNH (Local)</label>
                <input type="text" class="form-control" id="inputCNHLocal" v-model="inputCNHLocal" require>
            </div>
            <div class="col-md-4">
                <label class="form-label" for="inputCNHRegistro">CNH (Nº Registro)</label>
                <input type="text" class="form-control" id="inputCNHRegistro" v-model="inputCNHRegistro" require>
            </div>
        </div>

        <div class="form-group row">
            <h3><b>Informações de contato</b></h3>
            <div class="col-md-3">
                <label class="form-label" for="inputTelefone">Telefone</label>
                <input type="text" class="form-control" id="inputTelefone" v-model="inputTelefone" require>
            </div>
            <div class="col-md-3">
                <label class="form-label" for="inputCEP">CEP</label>
                <input type="text" class="form-control" id="inputCEP" v-model="inputCEP" @change="buscarCEP()">
            </div>
            <div class="col-md-4">
                <label class="form-label" for="inputEndereco">Endereço</label>
                <input type="text" class="form-control" id="inputEndereco" v-model="inputEndereco">
            </div>
            <div class="col-md-2">
                <label class="form-label" for="inputNumeroCasa">Número da casa</label>
                <input type="text" class="form-control" id="inputNumeroCasa" v-model="inputNumeroCasa">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-3">
                <label class="form-label" for="inputCidade">Cidade</label>
                <input type="text" class="form-control" id="inputCidade" v-model="inputCidade">
            </div>
            <div class="col-md-2">
                <label class="form-label" for="inputEstado">Estado</label>
                <input type="text" class="form-control" id="inputEstado" v-model="inputEstado">
            </div>
            <div class="col-md-3">
                <label class="form-label" for="inputEstado">Bairro</label>
                <input type="text" class="form-control" id="inputBairro" v-model="inputBairro">
            </div>
            <div class="col-md-4">
                <label class="form-label" for="inputComplemento">Complemento</label>
                <input type="text" class="form-control" id="inputComplemento" v-model="inputComplemento">
            </div>
        </div>

        
        <div class="form-group row">
            <h3><b>Criação de conta</b></h3>
            <div class="col-md-6">
                <label class="form-label" for="exampleCheck1">E-mail</label>
                <input type="text" class="form-control" id="inputEmail" v-model="inputEmail">
            </div>
            <div class="col-md-6">
                <label class="form-label" for="inputSenha">Senha</label>
                <input type="password" class="form-control" id="inputSenha" v-model="inputSenha">
            </div>
        </div>

        <button type="button" @click="insertMotorista()" class="btn btn-primary cadastrar-motorista">Cadastrar Motorista</button>
    </div>
</div>

<script>
    function handleAdicionarFoto(){ document.getElementById('inputFoto').click() }
</script>