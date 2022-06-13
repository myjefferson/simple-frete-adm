<?=  
    //Load functions VueJS
    $jsPage;
?>

<div id="page-index-fretes">
    
    <?=$viewHeaderFrete;?>

    <div>        
        <div v-if="errored"> 
            Nada encontrado 
        </div>

        <div v-else id="content-list">

            <div v-if="loading">
                <img src="<?=base_url('assets/images/loading.gif')?>">
            </div>
                
            <div v-else
                v-for="frete in fretes"
                class="frete"
            >
                <div class="table-responsive-sm list">

                    <table class="table">
                        <tr class="table-title">
                            <td rowspan="2" class="avatar">
                                <span class="iconify" data-icon="carbon:user-avatar-filled-alt"></span>
                            </td>
                            <td>Frete</td>
                            <td>Status</td>
                            <td>Caminhão e código</td>
                            <td rowspan="2">  
                                <div class="button">  
                                    <a :href="'/dashboard/fretes/solicitacao/' +  frete.FreteID">Ver mais</a>
                                </div>
                            </td>
                        </tr>

                        <tr class="table-content">
                            <td class="nome">
                                {{ frete }}
                            </td>
                            <td>Em viagem</td>
                            <td class="veiculo">Marcopolo Cod. 
                                <label class="registro-veiculo">234</label>
                            </td>
                        </tr>    
                    </table>  
                    
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