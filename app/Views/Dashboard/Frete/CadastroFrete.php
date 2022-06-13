
<div id="page-cadastro-motorista">
    <form require>
        <div class="mb-3">
            <label for="inputFoto" class="form-label">Foto</label>
            <input type="file" class="form-control" id="inputFoto" v-on:change="inputFoto">
        </div>
        <div class="mb-3">
            <label for="inputNome" class="form-label">Nome completo</label>
            <input type="text" class="form-control" id="inputNome" v-model="inputNome" require>
        </div>
        <div class="mb-3 form-check">
            <label class="form-label" for="inputDataNascimento">Data de nascimento</label>
            <input type="text" class="form-control" id="inputDataNascimento" v-model="inputDataNascimento">
        </div>
        <div class="mb-3 form-check">
            <label class="form-label" for="inputCPF">CPF</label>
            <input type="text" class="form-control" id="inputCPF" v-model="inputCPF" require>
        </div>
        <div class="mb-3 form-check">
            <label class="form-label" for="inputCNHCategoria">CNH (Categoria)</label>
            <input type="text" class="form-control" id="inputCNHCategoria" v-model="inputCNHCategoria" require>
        </div>
        <div class="mb-3 form-check">
            <label class="form-label" for="inputCNHLocal">CNH (Local)</label>
            <input type="text" class="form-control" id="inputCNHLocal" v-model="inputCNHLocal" require>
        </div>
        <div class="mb-3 form-check">
            <label class="form-label" for="inputCNHRegistro">CNH (Nº Registro)</label>
            <input type="text" class="form-control" id="inputCNHRegistro" v-model="inputCNHRegistro" require>
        </div>

        <h3><b>Informações de contato</b></h3>

        <div class="mb-3 form-check">
            <label class="form-label" for="inputTelefone">Telefone</label>
            <input type="text" class="form-control" id="inputTelefone" v-model="inputTelefone" require>
        </div>
        <div class="mb-3 form-check">
            <label class="form-label" for="inputCEP">CEP</label>
            <input type="text" class="form-control" id="inputCEP" v-model="inputCEP" require>
        </div>
        <div class="mb-3 form-check">
            <label class="form-label" for="inputEndereco">Endereço</label>
            <input type="text" class="form-control" id="inputEndereco" v-model="inputEndereco">
        </div>
        <div class="mb-3 form-check">
            <label class="form-label" for="inputCidade">Cidade</label>
            <input type="text" class="form-control" id="inputCidade" v-model="inputCidade">
        </div>
        <div class="mb-3 form-check">
            <label class="form-label" for="inputEstado">Estado</label>
            <input type="text" class="form-control" id="inputEstado" v-model="inputEstado">
        </div>
        <div class="mb-3 form-check">
            <label class="form-label" for="inputNumeroCasa">Número da casa</label>
            <input type="text" class="form-control" id="inputNumeroCasa" v-model="inputNumeroCasa">
        </div>
        <div class="mb-3 form-check">
            <label class="form-label" for="inputComplemento">Complemento</label>
            <input type="text" class="form-control" id="inputComplemento" v-model="inputComplemento">
        </div>

        <h3><b>Criação de conta</b></h3>

        <div class="mb-3 form-check">
            <label class="form-label" for="exampleCheck1">E-mail</label>
            <input type="text" class="form-control" id="inputEmail" v-model="inputEmail">
        </div>
        <div class="mb-3 form-check">
            <label class="form-label" for="inputSenha">Senha</label>
            <input type="password" class="form-control" id="inputSenha" v-model="inputSenha">
        </div>
        <button type="button" @click="insertMotorista()" class="btn btn-primary cadastrar-motorista">Cadastrar Motorista</button>
    </form>
</div>