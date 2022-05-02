<div id="page-veiculos">
    <header class="">
        <h2>Veículos</h2>
        <input type="text" class="search" placeholder="Busque por nome">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownNotifications" data-bs-toggle="dropdown" aria-expanded="false">
                Noty
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownNotifications">
                <li>
                    <a class="dropdown-item" href="#">Action</a>
                </li>
            </ul>
        </div>

        <div class="row">
            <div class="col-10">
                <ul>
                    <li>Todos</li>
                    <li>Em viagem</li>
                    <li>Em manutenção</li>
                    <li>Na garagem</li>
                </ul>
            </div>
            <div class="col-2">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownOpcoes" data-bs-toggle="dropdown" aria-expanded="false">
                        Opções
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownOpcoes">
                        <li><a class="dropdown-item" href="veiculos/cadastro">Cadastrar veículo</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="row card-veiculos">
        <div class="col-md-6">

            <div class="card">
                <div class="row">
                    <div class="col-3">
                        <div class="card-image">
                            <img src="<?= base_url("upload/vh-1.jpg") ?>" class="card-img-top" alt="...">
                        </div>
                    </div>

                    <div class="col-5">
                        <div class="card-infomacoes">
                            <label>Marca / Modelo</label>
                            <h5 class="card-title">Volvo X342</h5>
                            <ul>
                                <li>
                                    <label>Registro</label>
                                    <p><b>234234</b></p>
                                </li>
                                <li>
                                    <label>Tipo-carga</label>
                                    <p><b>Baú</b></p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class=" card-status">
                            <a href="#" class="btn btn-primary">Ver mais</a>
                            <p>Status</p>
                            <p><b>Na garagem</b></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>