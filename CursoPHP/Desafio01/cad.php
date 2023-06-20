<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
        <header>
            <h1>Resultado do processamento</h1>
        </header>
        <main>
            <?php 
                $n = $_REQUEST["numero"] ?? 0;
                $ant = $n - 1;
                $sus = $n + 1;
                echo "O numero digitado foi <strong>$n</strong>.<br>";
                echo "O numero antecessor a $n eh <strong>$ant</strong>.<br>";
                echo "O numero sucessor a $n eh <strong>$sus</strong>.<br>";
            
            ?>
            <p><a href="javascript:history.go(-1)">Deseja operar novamente? Clique aqui para retornar.</a></p>
            <!-- Para voltar poderia usar tambem "javascript:window.location.href='index.html'" -->

            
        </main>
    
</body>
</html>