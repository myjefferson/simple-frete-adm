<?=
    //Load functions VueJS
    $jsPage;
?>

<div id="page-config">

    <?= $viewHeaderConfig ?>

    <div id="vue-configuracoes">

        <!-- <section id="informacoes-pessoais">
            <h3><b>Informações pessoais</b></h3>

            <form>
                <div class="form-group">
                    <label for="inputEmail1">Nome completo</label>
                    <input type="text" class="form-control" id="inputNome" placeholder="Seu nome" value="<?=session()->get("Nome")?>">
                </div>
                <div class="form-group">
                    <label for="inputEmail1">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Digite seu email" value="<?=session()->get("Email")?>">
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </section>

        <section id="seguranca">
            <h3><b>Segurança</b></h3>
            <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha" readonly>
            </div>
        </section> -->

        <!-- <section id="preferencias">
            <h3><b>Preferências</b></h3>
            <input type="checkbox" data-toggle="toggle" data-on="Enabled" data-off="Disabled">
        </section> -->

        <section id="aparencia">
            <h3><b>Aparência</b></h3>
            <input type="radio" @click="updateAparencia('white-mode')" id="white-mode" value="white-mode" v-model="picked" />
            <label for="white-mode">
                <span class="iconify" data-icon="ri:sun-fill"></span> 
                Modo claro
            </label>

            <input type="radio" @click="updateAparencia('dark-mode')" id="dark-mode" value="dark-mode" v-model="picked" />
            <label for="dark-mode">
                <span class="iconify" data-icon="ooui:moon" data-flip="horizontal"></span>
                Modo escuro
            </label>
        </section>

        <section class="author">
            <h3><b>Desenvolvedores</b></h3>
            <p>Eduarda dos Reis Scheluchnhak</p>
            <p>Jefferson Carvalho dos Santos</p>
            <hr/>
            <p><b>&copy; Simple Frete v1 | Alpha</b></p>
            <p>Todos os direitos reservados</p>
        </section>

    </div>
</div>