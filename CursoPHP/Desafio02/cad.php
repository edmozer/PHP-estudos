<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO 01</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    <header>
        
    </header>
    <section>
        <h1>Trabalhando com números aleatórios</h1>

        <p>Gerando um valor aleatório entre 1 e 100...</p>

        <?php
        $valor = "";

        if (isset($_GET['gerar'])) {
            $valor = mt_rand(1, 100); 
            // Poderia usar rand(), mas eh uma funcao mais lenta. mt_rand eh mais recomendada 
            // random_int() gera numeros aleatorios criptograficamente seguros, mas eh mais lenta.
                }

        echo "<p>O valor gerado foi <strong>$valor</strong></p>";
        ?>

        <form action="" method="get">
            <p>Deseja gerar um novo numero? </p>
            <input type="submit" name="gerar" value="🔄Clique aqui">
            
        </form>
    </section>
</body>
</html>
