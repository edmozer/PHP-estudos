<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <?php 
            $valor1 = $_GET['v1'];
            $valor2 = $_GET['v2'];
        
        ?>
        <main>
            <h1>Somador de valores</h1>
            <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
                <label for="v1">Valor</label>
                <input type="number" name="v1" id="v1" value="">
                <label for="v2"> Valor 2</label>
                <input type="number" name="v2" id="v2" value="">
                <input type="submit" value="Somar">
            </form>
        </main>

        <section id="resultado">
            <h2>Resultado da soma</h2>
            <?php 
                $soma = $valor1 + $valor2;

                echo "O valor da soma entre $valor1 e $valor2 eh igual ah <strong>$soma</strong>";
            ?>



        </section>
    
</body>
</html>