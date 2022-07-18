<?=  
    //Load functions VueJS
    $jsPage;
?>

<div id="page-motorista">
    
    <?=$viewHeaderMotorista;?>

    <div>
        <div v-if="errored"> 
            Nada encontrado 
        </div>

        <div v-else id="content-list">

            <div v-if="loading">
                <img src="<?=base_url('assets/images/loading.gif')?>">
            </div>
                
            <div v-else class="motorista">
                <ul class="list row">
                    <li 
                        v-for="motorista in motoristas"
                        class="col-sm-12 col-md-12 col-lg-6 col-xl-6"
                    >
                        <div class="card">
                            <div class="row">
                                <div class="col-md-6 separe">
                                    <div rowspan="2" class="avatar">
                                        <img v-bind:src="'../upload/motoristas/'+motorista.Foto" onerror="this.onerror=null; this.src='<?=base_url('./assets/images/avatar.png') ?>'">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="soft-text-info">Motorista</label>
                                        <h4><label class="nome">{{ motorista.Nome }}</label></h4>
                                    </div>
                                </div>
                                <div class="col-md-6 separe">
                                    <div class="col-md-6">
                                        <label class="soft-text-info">Status</label>
                                        <p class="color-status">
                                            <b v-if="motorista.SituacaoFreteID === null || motorista.SituacaoFreteID === '5'" class="sem-destino">Sem destino</b>
                                            <b v-if="motorista.SituacaoFreteID === '4'" class="em-viagem"><a href="/dashboard/frete/em-andamento">Em viagem</a></b>
                                            <b v-if="motorista.SituacaoFreteID === '2' || motorista.SituacaoFreteID === '3'" class="em-reserva">Reservado</b>
                                        </p>
                                    </div>
                                    <div class="button col-md-6">  
                                        <a :href="'/dashboard/motorista/detalhe-motorista/' +  motorista.MotoristaID">Ver mais</a>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </li>
                </ul>

                <script type="application/javascript">
                    new List('page-motorista', {
                        valueNames: ['nome', 'registro-veiculo', 'veiculo']
                    })
                </script>

            </div>
        </div>
    </div>
</div>