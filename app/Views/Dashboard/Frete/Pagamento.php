<?=  
    //Load functions VueJS 
    $jsPage; 
?>

<div id="page-index-fretes">
    
    <?=$viewHeaderFrete;?>

    <div class="row">
        <session class="col-3">
            <div v-if="errored"> 
                Nada encontrado 
            </div>

            <div v-else id="content-frete">
                <div v-if="loading">
                    <img src="<?=base_url('assets/images/loading.gif')?>">
                </div>
                    
                <div v-else
                    v-for="frete in fretes"
                    class="frete"
                >
                    <div class="list">
                        <div class="card">
                            <div class="card-header">
                                <ul>
                                    <li><p class="descricao-frete info-pagamento">{{frete.DescricaoFrete}}</p></li>
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
                            <div class="card-footer">
                                <label>Solicitante</label>
                                <p><b>William Gomes</b></p>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </session>

        <session class="col-3 more-details">
            <div class="header-details">
                <ul>
                    <li><p class="descricao-frete">Aguardando</p></li>
                    <li><p class="frete-id">#{{ FreteID }}</p></li>
                    <li><p class="data-criacao">{{ dataCriacao }}</p></li>
                </ul>
            </div>
            <div class="body-details">
                <label>Origem</label>
                <p><b>{{ enderecoOrigem }}</b></p>    
                
                <label>Destino</label>
                <p><b>{{ enderecoDestino }}</b></p>    
                
                <label>Data solicitada de saída</label>
                <p><b>{{ tempoEntrega }}</b></p>    

                <label>Valor calculado</label>
                <h5><b>{{ valorTotal }}</b></h5>    
                
            </div>
            <div class="select-details">
                <label>Solicitante</label>
                <p><b>William Gomes</b></p>
            </div>

            <div class="footer-details">
                <a href="">
                    <span class="iconify" data-icon="logos:whatsapp"></span>
                </a>
                <button class="onDefault on-button-radius">Confirmar solicitação</button>
            </div>
        </session>

        <session class="col-6">
            <div class="map-area">
                <iframe scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Curitiba+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0"><a href="https://www.gps.ie/wearable-gps/">adventure gps</a></iframe>
            </div>
        </session>
    </div>
</div>

<script defer>
    new List('page-motoristas', {
        valueNames: ['nome', 'registro-veiculo', 'veiculo']
    })
</script>