<?=  
    $viewHeaderMotorista;

    //Load functions VueJS
    $jsPage;
?>

<div id="page-index-motoristas">
    <header class="">
        <h2><b>Gestão de Fretes</b></h2>
        
        <input type="text" class="search" placeholder="Busque por nome">
        
        <div class="dropdown">
            <button class="btn btn-secondary" type="button" id="dropdownNotifications" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="iconify" data-icon="mi:notification"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownNotifications">
                <li>
                    <a class="dropdown-item" href="#">Action</a>
                </li>
            </ul>
        </div>
    </header>

    <div class="row">
        <div class="col-10">
            <ul>
                <li>Todos</li>
                <li>Em viagem</li>
                <li>Sem destino</li>
            </ul>
        </div>
        <div class="col-2">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownOpcoes" data-bs-toggle="dropdown" aria-expanded="false">
                    Opções
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownOpcoes">
                    <li><a class="dropdown-item" href="/dashboard/motoristas/cadastro">Cadastrar motorista</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div>
        
        <div v-if="errored"> 
            Nada encontrado 
        </div>

        <div v-else id="content-list">

            <div v-if="loading">
                <img src="<?=base_url('assets/images/loading.gif')?>">
            </div>
                
            <div v-else
                v-for="motorista in motoristas"
                class="motorista"
            >
                <div class="table-responsive-sm list">

                    <table class="table">
                        <tr class="table-title">
                            <td rowspan="2" class="avatar">
                                <span class="iconify" data-icon="carbon:user-avatar-filled-alt"></span>
                            </td>
                            <td>Motorista</td>
                            <td>Status</td>
                            <td>Caminhão e código</td>
                            <td rowspan="2">  
                                <div class="button">  
                                    <a :href="'/dashboard/motoristas/detalhes-motorista/' +  motorista.MotoristaID">Ver mais</a>
                                </div>
                            </td>
                        </tr>

                        <tr class="table-content">
                            <td class="nome">
                                {{ motorista.Nome.replace(/'/g, '') }}
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