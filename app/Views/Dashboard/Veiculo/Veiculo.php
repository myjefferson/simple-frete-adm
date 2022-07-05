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
                
            <div v-else class="veiculos">
                <ul 
                    class="list row"
                >
                
                    <li 
                        v-for="veiculo in veiculos"
                        class="col-sm-12 col-md-6 col-lg-4 col-xl-4 no-padding"
                    >
                        <div class="card">
                            <div class="row">
                                <div class="col-sm-6 col-md-7">
                                    <label class="soft-text-info">Marca / Modelo</label>
                                    <h4><label class="marca">{{ veiculo.Marca }}</label> <label class="modelo">{{veiculo.Modelo}}</label></h4>
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
                    </li>

                </ul>

                <script type="application/javascript">
                    new List('page-veiculos', {
                        valueNames: ['marca', 'modelo']
                    })
                </script>
                
            </div>
        </div>
    </div>
</div>
