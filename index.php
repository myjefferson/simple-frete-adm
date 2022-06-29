<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?php 
                if(tipoUsuario == "administrador"){
                    echo"Administrador";
                }else{
                    echo"Funcionario";
                }
            ?>
        </title>
    </head>
    <body>
        <nav>
            <ul>
                <?php 
                    if(tipoUsuario == "administrador"){
                        echo" 
                            <li>Inicio</li>
                            <li>CLientes</li>
                            <li>Financeiro</li>
                            <li>Reservas</li>
                        ";
                    }else{
                        echo" 
                            <li>Inicio</li>
                            <li>CLientes</li>
                        ";
                    }
                ?>
            </ul>
        </nav>
    </body>
</html>