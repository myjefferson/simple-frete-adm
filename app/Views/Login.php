
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
<div id="page-login">
	<div class="conteudo">
		<form class="form-login">
			<div class="mb-3">
				<label for="inputEmail" class="form-label">Email</label>
				<input type="email" v-model="inputEmail" class="form-control" id="inputEmail" aria-describedby="emailHelp">
			</div>
			<div class="mb-3">
				<label for="inputPassword" class="form-label">Senha</label>
				<input type="password" v-model="inputSenha" class="form-control" id="inputSenha">
			</div>
			<button type="button" @click="clickLogin()" class="btn btn-primary onDefault">Entrar</button>
		</form>
	</div>
</div>