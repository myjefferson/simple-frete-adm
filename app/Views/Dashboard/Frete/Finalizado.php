<?=  
    //Load functions VueJS 
    $jsPage; 
?>

<div class="page-frete" id="page-finalizado">
    
    <?=$viewHeaderFrete;?>

    <div class="row">
        <div class="col-12">
            <div v-if="errored"> 
                Nada encontrado 
            </div>

            <div v-else id="content-finalizado" class="row">
                <div v-if="loading">
                    <img src="<?=base_url('assets/images/loading.gif')?>">
                </div>
                    
                <div v-else
                    v-for="frete in fretes"
                    class="frete-finalizado col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6"
                >
                    
                    <div class="card">
                        <div class="card-header">
                            <ul class="status">
                                <li><p class="descricao-frete info-finalizado">{{frete.DescricaoFrete}}</p></li>
                                <li><p class="frete-id">#{{ frete.FreteID }}</p></li>
                                <li><p class="data-criacao">{{ frete.dataCriacao }}</p></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <label>Origem</label>
                            <p><b>{{ frete.enderecoOrigem }}</b></p>    
                            
                            <label>Destino</label>
                            <p><b>{{ frete.enderecoDestino }}</b></p>    
                            
                            <label>Data da entrega</label>
                            <p><b>{{ frete.dataModificacao }}</b></p>    

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
    </div>
</div>