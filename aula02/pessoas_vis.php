<?php
    require_once "banco.php";
    $dados_clientes= obter_dados();
?>
<!doctype html>
<html lang="en">
<head>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Nome</th>
        <th scope="col">Idade</th>
        <th scope="col">Estado</th>
    </tr>
    </thead>
    <tbody>
        <?php for($i = 0; $i<count($dados_clientes);$i++){ ?>
            <tr>
                <td><?php echo $dados_clientes[$i]['nome'];?></td>
                <td><?php echo $dados_clientes[$i]['idade'];?></td>
                <td><?php echo $dados_clientes[$i]['estado'];?></td>
            </tr>
        <?php } ?>
    </tbody></table></body></html>