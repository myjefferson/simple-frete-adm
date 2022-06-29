<?=  
    //Load functions VueJS
    $jsPage;
?>

<div id="page-motoristas">
    
    <?=$viewHeaderMotorista;?>

    <div class="row">
        <div v-if="errored"> 
            Nada encontrado 
        </div>

        <div v-else id="content-list">

            <div v-if="loading">
                <img src="<?=base_url('assets/images/loading.gif')?>">
            </div>
                
            <div v-else class="motorista"
                
                
            >
                <ul class="list">
                    <li 
                        v-for="motorista in motoristas"
                        class="col-sm-12 col-md-12 col-lg-12 col-xl-12 no-padding"
                    >
                        <div class="card">
                            <div class="row">
                                <div rowspan="2" class="avatar">
                                    <span class="iconify" data-icon="carbon:user-avatar-filled-alt"></span>
                                </div>
                                <div class="col-sm-5 col-md-5">
                                    <label class="soft-text-info">Motorista</label>
                                    <h4><label class="nome">{{ motorista.Nome }}</label> <label class="modelo">234</label></h4>
                                </div>
                                <div class="veiculo">
                                    <label>caminhao / codigo</label>
                                    Marcopolo Cod. 
                                    <label class="registro-veiculo">234</label>
                                </div>
                                <div class="col-sm-5 col-md-4">
                                    <label class="soft-text-info">Status</label>
                                    <p class="color-status"><b>Em manutenção</b></p>
                                </div>
                                <div class="button col-md-3">  
                                    <a :href="'/dashboard/motorista/detalhe-motorista/' +  motorista.MotoristaID">Ver mais</a>
                                </div>
                            </div>   
                        </div>
                    </li>
                </ul>

                <script type="application/javascript">
                    new List('page-motoristas', {
                        valueNames: ['nome', 'registro-veiculo', 'veiculo']
                    })
                </script>

            </div>
        </div>
    </div>
</div>