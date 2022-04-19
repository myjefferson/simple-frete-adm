<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title><?= $titulo ?></title>
		<meta name="description" content="Simple frete System">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
        <!--Global Styles-->
        <?= $globalStyles ?>
        <!--CSS da página-->
        <?= $cssPage ?>
        <!--Framework icons-->
        <?= $iconify ?>
        <!--Dashboard Style-->
        <?= $dashboardStyle ?>
        <!--Bootstrap-->
        <?= $cssBootstrap ?>
        <?= $jsBootstrap ?>
	</head>
	<body>
        <div class="container-fluid">
            <div class="line-style"></div>
            
            <div class="row">
                <div class="col-md-2 col-lg-2 lateral-nav">
                    <nav class="content-nav col-md-2 col-lg-2">
                        <a href="">
                            <img class="brand" src="<?=base_url("./assets/images/brand.svg")?>" alt="Simple Frete System - Administração">
                        </a>
                        <ul>
                            <li>
                                <a href="/dashboard">
                                    <span class="iconify" data-icon="bx:home"></span> 
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="/dashboard/motoristas">
                                    <span class="iconify" data-icon="akar-icons:person"></span>
                                    Motoristas
                                </a>
                            </li>
                            <li>
                                <a href="/dashboard/caminhoes">
                                    <span class="iconify" data-icon="fluent:vehicle-truck-cube-24-regular"></span>
                                    Caminhões
                                </a>
                            </li>
                            <li>
                                <a href="/dashboard/financeiro">
                                    <span class="iconify" data-icon="mdi:finance"></span>
                                    Financeiro
                                </a>
                            </li>
                            <li>
                                <a href="/dashboard/config">
                                    <span class="iconify" data-icon="majesticons:settings-cog-line"></span>
                                    Configurações
                                </a>
                            </li>
                            <li>
                                <a href="/">
                                    <span class="iconify" data-icon="bx:exit"></span>
                                    Sair
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-10 col-lg-10 content-page">
                    <?= $loadPage ?>
                </div>
            </div>
        </div>
    </body>
</html>