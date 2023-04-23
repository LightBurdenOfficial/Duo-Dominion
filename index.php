<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="title" content="Duo Dominion">
		<meta name="description" content="O Duo Dominion é um jogo de tabuleiros que consiste em uma batalha num mapa selecionado pela maioria da equipe.">
		<meta name="keywords" content="duo,duo dominion, dominio, multiplayer, coops, co-operation, two players, team, teams, game, jogo, tabuleiro, brasileiro">
		<meta name="robots" content="index, follow">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="language" content="Portuguese">
		<meta name="revisit-after" content="5 days">
		<meta name="author" content="Francis Santiago">
		<title>Duo Dominion</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
	</head>
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