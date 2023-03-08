<?php
    $ano_bisexto = 2004;

    if($ano_bisexto % 4 == 0 && $ano_bisexto % 100 != 0){
        $ano_bisexto = "é bisexto";
    }
    
    elseif($ano_bisexto % 4 == 0 && $ano_bisexto % 100 == 0 && $ano_bisexto % 400 == 0){
        $ano_bisexto = "é bisexto";

    }
    else{
        $ano_bisexto = "não é bisexto";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANO BISEXTO</title>
</head>
    <body>
        <?php
            echo "O ano ".$ano_bisexto, ".";
         ?>
    
    </body>
</html>
