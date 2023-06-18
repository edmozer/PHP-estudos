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
                $n = $_GET["nome"] ?? "";
                $s = $_GET["sobrenome"] ?? "Dados nao inseridos";
                echo "<p>Eh um prazer te conhecer, $n $s! este eh o meu site!"
            
            ?>
            <p><a href="javascript:history.go(-1)">Clique aqui para retornar</a></p>
        </main>
    
</body>
</html>