<?php
    //Load functions VueJS 
    $jsPage;
?>

<div id="page-home">
    <header class="welcome-page menu-home">
        <h4>Olá, bem vindo</h4>
        <h2> <?=session()->get("Nome")?> </h2>
    </header>

    <div class="fast-buttons">
        <div class="row">
            <div class="card col-md-3 col-sm-3">
                <a href="/dashboard/motorista">
                    <div class="card-body">
                        <h5 class="card-title">Motoristas</h5>
                    </div>
                </a>
            </div>
            <div class="card col-md-3 col-sm-3">
                <a href="/dashboard/veiculo">
                    <div class="card-body">
                        <h5 class="card-title">Caminhões</h5>
                    </div>
                </a>
            </div>
            <div class="card col-md-3 col-sm-3">
                <a href="/dashboard/frete/solicitacao">
                    <div class="card-body">
                        <h5 class="card-title"> Solicitações de viagens</h5>
                    </div>
                </a>
            </div>
            <div class="card col-md-3 col-sm-3">
                <a href="#">
                    <div class="card-body">
                        <h5 class="card-title">Controle de viagens</h5>
                    </div>
                </a>
            </div>
            <!-- <div class="card col-md-3 col-sm-3">
                <a href="#">
                    <div class="card-body">
                        <h5 class="card-title">Relatório financeiro</h5>
                    </div>
                </a>
            </div> -->
            <!-- <div class="card col-md-3 col-sm-3">
                <a href="#">
                    <div class="card-body">
                        <h5 class="card-title">Configurações</h5>
                    </div>
                </a>
            </div> -->
        </div>
    </div>

    <div class="special-cards">
        <div class="row">
            <div class="col-md-6">
                <h5>Solicitações para fretes</h5>
                <div class="card solicitacoes-frete">

                    <div v-if="errored">
                        <p>Nada encontrado</p>
                    </div>

                    <div v-else>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Cod.</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Carga</th>
                                    <th scope="col">Data da Solicitação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    v-for="frete in solicitaFretes"
                                    class="frete"
                                    onclick="location.href = '/dashboard/frete/solicitacao'"
                                >
                                    <th scope="row">{{ frete.FreteID }}</th>
                                    <td>{{ frete.enderecoOrigem }}</td>
                                    <td>{{ frete.enderecoOrigem }}</td>
                                    <td>{{ frete.enderecoOrigem }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <h5>Viagens em andamento</h5>
                <div class="card viagens-concluir">
                
                    <div v-if="errored">
                        <p>Nada encontrado</p>
                    </div>

                    <div v-else>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Cod.</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Carga</th>
                                    <th scope="col">Data da Solicitação</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr
                                v-for="frete in concluirFretes"
                                class="frete"
                                onclick="location.href = '/dashboard/frete/em-andamento'"
                            >
                                <th scope="row">{{ frete.FreteID }}</th>
                                    <td>{{ frete.enderecoOrigem }}</td>
                                    <td>{{ frete.enderecoOrigem }}</td>
                                    <td>{{ frete.enderecoOrigem }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>