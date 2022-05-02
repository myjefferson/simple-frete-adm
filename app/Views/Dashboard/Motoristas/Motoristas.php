<?=  
    $viewHeaderMotorista;
?>

<div id="page-motoristas">
    <header class="">
        <h2><b>Motoristas</b></h2>
        <input type="text" class="search" placeholder="Busque por nome">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownNotifications" data-bs-toggle="dropdown" aria-expanded="false">
                Noty
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
                        <a href="#">Ver mais</a>
                    </div>
                </td>
            </tr>

            <tr class="table-content">
                <td class="nome">Antonio de Almeida</td>
                <td>Em viagem</td>
                <td class="veiculo">Renault Cod. 
                    <label class="registro-veiculo">234</label>
                </td>
            </tr>    
        </table>

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
                        <a href="#">Ver mais</a>
                    </div>
                </td>
            </tr>

            <tr class="table-content">
                <td class="nome">Mauro Gomes</td>
                <td>Em viagem</td>
                <td class="veiculo">Marcopolo Cod. 
                    <label class="registro-veiculo">234</label>
                </td>
            </tr>    
        </table>

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
                        <a href="#">Ver mais</a>
                    </div>
                </td>
            </tr>

            <tr class="table-content">
                <td class="nome">Mauro Gomes</td>
                <td>Em viagem</td>
                <td class="veiculo">Marcopolo Cod. 
                    <label class="registro-veiculo">234</label>
                </td>
            </tr>    
        </table>
    </div>
</div>

<script>
    var options = {
        valueNames: ['nome', 'registro-veiculo', 'veiculo']
    }

    var hackerList = new List('page-motoristas', options)

</script>

