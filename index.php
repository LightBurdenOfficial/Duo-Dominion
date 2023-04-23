<?php
$path = $_SERVER['DOCUMENT_ROOT'];
include_once ($path.'/public/partials/header.php');
?>
	<body class="bg-dark">
		<div class="container-fluid">
			<section id="sectionLogin">
				<div class="form-box">
					<div class="form-value">
						<form action="">
							<h2>ACESSAR</h2>
							<div class="inputbox">
								<ion-icon name="mail-outline"></ion-icon>
								<input type="text" required id="logUser">
								<label for="">Usuário</label>
							</div>
							<div class="inputbox">
								<ion-icon name="lock-closed-outline"></ion-icon>
								<input type="password" required id="logPass">
								<label for="">Senha</label>
							</div>
							<div class="forget">
								<label for=""><input type="checkbox">Lembrar<br>
								<a href="#">Esqueci minha senha</a></label>
							</div>
							<button>Entrar</button>
							<div class="register">
								<p>Não tem uma conta? <a onclick="goRegister()">Registre!</a></p>
							</div>
						</form>
					</div>
				</div>
			</section>
			<section id="sectionRegister">
				<div class="form-box">
					<div class="form-value">
						<form action="">
							<h2>REGISTRAR</h2>
							<div class="inputbox">
								<ion-icon name="mail-outline"></ion-icon>
								<input type="text" required id="regUser">
								<label for="">Usuário</label>
							</div>
							<div class="inputbox">
								<ion-icon name="lock-closed-outline"></ion-icon>
								<input type="password" required id="regPass">
								<label for="">Senha</label>
							</div>
							<div class="inputbox">
								<ion-icon name="lock-closed-outline"></ion-icon>
								<input type="password" required id="regRepPass">
								<label for="">Repetir Senha</label>
							</div>
							<button>Registrar</button>
							<div class="register">
								<p>Já tem uma conta? <a onclick="goLogin()">Acesse!</a></p>
							</div>
						</form>
					</div>
				</div>
			</section>
		</div>
<script type="text/javascript">
	let sectionLogin = $("#sectionLogin");
	let sectionRegister = $("#sectionRegister");

	sectionRegister.hide();

	function goRegister() {
		sectionRegister.show();
		sectionLogin.hide();
	}

	function goLogin() {
		sectionRegister.hide();
		sectionLogin.show();
	}
</script>
	</body>
</html>