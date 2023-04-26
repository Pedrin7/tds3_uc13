<html>
	<head><title>EDITAR</title></head>	
	<body>
		<h3>SOU A TELA DE EDITAR USUARIO</h3>
		<form action="../../controller/usuario_controller.php?acao=atualizar" method="POST">
			Nome <input type="text" name="nome" value="<?php echo $dados[0]["nome"] ?>"/> <br>
			Sobrenome <input type="text" name="sobrenome" value="<?php echo $dados[0]["sobrenome"]?>"/> <br>
			Email <input type="text" name="email" value=" <?php echo $dados[0]["email"]?>"/> <br>
			Login <input type="text" name="login" value=" <?php echo $dados[0]["login"]?>"/> <br>
			Senha <input type="password" name="senha" value=" <?php echo $dados[0]["senha"]?>" > <br>
            Confirmar senha <input type="password" name="confirmar_senha" value=" <?php echo $dados[0]["confirmar_senha"]?>"/><br>

			<input type="submit" value="salvar"/>
            <a href="tela_principal.php">VOLTAR</a>
	    </form>
</body>
</html>