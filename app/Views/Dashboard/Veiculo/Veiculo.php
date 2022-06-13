<?=  
    //Load functions VueJS
    $jsPage;
?>

<div id="page-veiculos">
    
    <?=$viewHeaderVeiculo?>

    <div id="vue-veiculos">
        
        <div v-if="errored"> 
            Nada encontrado 
        </div>

        <div v-else id="content-list">

            <div v-if="loading">
                <img src="<?=base_url('assets/images/loading.gif')?>">
            </div>
                
            <div v-else
                v-for="veiculo in veiculos"
                class="veiculos row"
            >
           
                <div class="card col-sm-12 col-md-6">
                    <div class="row">
                        <div class="col-sm-6 col-md-7">
                            <label class="soft-text-info">Marca / Modelo</label>
                            <h4 class="">{{ veiculo.Marca }} {{veiculo.Modelo}}</h4>
                        </div>
                        <div class="col-sm-6 col-md-5">
                            <div class="button">  
                                <a :href="'/dashboard/veiculos/detalhes-veiculo/' +  veiculo.VeiculoID">Ver mais</a>
                            </div>
                            <label class="soft-text-info">Status</label>
                            <p class="color-status"><b>Em manutenção</b></p>
                        </div>
                    </div>   
                </div>

            </div>
        </div>
    </div>
</div>

<script defer>
    new List('page-veiculos', {
        valueNames: ['nome', 'registro-veiculo', 'veiculo']
    })
</script>