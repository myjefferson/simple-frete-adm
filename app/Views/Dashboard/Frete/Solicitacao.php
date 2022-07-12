<?=  
    //Load functions VueJS 
    $jsPage; 
?>

<div class="page-frete" id="page-solicitacao">
    
    <?=$viewHeaderFrete;?>
        
    <div class="row">
        <div class="col-3" style="width: 50%;" id="list-fretes">
            <div v-if="errored"> 
                Nada encontrado 
            </div>
            
            <div v-else id="content-solicitacao" class="row">
                <div v-if="loading">
                    <img src="<?=base_url('assets/images/loading.gif')?>">
                </div>
                
                <div v-else
                    v-for="frete in fretes"
                    class="list-fretes col-12 col-sm-6"
                    id="frete"
                >
                    <div class="card"  v-on:click="selectFrete(frete.FreteID)" class="frete-card">
                        <div class="card-header">
                            <ul class="status">
                                <li><p class="descricao-frete info-solicitacao">{{frete.DescricaoFrete}}</p></li>
                                <li><p class="frete-id">#{{ frete.FreteID }}</p></li>
                                <li><p class="data-criacao">{{ frete.dataCriacao }}</p></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <label>Origem</label>
                            <p><b>{{ frete.enderecoOrigem }}</b></p>    
                            
                            <label>Destino</label>
                            <p><b>{{ frete.enderecoDestino }}</b></p>    
                            
                            <label>Data solicitada de saída</label>
                            <p><b>{{ frete.tempoEntrega }}</b></p>    

                            <label>Valor calculado</label>
                            <h5><b>{{ frete.valorTotal }}</b></h5>    
                            
                        </div>
                        <div class="card-footer row">
                            <div class="col-8">
                                <label>Solicitante</label>
                                <p><b>William Gomes</b></p>
                            </div>
                            <!-- <div class="button-action btn-group col-4 no-padding">
                                <button type="button" class="btnDf btnDf-white dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Ações
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" @click="confirmarContrato(frete.FreteID)">Editar frete</a></li>
                                    <li><a class="dropdown-item" href="#"> </a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div> 
                </div>                
            </div>
        </div>

        <div class="col-3 more-details" id="more-details" style="width: 0;">
            <div class="card">
                <div class="card-header">
                    <ul class="status">
                        <li><p class="frete-id">Código do frete: #{{ selected.FreteID }}</p></li>
                        <li><p class="data-criacao">{{ selected.dataCriacao }}</p></li>
                    </ul>
                </div>
                <div class="card-body">
                    <label>Origem</label>
                        <p><b>{{selected.enderecoOrigem}}</b></p>    
                    
                    <label>Destino</label>
                    <p><b>{{selected.enderecoDestino}}</b></p>    
                    
                    <label>Data solicitada de saída</label>
                    <p></p>

                    <label>Descrição Frete</label>
                    <p><b>{{ selected.DescricaoFrete }}</b></p> 
                    
                    <label>Descrição Carga</label>
                    <p><b>{{ selected.DescricaoCarga }}</b></p>    

                    <label>Valor calculado</label>
                    <p><b>{{ selected.valorTotal }}</b></p>   

                    <hr/>

                    <label>Selecionar motorista</label>
                    <select class="select-motoristas">
                        <option selected>Selecione...</option>
                        <option 
                            v-for="motorista in motoristas"
                            v-if="motorista.SituacaoFreteID == undefined"
                        >{{ motorista.Nome }}</option>
                    </select>

                    <label>Tipo de carga</label>
                    <select class="select-cargas">
                        <option selected>Selecione...</option>
                        <option v-for="carga in cargas" value="">{{ carga.DescricaoCarga }}</option>
                    </select>

                    <label>Selecionar veículo</label>
                    <select class="select-veiculos">
                        <option selected>Selecione...</option>
                        <option v-for="veiculo in veiculos">{{ veiculo.VeiculoID }} - {{ veiculo.Marca }} | {{ veiculo.Modelo }}</option>
                    </select>
                </div>
                <div class="card-footer">
                    <label>Solicitante</label>
                    <p><b>William Gomes</b></p>
                </div>

                <div class="card-footer">
                    <a href="" target="_blank">
                        <span class="iconify" data-icon="logos:whatsapp"></span>
                    </a>
                    <button class="btnDf btnDf-blue btnDf-radius" v-on:click="confirmarSolicitacao(selected.FreteID)">Confirmar solicitação</button>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="map-area">
                <div id="map-view-direction"></div>
            </div>
        </div>
    </div>
</div>

<!--CDN Test GoogleMaps-->
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly' defer></script>