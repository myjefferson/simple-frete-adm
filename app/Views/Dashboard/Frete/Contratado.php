<?=  
    //Load functions VueJS
    $jsPage;
?>

<div class="page-frete" id="page-contratado">
    
    <?=$viewHeaderFrete;?>

    <div class="row">
        <div class="col-12">
            <div v-if="errored"> 
                Nada encontrado 
            </div>

            <div v-else id="content-contratado" class="row">
                <div v-if="loading">
                    <img src="<?=base_url('assets/images/loading.gif')?>">
                </div>
                    
                <div v-else
                    v-for="frete in fretes"
                    class="frete-contratado col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6"
                >
                    <div class="card">
                        <div class="card-header">
                            <ul class="status">
                                <li><p class="descricao-frete info-contratado">{{frete.DescricaoFrete}}</p></li>
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
                            <div class="button-action btn-group col-4 no-padding">
                                <button type="button" class="btnDf btnDf-white dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Ações
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" @click="confirmarContrato(frete.FreteID)">Confirmar contrato</a></li>
                                    <li><a class="dropdown-item" href="#">Adiar </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>

<script defer>
    new List('page-motoristas', {
        valueNames: ['nome', 'registro-veiculo', 'veiculo']
    })
</script>