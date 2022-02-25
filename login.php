<?php include('menu.php'); ?>

<body style="background-color: beige;">

<div class="box-login">
		<h2>Efetue o login:</h2>
		<form method="post" action="./pages/home.php">
			<input type="text" name="user" placeholder="E-mail.." required>
			<input type="password" name="password" placeholder="Senha.." required>
			<div class="logar">
				<input type="submit" name="acao" value="Logar">
			</div>
			<div>
				<label>Lembrar-me</label>
				<input type="checkbox" name="lembrar" />
			</div>
		</form>
	</div><!--box-login-->
</body>
<link rel="stylesheet" href="css/estilo.css">