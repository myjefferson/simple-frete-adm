<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>
            <?= $titulo ?>
        </title>
		<meta name="description" content="Simple Frete System">
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
        <!--CSS Bootstrap-->
        <?= $cssBootstrap ?>
        <!--jQuery-->
        <?= $jsjQuery ?>
        <!--VueJS-->
        <?= $jsVue ?>
        <!--Axios-->
        <?= $jsAxios ?>
        <!--JS Bootstrap-->
        <?= $jsBootstrap ?>
        <!--ListJS-->
        <?= $jsList ?>
        <!--JS da página-->
        <?= $jsPage ?>

	</head>
	<body>
        <main id="main" class="<?=session()->get('lightMode')?>">
            <div class="container-fluid">
                <div class="line-style"></div>
                
                <div class="row">
                    <div class="col-md-2 col-lg-2 lateral-nav">
                        <nav class="content-nav col-md-2 col-lg-2">
                            <a href="">
                                <img id="brand" class="brand" src="<?=base_url("./assets/images/")?>/brand-<?=session()->get('lightMode')?>.svg" alt="Simple Frete System - Administração">
                            </a>
                            <ul class="menu-dashboard">
                                <li>
                                    <a href="/dashboard" class="home">
                                        <span class="iconify" data-icon="bx:home"></span> 
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="/dashboard/frete/solicitacao" class="frete">
                                        <span class="iconify" data-icon="akar-icons:shipping-box-01"></span>
                                        Fretes
                                    </a>
                                </li>
                                <li>
                                    <a href="/dashboard/motorista" class="motorista">
                                        <span class="iconify" data-icon="akar-icons:person"></span>
                                        Motoristas
                                    </a>
                                </li>
                                <li>
                                    <a href="/dashboard/veiculo" class="veiculo">
                                        <span class="iconify" data-icon="fluent:vehicle-truck-cube-24-regular"></span>
                                        Veículos
                                    </a>
                                </li>
                                <!-- <li>
                                    <a href="/dashboard/financeiro">
                                        <span class="iconify" data-icon="mdi:finance"></span>
                                        Financeiro
                                    </a>
                                </li> -->
                                <li>
                                    <a href="/dashboard/config" class="config">
                                        <span class="iconify" data-icon="majesticons:settings-cog-line"></span>
                                        Configurações
                                    </a>
                                </li>
                                <li>
                                    <a href="/action/logout">
                                        <span class="iconify" data-icon="bx:exit"></span>
                                        Sair
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-10 col-lg-10 content-page">
                        <?= $renderPage ?>
                    </div>
                </div>
            </div>

            <script>

                var dashboard = document.querySelector("header");
                var getAttr = dashboard.getAttribute("class").split("-").pop();

                document.querySelector(`.menu-dashboard a.${getAttr}`).classList.add("active")

            </script>
        </main>
    </body>
</html>