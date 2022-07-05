<?=  
    //Load functions VueJS
    $jsPage;
?>

<div id="page-motorista">
    
    <?=$viewHeaderMotorista;?>

    <div class="row">
        <div v-if="errored"> 
            Nada encontrado 
        </div>

        <div v-else id="content-list">

            <div v-if="loading">
                <img src="<?=base_url('assets/images/loading.gif')?>">
            </div>
                
            <div v-else class="motorista">
                <ul class="list">
                    <li 
                        v-for="motorista in motoristas"
                        class="col-sm-12 col-md-12 col-lg-12 col-xl-12 no-padding"
                    >
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4 separe">
                                    <div rowspan="2" class="avatar">
                                        <img v-bind:src="'../upload/'+motorista.Foto" onerror="this.onerror=null; this.src='<?=base_url('./assets/images/avatar.png') ?>'">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="soft-text-info">Motorista</label>
                                        <h4><label class="nome">{{ motorista.Nome }}</label> <label class="modelo">234</label></h4>
                                    </div>
                                </div>
                                <div class="col-md-8 separe">
                                    <div class="col-md-4">
                                        <label class="soft-text-info">Status</label>
                                        <p class="color-status"><b>Em manutenção</b></p>
                                    </div>
                                    <div class="veiculo col-md-5">
                                        <label>caminhao / codigo</label>
                                        <p class="registro-veiculo"><b>Marcopolo Cod. 234</b></p>
                                    </div>
                                    <div class="button col-md-3">  
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