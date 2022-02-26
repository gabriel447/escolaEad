<!-- header -->
<?php include('menu.php'); ?>

<body style="background-color: beige;">

<div class="box-cadastro">
		<h2>Efetue o cadastro:</h2>
		<form method="post" action="">
		<input type="text" name="user" placeholder="Nome Completo" required>
            <input type="text" name="number" placeholder="Celular" required>
			<input type="text" name="user" placeholder="E-mail" required>
			<input type="password" name="password" placeholder="Senha" required>
			<div class="cadastrar">
				<input type="submit" name="acao" value="Cadastrar">
			</div>
		</form>
	</div><!--box-cadastro-->
</body>