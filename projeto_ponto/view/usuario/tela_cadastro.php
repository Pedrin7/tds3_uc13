<html>
	<head><title>CADASTRO</title></head>	
	<body>
		<h3>SOU A TELA DE CADASTRAR USUARIO</h3>
		<form action="../../controller/usuario_controller.php?acao=cadastrar" method="POST">
			Nome <input type="text" name="nome"/> <br>
			Sobrenome <input type="text" name="sobrenome"/> <br>
			Email <input type="text" name="email"/> <br>
			Login <input type="text" name="login"/> <br>
			Senha <input type="password" name="senha"/> <br>
            Confirmar senha <input type="password" name="confirmar_senha"/><br>

			<input type="submit" value="salvar"/>
            <a href="principal.php">VOLTAR</a>
	    </form>
</body>
</html>