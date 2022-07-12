<header class="menu-frete">
    <div class="row">
        <div class="col-3 col-sm-3">
            <h3><b>Gestão de Fretes</b></h3>
            <!-- <input type="text" class="search" placeholder="Busque por nome"> -->
            
        </div>
        
        <div class="col-7 col-sm-9">
            <ul class="menu">
                <li>
                    <ul class="sub-menu">
                        <li><a href="/dashboard/frete/solicitacao" class="solicitacao">Solicitações</a></li>
                        <li><a href="/dashboard/frete/aguardo-pagamento" class="pagamento">Pagamentos</a></li>
                        <li><a href="/dashboard/frete/contratado" class="contratado">Contratados</a></li>
                        <li><a href="/dashboard/frete/em-andamento" class="andamento">Em andamento</a></li>
                        <li><a href="/dashboard/frete/finalizado" class="finalizado">Fretes finalizados</a></li>
                    </ul>
                </li>
                <!-- <li>
                    <ul class="sub-menu">
                        <li>
                            <div class="dropdown">
                                <button class="btnDf-white dropdown-toggle" style="box-shadow: none; padding: 0; border: none;" type="button" id="dropdownOpcoes" data-bs-toggle="dropdown" aria-expanded="false">
                                    Opções
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownOpcoes">
                                    <li><a class="dropdown-item" href="/dashboard/motorista/cadastro">{{ options.titleCriar }}</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li> -->
                <!-- <li>
                    <div class="dropdown notifications">
                        <button class="btn" type="button" id="dropdownNotifications" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="iconify" data-icon="mi:notification"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownNotifications">
                            <li>
                                <a class="dropdown-item" href="#">Action</a>
                            </li>
                        </ul>
                    </div>
                </li> -->
            </ul>
            
        </div>
        <!-- <div class="col-2">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownOpcoes" data-bs-toggle="dropdown" aria-expanded="false">
                    Opções
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownOpcoes">
                    <li><a class="dropdown-item" href="/dashboard/fretes/cadastro">Cadastrar frete</a></li>
                </ul>
            </div>
        </div> -->
    </div>
</header>

<script type="application/javascript">

    var pageFrete = document.querySelector(".page-frete")
    var getAttr =  pageFrete.getAttribute("id").split("-").pop()

    document.querySelector(`a.${getAttr}`).classList.add("active");

</script>